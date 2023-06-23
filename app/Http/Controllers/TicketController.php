<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\CategoriaTicket;
use App\Models\etiqueta;
use App\Models\prioridad;
use App\Models\categoriaticket as ModelsCategoriaticket;
use App\Models\EtiquetaTicket;
use App\Models\ticket;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class TicketController extends Controller
{
    public function Index()
    {
        $categorias = categoria::all();
        $etiquetas = etiqueta::all();
        $prioridades = prioridad::all();
        return view('crear', compact('categorias', 'etiquetas', 'prioridades'));
    }

    public function Vcrear()
    {
        return view('crear');
    }

    public function store(Request $request)
    {

        $etiqueta = json_decode($request->input('etiqueta'));
        $idEtiqueta = $etiqueta->id_etiqueta;

        $categoria = json_decode($request->input('categoria'));
        $idcategoria = $categoria->id_categoria;

        $prioridad = json_decode($request->input('prioridad'));
        $idprioridad = $prioridad->id_prioridad;

        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $errors;
        }
        if ($idcategoria != 0 && $idEtiqueta != 0 || $idprioridad == 0) {
            $nuevoticket = ticket::create([
                'id_usuario' => 1,
                'id_estado' => 1,
                'id_prioridad' => $idprioridad,
                'titulo' => $request->titulo,
                'descripcion' => $request->descripcion,
            ]);
            return ($nuevoticket);
        } else {
            return ("Hacen falta datos esenciales");
        }

    }
}