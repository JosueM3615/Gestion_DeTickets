<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoriaticket extends Model
{
    use HasFactory;
    protected $table = 'categoria_ticket';

    protected $fillable = [
        'id_ticket',
        'id_categoria'
    ];

}
