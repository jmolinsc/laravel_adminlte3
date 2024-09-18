<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cte extends Model
{
    use HasFactory;

    protected $fillable = [
       'codigo',
        'nombre',
        'direccion',
        'ncr',
        'nit'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id'

    ];

}
