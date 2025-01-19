<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index()
    {
        // Ambil data review dari database
        $reviews = Review::orderBy('created_at', 'desc')->take(7)->get();

        // Kirim data ke view
        return view('home', ['title' => 'Home', 'reviews' => $reviews]);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'review' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:10',
        ]);

        // Simpan data ke database
        review::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'review' => $request->review,
            'rating' => $request->rating,
        ]);

        return redirect()->route('home')->with('succes', 'Review sent Successfully!');
    }

}
