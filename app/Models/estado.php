<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
 protected $table = 'estado';
    public $timestamps = false;
    protected $fillable = [
        'id_estado',
        'Nombre',
    ]; 
}
