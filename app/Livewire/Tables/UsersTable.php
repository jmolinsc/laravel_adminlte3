<?php

namespace App\Livewire\Tables;

use App\Models\Cte;

use RamonRietdijk\LivewireTables\Columns\Column;
use RamonRietdijk\LivewireTables\Columns\ViewColumn;
use RamonRietdijk\LivewireTables\Livewire\LivewireTable;

class UsersTable extends LivewireTable
{
    protected string $model = Cte::class;


    protected function columns(): array
    {
        return [
            //
            Column::make(__('Id'), 'id')->hide(),
            Column::make(__('Codigo'), 'codigo'),
            Column::make(__('Nombre'), 'nombre'),
            Column::make(__('Direccion'), 'direccion'),
            Column::make(__('NCR'), 'ncr'),
            Column::make(__('NIT'), 'nit'),
            ViewColumn::make('Estatus', 'users.estatus'),
            ViewColumn::make('Acciones', 'users.actions')
        ];
    }
}
