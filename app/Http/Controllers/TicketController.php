<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\CategoriaTicket;
use App\Models\categoriaticket as ModelsCategoriaticket;
use App\Models\EtiquetaTicket;
use App\Models\ticket;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function Index(){
    return view('listatickets');
    } 
   
    public function store(Request $request){
       
        dd($request->post());

        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'descripcion' => 'required',
            'categorias' => 'required',
            'etiquetas' => 'required'
        ]);
        if ($validator->fails()) {
           
            $errors = $validator->errors();
            return $errors;
        }



        $nuevoticket = ticket::create([
            'id_usuario' => 1,
            'id_estado' => 1,
            'id_prioridad' => $request->id_prioridad,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        ]);

                
        $categoria = $request->post('categorias');
        $etiquetas = $request->post('etiquetas');
        
         foreach($categoria as $lineacategoria){
        
            $nuevalinea = categoriaTicket::create([
                'id_ticket' => $nuevoticket->id,
                'id_categoria' => $lineacategoria['id_categoria'],
            ]);
         }

        foreach($etiquetas as $lineaetiqueta){
            $nuevacalineaetiqueta = new categoria(); 
            $nuevacalineaetiqueta ->id_ticket = $request->post('id_ticket');
           $nuevacalineaetiqueta ->id_etiqueta = $request->post('id_etiqueta');
           $nuevacalineaetiqueta  ->save();
        }
    }
}
