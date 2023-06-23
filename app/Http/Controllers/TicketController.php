<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\etiqueta;
use App\Models\prioridad;
use App\Models\ticket;
use App\Models\user;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function Index()
    {
        $tickets = ticket::with('categorias')->get();

        //dd($tickets);
        return view('listatickets', compact('tickets'));
    }

    public function Vcrear()
    {
        $categorias = categoria::all();
        $etiquetas = etiqueta::all();
        $prioridades = prioridad::all();
        return view('crear', compact('categorias', 'etiquetas', 'prioridades'));
    }

    public function store(Request $request)
    {

        //dd($request->post());

        $validator = Validator::make($request->all(), [
            'titulo' => 'required',
            'descripcion' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return $errors;
        }

        if ($request->etiqueta != 0 && $request->categoria != 0 || $request->prioridad == 0) {

            try {
                $nuevoticket = ticket::create([
                    'id_usuario' => 1,
                    'id_estado' => 1,
                    'id_prioridad' => $request->prioridad,
                    'titulo' => $request->titulo,
                    'descripcion' => $request->descripcion,
                ]);

                $nuevoticket->categorias()->attach($request->categoria);
                $nuevoticket->etiquetas()->attach($request->etiqueta);

                return ($nuevoticket);

            } catch (Exception $e) {
                return ($e->getMessage());
            }

        } else {
            return ("Hacen falta datos esenciales");
        }

    }
}