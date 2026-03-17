<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gimnasio extends Model
{
    use HasFactory;

    protected $table = 'gimnasios'; 

    protected $primaryKey = 'id_gimnasio';

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'horario_apertura',
        'horario_cierre'
    ];

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'id_gimnasio');
    }

    public function personal()
    {
        return $this->hasMany(Personal::class, 'id_gimnasio');
    }
}