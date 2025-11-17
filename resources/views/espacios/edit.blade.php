@extends('layout')

@section('content')
<h2>Editar Espacio</h2>

<form action="{{ route('espacios.update', $espacio) }}" method="POST">
    @csrf @method('PUT')
    @include('espacios.partials.form')
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('espacios.index') }}" class="btn btn-danger">Cancelar</a>
</form>
@endsection