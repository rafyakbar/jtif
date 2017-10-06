<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    protected $table = 'kritik_saran';

    protected $fillable = [
        'isi', 'updated_at', 'created_at'
    ];
}
