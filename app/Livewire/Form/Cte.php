<?php

namespace App\Livewire\Form;

use App\Livewire\Forms\CteForm;
use App\Models\Cte as ModelsCte;
use Illuminate\Http\Request;
use Livewire\Component;

class Cte extends Component
{
    //entidad eloquent
    public CteForm $form;
    public $id = '';
    public $cte = null;

    public function mount(Request $request)
    {
        $this->id = $request->get('id');
        $cte = ModelsCte::find($this->id);
    }

    public function render()
    {

        return view('livewire.form.cte', [
            'form' => $this->cte
        ]);
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
