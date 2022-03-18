<?php

namespace App\Domain\Personal\Datatables;

use App\Domain\Personal\Models\Service;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;

class ServiceDatatable extends BaseDatatable
{
    public function query(): Builder
    {
        return Service::query();
    }

    protected function getColumns(): array
    {
        return [
            $this->column('id',__('ID')),
            $this->column('title',__('Title')),
            $this->column('icon',__('Icon')),
            $this->column('description',__('Description')),
        ];
    }
    protected function getCustomColumns(): array
    {
        return [
            'icon' => function ($model) {
                return '<i class="'.$model->icon.' icon d-inline-block"></i>';
            }
        ];
    }
}
