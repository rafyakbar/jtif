<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    public $timestamps = false;

    protected $table = 'carousel';

    protected $fillable = [
        'dir', 'created_at', 'updated_at'
    ];
}
