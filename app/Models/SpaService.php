<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpaService extends Model
{
    use HasFactory;
    protected $table = 'spa_services';
    protected $guarded = [];
    const Abhyanga = 1;
    const Shirodhara = 2;
    const ShiroAbhyanga = 3;
    const PadaAbhyanga = 4;
    const Mukhalepam = 5;
    const Udwarthanam = 6;
    const Podikizhi = 7;
    const Pizhichil = 8;
    const Pedicure = 9;
    const PrishtaAbhyanga = 10;
}
