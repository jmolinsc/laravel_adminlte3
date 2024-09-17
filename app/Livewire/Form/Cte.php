<?php

namespace App\Livewire\Form;


use App\Models\Cte as ModelsCte;
use Livewire\Component;

class Cte extends Component
{
    //entidad eloquent
    public ModelsCte $form;

    public function render()
    {

        return view('livewire.form.cte');
    }

    public function save()
    {
        $this->validate();
        $this->form->save();

        return $this->redirect('/cte');
    }

    protected $rules = [
        'form.codigo' => 'required|string|min:1',

    ];
}
