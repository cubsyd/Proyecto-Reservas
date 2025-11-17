@extends('layout')

@section('content')
<h2>Listado de Reservas</h2>
<a href="{{ route('reservas.create') }}" class="btn btn-primary mb-3">Crear nueva reserva</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Espacio</th>
            <th>Solicitante</th>
            <th>Fecha</th>
            <th>Hora Inicio</th>
            <th>Hora Fin</th>
            <th>Motivo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reservas as $reserva)
        <tr>
            <td>{{ $reserva->espacio->nombre }}</td>
            <td>{{ $reserva->solicitante }}</td>
            <td>{{ $reserva->fecha }}</td>
            <td>{{ $reserva->hora_inicio }}</td>
            <td>{{ $reserva->hora_fin }}</td>
            <td>{{ $reserva->motivo }}</td>
            <td>
                <a href="{{ route('reservas.edit', $reserva) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('reservas.destroy', $reserva) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar la reserva de {{ $reserva->solicitante }}?')" style="display:inline;" required>
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $reservas->links() }}
@endsection
