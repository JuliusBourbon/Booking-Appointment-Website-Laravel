<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;

class RoomSuiteController extends Controller
{
    public function index()
    {
        // Ambil semua data roomtype dari database
        $roomTypes = RoomType::all();

        // Kirim data ke view RoomSuites.blade.php
        return view('RoomSuites', [
            'title' => 'Room & Suites', 
            'roomTypes' => $roomTypes
        ]);
    }
}
