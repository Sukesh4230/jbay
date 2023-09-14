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

    public function sliders()
    {
        return $this->hasMany(RoomSlider::class, 'room_id', 'id');
    }

    public function footers()
    {
        return $this->hasMany(RoomFooter::class, 'room_id', 'id');
    }
}
