<div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $espacio->nombre ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Tipo</label>
    <input type="text" name="tipo" class="form-control" value="{{ old('tipo', $espacio->tipo ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Capacidad</label>
    <input type="number" name="capacidad" class="form-control" min="1" value="{{ old('capacidad', $espacio->capacidad ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Ubicación</label>
    <input type="text" name="ubicacion" class="form-control" value="{{ old('ubicacion', $espacio->ubicacion ?? '') }}" required>
</div>