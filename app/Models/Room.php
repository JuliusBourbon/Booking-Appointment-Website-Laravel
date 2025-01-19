<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms'; // Sesuaikan dengan nama tabel Anda
    protected $primaryKey = 'roomid'; // Sesuaikan dengan primary key Anda
    public $timestamps = false; // Jika tabel tidak memiliki kolom created_at dan updated_at
    protected $fillable = ['roomnumber', 'roomtypeid', 'status'];

    // Menambahkan relasi ke Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'roomid', 'roomid');
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'roomtypeid', 'roomtypeid');
    }
}
