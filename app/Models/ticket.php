<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    protected $table = 'ticket';
    public $timestamps = false;
    protected $fillable = [
        'id_usuario',
        'id_estado',
        'id_prioridad',
        'titulo',
        'descripcion',
    ]; 

    public function categorias()
    {
        return $this->belongsToMany(categoria::class, 'categoria_ticket', 'id_ticket', 'id_categoria');
    }

    public function etiquetas()
    {
        return $this->belongsToMany(etiqueta::class, 'etiquetaticket', 'id_ticket', 'id_etiqueta');
    }
}
