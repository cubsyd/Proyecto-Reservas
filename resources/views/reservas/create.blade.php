@extends('layout')

@section('content')
<h2>Crear Reserva</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('reservas.store') }}" method="POST">
    @csrf
    @include('reservas.partials.form')
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('reservas.index') }}" class="btn btn-danger">Cancelar</a>
</form>
@endsection
