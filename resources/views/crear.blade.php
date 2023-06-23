@extends('plantilla')

@section('contenidopanelder')
    <div class="formulario">
        <form action={{ route('ticket.store') }} class="contform" method="POST">
            @csrf
            <label for="titulo"> Titulo</label>
            <input type="text" name="titulo" class="tituloTicket">

            <label for="descripcion"> Descripción</label>
            <textarea name="descripcion" id="" cols="30" rows="10"></textarea>

            <label for="archivo"> Adjunte archivo</label>
            <input type="file" id="file" name="archivo">

            <label for="etiqueta"> Seleccione etiqueta</label>
            <select name="etiqueta[]" id="etiqueta">
                @foreach ($etiquetas as $etiqueta)
                    <option value="{{ $etiqueta }}">{{ $etiqueta->Nombre }}</option>
                @endforeach
            </select>

            <select name="categoria[]" id="categoria" >
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria }}">{{ $categoria->Nombre }}</option>
                @endforeach
            </select>

            <div id="miDiv">
                <button class="Crear" value="submit">Crear ticket</button>
                <button class="Cancelar">Cancelar</button>
            </div>

            <input type="hidden" name="categoriasSeleccionadas" id="categoriasSeleccionadas" value="">
        </form>

    </div>
    <script src="{{ asset('js/funciones.js') }}"></script>
@endsection