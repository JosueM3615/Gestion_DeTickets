<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'users';

    public $timestamps = false;

    protected $fillable = [
        'id_rol',
        'Nombre',
        'Apellido',
        'usuario',
        'contraseña',
        'Direccion'
    ]; 
}
