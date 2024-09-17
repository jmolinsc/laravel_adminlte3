<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CteForm extends Form
{
    //

    //#[Validate('required|min:5')]
    public $codigo = '';

    //#[Validate('required|min:5')]
    public $nombre = '';


    public $direccion = '';


    public $nrc = '';


    public $nit = '';


    public $dui = '';


    public $telefono = '';


    public $familia = '';


    public $categoria = '';


    public $pais = '';


    public $departamento = '';


    public $municipio = '';


    public $ae = '';


    public $email = '';


    public $contacto = '';


    public $agente = '';


    public $listaprecios = '';


    public $condicion = '';


    public $limitesaldo = '';


    public $saldomaximo = '';


    public $diastramite = '';


    public $zonaimpuestos = '';


    public $regimenfiscal = '';


    public $grupo = '';


    public $estatus = '';
}
