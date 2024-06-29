<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'razon_social',
        'domicilio',
        'codigo_postal',
        'localidad',
        'zona',
        'telefono',
        'fax',
        'provincia',
        'cuit',
        'mail',
        'contacto',
        'calificacion',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
