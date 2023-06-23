<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table = 'categoria';

    public function tickets()
    {
        return $this->belongsToMany(ticket::class, 'categoria_ticket', 'id_categoria', 'id_ticket');
    }
}
