<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory; 

    protected $table = 'clientes';

    protected $primaryKey = 'id_cliente';

    protected $fillable = [
        'nombre',
        'apellidos',
        'correo_electronico',
        'estado',
        'id_plan',
        'id_gimnasio'
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class, 'id_plan');
    }

    public function gimnasio()
    {
        return $this->belongsTo(Gimnasio::class, 'id_gimnasio');
    }
}