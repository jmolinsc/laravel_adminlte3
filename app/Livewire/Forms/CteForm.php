<?php

namespace App\Livewire\Forms;

use App\Models\Cte;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CteForm extends Form
{
    //
    #[Validate('required|min:1')]
    public $codigo = '';
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

    public function save()
    {
        $this->validate();
        $cte = Cte::create(
            /* $this->only('codigo', 'nombre',
             'direccion','nrc','nit','dui','telefono','familia',
             'categoria','pais','departamento','municipio','ae','email','contacto','agente','listaprecios',
             'condicion','limitesaldo','saldomaximo','diastramite','zonaimpuestos','regimenfiscal','grupo','estatus')
             */
            $this->all()
        );

        $this->reset();
    }
}
