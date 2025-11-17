@extends('layout')

@section('content')
<h2>Listado de Espacios</h2>
<a href="{{ route('espacios.create') }}" class="btn btn-primary mb-3">Crear nuevo espacio</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Capacidad</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($espacios as $espacio)
        <tr>
            <td>{{ $espacio->nombre }}</td>
            <td>{{ $espacio->tipo }}</td>
            <td>{{ $espacio->capacidad }}</td>
            <td>{{ $espacio->ubicacion }}</td>
            <td>
                <a href="{{ route('espacios.edit', $espacio) }}" class="btn btn-sm btn-warning">Editar</a>
                <form action="{{ route('espacios.destroy', $espacio) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar el espacio de {{ $espacio->nombre }}?')" style="display:inline;" required>
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $espacios->links() }}
@endsection