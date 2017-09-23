<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prasarana extends Model
{
    protected $table = 'prasarana';

    public $timestamps = false;

    protected $fillable = [
        'nama', 'keterangan'
    ];
}
