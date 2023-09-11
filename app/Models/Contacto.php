<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    //Esto se usa cuando la tabla tiene un nombre diferente
    protected $table = 'contactos';
    public $timestamps = false;
}
