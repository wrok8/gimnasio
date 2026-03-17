<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'planes'; 

    protected $primaryKey = 'id_plan';

    protected $fillable = [
        'nombre_plan',
        'clientes_inscritos',
        'descripcion',
        'costo'
    ];

    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'id_plan');
    }
}