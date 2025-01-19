<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\Booking;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{

    public function create()
    {
        // Mengambil room yang hanya berstatus "available"
        $rooms = Room::where('status', 'available')->with('roomType')->get();
        return view('bookingpage', ['rooms' => $rooms]);
    }

    public function store(Request $request)
    {
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
        $room = Room::find($validated['roomid']);  // Cek room berdasarkan roomid
        
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
        Booking::create([
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

        return response()->json([
            'success' => true,
            'message' => 'Your booking has been successfully created!',
        ]);
        
    }
       

}
