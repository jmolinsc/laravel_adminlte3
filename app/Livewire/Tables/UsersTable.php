<?php

namespace App\Livewire\Tables;

use App\Models\User;
use RamonRietdijk\LivewireTables\Columns\Column;
use RamonRietdijk\LivewireTables\Columns\ViewColumn;
use RamonRietdijk\LivewireTables\Livewire\LivewireTable;

class UsersTable extends LivewireTable
{
    protected string $model= User::class;


    protected function columns(): array
{
    return [
        //

        Column::make(__('Name'), 'name'),
        Column::make(__('Email'), 'email'),
        ViewColumn::make('Estatus','users.estatus'),
        ViewColumn::make('Acciones','users.actions')
    ];
}

}
