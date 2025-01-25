<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\Booking;
use App\Models\RoomType;
use App\Mail\BookingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    // Menampilkan halaman konfirmasi pembatalan
    public function showCancelPage($id)
    {
        $booking = Booking::find($id);

        if (!$booking) {
            return view('CancelBooking', [
                'title' => 'Cancel Booking', 
                'success' => false,
                'message' => 'Booking not found or already canceled!',
                'booking' => null
            ]);
        }

        return view('CancelBooking', [
            'title' => 'Cancel Booking', 
            'success' => true,
            'message' => 'Are you sure you want to cancel this booking?',
            'booking' => $booking
        ]);
    }

     // Menangani permintaan pembatalan
     public function deleteBooking(Request $request, $id)
     {
         $booking = Booking::find($id);
 
         if (!$booking) {
             return redirect()->route('CancelBooking', ['id' => $id])->withErrors('Booking not found or already canceled!');
         }

         // Cari room terkait berdasarkan roomid dari booking
        $room = Room::find($booking->roomid);

        if ($room) {
            // Ubah status room menjadi "available"
            $room->update(['status' => 'available']);
        }
 
         $booking->delete();
 
         return redirect()->route('home')->with('success', 'Your booking has been successfully canceled.');
     }

    public function create()
    {
        // Mengambil room yang "available"
        $rooms = Room::where('status', 'available')->with('roomType')->get();
        return view('bookingpage', ['rooms' => $rooms]);
    }

    public function store(Request $request)
    {
        // Log::info('Request reached store method');
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'address' => 'nullable|string',
            'roomid' => 'required|exists:rooms,roomid',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'payment_method' => 'required|string',
        ]);            

        // Ambil data room berdasarkan roomid
        $room = Room::find($validated['roomid']);
        
        if (!$room->roomType) {
            return redirect()->back()->withErrors(['roomid' => 'Room type not found.']);
        }

        if ($room->status == 'booked') {
            return redirect()->back()->withErrors(['roomid' => 'This room has already been booked.']);
        }

        // Hitung durasi dan total harga
        $checkIn = Carbon::parse($validated['check_in']);
        $checkOut = Carbon::parse($validated['check_out']);
        $duration = $checkIn->diffInDays($checkOut);

        $pricePerNight = $room->roomType->price; // Ambil harga per malam dari roomType
        $Total_Price = $pricePerNight * $duration;

        // Simpan data booking ke dalam database
        $booking = Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'roomid' => $request->roomid,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'payment_method' => $request->payment_method,
            'Total_Price' => $Total_Price,
        ]);

        // Ubah status room menjadi 'booked'
        $room->update(['status' => 'booked']);

        // Kirim email konfirmasi ke pengguna
        Mail::to($booking->email)->send(new BookingMail($booking));

        return redirect()->route('bookings')->with('success', 'Your booking has been successfully created! Check your email for more informations');
    }
       

}
