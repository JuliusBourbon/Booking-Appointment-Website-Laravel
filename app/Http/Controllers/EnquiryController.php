<?php

namespace App\Http\Controllers;

use App\Models\enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all()); // Melihat data yang dikirimkan
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // Simpan data ke database
        Enquiry::create([
            'nama' => $request->nama,  // Menyimpan nilai nama
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirect setelah sukses dengan pesan
        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }

}
