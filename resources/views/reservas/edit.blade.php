@extends('layout')

@section('content')
<h2>Editar Reserva</h2>

<form action="{{ route('reservas.update', $reserva) }}" method="POST">
    @csrf @method('PUT')
    @include('reservas.partials.form')
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('reservas.index') }}" class="btn btn-danger">Cancelar</a>
</form>
@endsection
