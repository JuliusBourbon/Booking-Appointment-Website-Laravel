<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;

class RoomController extends Controller
{
    public function show($id)
    {
        // Ambil data berdasarkan ID
        $roomType = RoomType::findOrFail($id);

        // Kirim data ke view
        return view('roomdesc', [
            'title' => 'Room Details',
            'roomType' => $roomType]);
    }
}
