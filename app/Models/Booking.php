<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'address', 'roomid', 'check_in', 'check_out', 'payment_method', 'Total_Price'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, 'roomid', 'roomid');
    }
    
}
