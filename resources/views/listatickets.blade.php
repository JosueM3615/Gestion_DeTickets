@extends('plantilla')

@section('contenidopanelder')
    <table class="Tabla">
        <form action="{{ route('ticket.nuevo') }}" method="GET">
            @csrf
            <button type="submit" class="botonCrear">Crear ticket</button>
        </form>
        <tr class="TitulosTabla">
            <th>Numero</th>s
            <th>Titulo</th>
            <th>Prioridad</th>
            <th>Estado</th>
            <th>Categoria</th>
            <th>Opciones</th>
        </tr>
        @if ($tickets == null)
            <!-- Caso cuando $tickets es null -->
        @elseif ($tickets != null)
            <!-- Caso cuando $tickets no es null -->
            @foreach ($tickets as $ticket)
                <tr class="Filas">
                    <td>{{ $ticket->id_ticket }}</td>
                    <td>{{ $ticket->titulo }}</td>
                    <td>{{ $ticket->id_prioridad }}</td>
                    <td>{{ $ticket->id_estado }}</td>
                    <td>
                        {{ optional($ticket->categorias->first())->Nombre }}
                    </td>
                    <td>op</td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection
