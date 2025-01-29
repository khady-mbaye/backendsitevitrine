<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    protected $fillable = [
        'image_path',
        'titre',
        'description',
        'prix'
    ];
}
