<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etiqueta extends Model
{
    use HasFactory;
    protected $table = 'etiqueta';

    public function tickets()
    {
        return $this->belongsToMany(ticket::class, 'etiquetaticket', 'id_etiqueta', 'id_ticket');
    }
}