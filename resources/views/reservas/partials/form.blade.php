<div class="mb-3">
    <label>Espacio</label>
    <select name="espacio_id" class="form-control" required>
        @foreach($espacios as $espacio)
            <option value="{{ $espacio->id }}" {{ old('espacio_id', $reserva->espacio_id ?? '') == $espacio->id ? 'selected' : '' }}>
                {{ $espacio->nombre }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Solicitante</label>
    <input type="text" name="solicitante" class="form-control" value="{{ old('solicitante', $reserva->solicitante ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Fecha</label>
    <input type="date" name="fecha" class="form-control" value="{{ old('fecha', $reserva->fecha ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Hora Inicio</label>
    <input type="time" name="hora_inicio" class="form-control" value="{{ old('hora_inicio', $reserva->hora_inicio ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Hora Fin</label>
    <input type="time" name="hora_fin" class="form-control" value="{{ old('hora_fin', $reserva->hora_fin ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Motivo</label>
    <input type="text" name="motivo" class="form-control" value="{{ old('motivo', $reserva->motivo ?? '') }}">
</div>