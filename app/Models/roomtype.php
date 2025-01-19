<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roomtype extends Model
{
    protected $table = 'roomtypes';  // Pastikan nama tabel sesuai
    protected $primaryKey = 'roomtypeid';   // Pastikan kolom ID sesuai
    protected $fillable = ['typename', 'desc', 'size', 'img', 'price', 'stock', 'bed', 'smoking', 'person', 'bathroom'];

    public function rooms()
    {
        return $this->hasMany(Room::class, 'roomtypeid', 'roomtypeid');
    }
}
