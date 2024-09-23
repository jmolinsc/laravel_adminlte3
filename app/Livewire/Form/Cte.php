<?php

namespace App\Livewire\Form;

use App\Livewire\Forms\CteForm;
use App\Models\Cte as ModelsCte;
use Livewire\Attributes\On;
use Livewire\Component;

class Cte extends Component
{
    //entidad eloquent
    public CteForm $form;
    public $id;
    public $cte;



    public function render()
    {
        return view('livewire.form.cte');
    }

    public function save()
    {
        $this->form->save();
        return $this->redirect('/cte');
    }

    protected $rules = [
        'form.codigo' => 'required|string|min:1',

    ];


}
