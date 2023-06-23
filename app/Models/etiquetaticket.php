<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etiquetaticket extends Model
{
    protected $table = 'etiqueta_ticket';

    protected $fillable = [
        'id_ticket',
        'id_etiqueta',
    ]; 
}
