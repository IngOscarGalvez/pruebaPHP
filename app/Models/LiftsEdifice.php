<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LiftsEdifice extends Model
{
    protected $table = 'lifts_edifice';

    protected $fillable = [
        'name', 'edifice_id'
    ];
}
