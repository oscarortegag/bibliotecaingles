<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros_frances extends Model
{
    use HasFactory;

    protected $fillable = [
     'titulo',
     'nivel',
     'editorial',
     'autor',
     'isbn',
     'categoria',
     'idioma',
     'cantidad',   
    ];
}
