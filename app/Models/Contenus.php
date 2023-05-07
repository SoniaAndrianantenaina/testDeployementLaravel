<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenus extends Model
{
    protected $fillable =[
        'titre',
        'description',
        'texte',
        'images'
    ];

    protected $table = 'contenus';
}
