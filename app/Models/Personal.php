<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory; 

    protected $table = 'personal';

    protected $primaryKey = 'id_personal';

    protected $fillable = [
        'nombre',
        'apellidos',
        'dni',
        'telefono',
        'direccion',
        'salario',
        'horario',
        'estado',
        'id_gimnasio'
    ];

    public function gimnasio()
    {
        return $this->belongsTo(Gimnasio::class, 'id_gimnasio');
    }
}