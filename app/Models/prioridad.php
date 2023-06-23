<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prioridad extends Model
{
    use HasFactory;
    protected $table = 'prioridad';
    public $timestamps = false;
    protected $fillable = ['id_prioridad', 'Nombre'];
}
