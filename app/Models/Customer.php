<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Menentukan kolom yang bisa diisi secara mass-assignment
    protected $fillable = ['name', 'email', 'phone', 'address'];

    // Menambahkan relasi satu ke banyak dengan Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'customerid');
    }
}
