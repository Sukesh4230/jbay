<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'rooms';
    protected $guarded = [];
    const DUKE = 1;
    const BEETLE = 2;
    const REGAL = 3;
    const BOUGAIN = 4;
    const PAVILION = 5;
    const PENT = 6;

    public function sliders()
    {
        return $this->hasMany(RoomSlider::class, 'room_id', 'id')->latest();
    }

    public function footers()
    {
        return $this->hasMany(RoomFooter::class, 'room_id', 'id');
    }

    public function defaultImage()
    {
        return $this->hasOne(RoomSlider::class, 'room_id', 'id');
    }
}
