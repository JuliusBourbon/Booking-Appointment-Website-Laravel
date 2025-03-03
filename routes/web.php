<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomsuiteController;
use App\Http\Controllers\AuthController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/bookings', [BookingController::class, 'create'])->name('bookings');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
});

// Halaman utama
Route::get('/', [ReviewController::class, 'index'])->name('home');
Route::post('/', [ReviewController::class, 'store'])->name('home.store');

// Room & Suites
Route::get('/room-suites', [RoomsuiteController::class, 'index'])->name('room-suites');

// Room description
Route::get('roomdesc/{id}', [RoomController::class, 'show'])->name('roomdesc');

// Offers
Route::get('/offers', function () {
    return view('offers', ['title' => 'Offers']);
});

// Facilities
Route::get('/facility', function () {
    return view('facility', ['title' => 'Facilities']);
});

// Contact
Route::get('/contact', function () {
    return view('contactus', ['title' => 'Contact Us']);
})->name('contact');

Route::post('/contact', [EnquiryController::class, 'store'])->name('contact.store');

Route::get('/CancelBooking/{id}', [BookingController::class, 'showCancelPage'])->name('CancelBooking');
Route::post('/CancelBooking/{id}', [BookingController::class, 'deleteBooking'])->name('DeleteBooking');

// Mail Route
Route::get('/bookings.store', function () {
    return view('mail');
});

require __DIR__.'/auth.php';