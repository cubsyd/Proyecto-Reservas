@extends('layout')

@section('content')
<h2>Crear Espacio</h2>

<form action="{{ route('espacios.store') }}" method="POST">
    @csrf
    @include('espacios.partials.form')
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('espacios.index') }}" class="btn btn-danger">Cancelar</a>
</form>
@endsection