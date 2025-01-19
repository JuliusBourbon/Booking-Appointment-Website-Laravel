<?php

namespace App\Observers;

use App\Models\Room;
use App\Models\RoomType;

class RoomObserver
{
    public function created(Room $room)
    {
        // Perbarui stock ketika room baru dibuat
        $this->updateStock($room->roomtypeid);
    }

    public function updated(Room $room)
    {
        // Jika status room berubah menjadi 'booked', kurangi stock
        if ($room->isDirty('status')) {
            if ($room->status === 'booked') {
                $this->decrementStock($room->roomtypeid);
            } elseif ($room->getOriginal('status') === 'booked' && $room->status !== 'booked') {
                // Jika status berubah dari 'booked' ke status lain, tambah stock
                $this->incrementStock($room->roomtypeid);
            }
        }

        // Jika roomtypeid berubah, perbarui stock untuk roomtype lama dan baru
        if ($room->wasChanged('roomtypeid')) {
            $this->updateStock($room->getOriginal('roomtypeid'));
            $this->updateStock($room->roomtypeid);
        }
    }

    public function deleted(Room $room)
    {
        // Perbarui stock ketika room dihapus
        $this->updateStock($room->roomtypeid);
    }

    private function updateStock($roomtypeid)
    {
        // Hitung jumlah room yang tersedia berdasarkan roomtypeid
        $stock = Room::where('roomtypeid', $roomtypeid)->where('status', 'available')->count();
        // Perbarui stock di RoomType
        RoomType::where('roomtypeid', $roomtypeid)->update(['stock' => $stock]);
    }

    private function decrementStock($roomtypeid)
    {
        // Kurangi stock jika room dibooking
        RoomType::where('roomtypeid', $roomtypeid)->decrement('stock', 1);
    }

    private function incrementStock($roomtypeid)
    {
        // Tambah stock jika room dibatalkan atau statusnya berubah
        RoomType::where('roomtypeid', $roomtypeid)->increment('stock', 1);
    }
}