<?php

namespace App\Domain\Business\Datatables;

use App\Domain\Business\Models\Client;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;

class ClientDatatable extends BaseDatatable
{
    public function query(): Builder
    {
        return Client::query();
    }

    protected function getColumns(): array
    {
        return [
            $this->column('id',__('ID')),
            $this->column('name',__('Name')),
            $this->column('client_logo',__('Client Logo')),
            $this->column('link',__('Link'))
        ];
    }


    protected function getCustomColumns(): array
    {
        return [
            'client_logo' => function ($model) {
                return '<img width="200" src="'.$model->getFirstMediaUrl('client_logo','optimized').'" alt="'.$model->name.'"/>';
            },
            'link'  =>  function($model){
                return '<a href="'.$model->link.'" target="_blank">'.__('Link').'</a>';
            }
        ];
    }
}
