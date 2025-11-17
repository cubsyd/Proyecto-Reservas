<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservaController extends Model
{
    protected $fillable = ['espacio_id', 'solicitante', 'fecha', 'horaInicio', 'horaFin', 'motivo'];

    public function espacio() {
        return $this->belongsTo(Espacio::class);
    }

}
