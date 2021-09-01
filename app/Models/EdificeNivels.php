<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EdificeNivels extends Model
{
    protected $table = 'nivels_edifice';

    protected $fillable = [
        'name', 'edifice_id'
    ];
}
