<?php

namespace App\Livewire;

use App\Livewire\Forms\CteForm;
use App\Models\Cte as ModelsCte;
use Livewire\Attributes\On;
use Livewire\Component;

class Cte extends Component
{

    public CteForm $form;


    public function render()
    {
        return view('livewire.cte');
    }

    public function open()
    {
        return $this->redirect('/cte/form', navigate: true);
    }
    public function editrow()
    {
        dd('test');
    }
}
