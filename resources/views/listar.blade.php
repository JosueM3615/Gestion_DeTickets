@extends('plantilla')

@section('contenidopanelder')
<div class="formulario">
            <form action="" class="contform">
                
                <label for="titulo"> Titulo</label>
                <input type="text" name="titulo" class="tituloTicket" >

                <label for="descripcion"> Descripción</label>
                <textarea name="descripcion" id="" cols="30" rows="10"></textarea>
                 
                <label for="archivo"> Adjunte archivo </label>
                <input type="file" id="file" name="archivo">

                <label for="prioridad"> Seleccione prioridad</label>

                <select name="prioridad" id="prioridad">
                 <option value="1">Muy alta</option>
                 <option value="2">Alta</option>
                <option value="3">Baja</option>
               </select>

               <select name="categoria" id="prioridad">
                <option value="1">Software</option>
                <option value="2">Soporte</option>
                <option value="3">Hardware</option>
               </select>
               
               <div id="miDiv">
                <button class="Crear">Crear ticket</button>
                <button class="Cancelar">Cancelar</button>
              </div>
               

            </form>

        </div>
@endsection