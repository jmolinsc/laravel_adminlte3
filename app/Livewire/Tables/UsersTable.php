<?php

namespace App\Livewire\Tables;

use App\Models\Cte;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Enumerable;
use RamonRietdijk\LivewireTables\Actions\Action;
use RamonRietdijk\LivewireTables\Columns\Column;
use RamonRietdijk\LivewireTables\Columns\ViewColumn;
use RamonRietdijk\LivewireTables\Filters\SelectFilter;
use RamonRietdijk\LivewireTables\Livewire\LivewireTable;

class UsersTable extends LivewireTable
{
    protected string $model = Cte::class;
    public $rowId;


    protected function columns(): array
    {
        return [
            //
            Column::make(__('Id'), 'id')->hide(),
            Column::make(__('Codigo'), 'codigo')->searchable(),
            Column::make(__('Nombre'), 'nombre')->searchable(),
            Column::make(__('Direccion'), 'direccion')->searchable(),
            Column::make(__('NCR'), 'ncr')->searchable(),
            Column::make(__('NIT'), 'nit')->searchable(),
            ViewColumn::make('Estatus', 'users.estatus')->searchable(),
            ViewColumn::make('Estatus', 'users.actions'),
            Column::make(__('Actions'), function (Model $model): string {
                $this->rowId = $model;
                // return '<a class="underline" href="#'.$model->getKey().'">Edit</a>';
                return '<a class="btn btn-sm" wire:navigate  wire:click="editrow(' . $model->getKey() . ')" role="button">
                            <i class="fa fa-disk"></i>
                            Edit
                          </a>';
            })
                ->clickable(false)
                ->asHtml(),
        ];
    }

    protected function filters(): array
    {
        return [
            SelectFilter::make(__('Estatus'), 'estatus')
                ->options([
                    'ALTA' => 'ALTA',
                    'BAJA' => 'BAJA'
                ]),
        ];
    }


}
