<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'galleries';
    protected $guarded = [];
    const Spa = 1;
    const Restaurant = 2;
    const Stay = 3;
    const Activity = 4;
    const Resort = 5;
    const Amenities = 6;

    public function image()
    {
        return $this->hasOne(GalleryImage::class, 'gallery_id', 'id');
    }
}
