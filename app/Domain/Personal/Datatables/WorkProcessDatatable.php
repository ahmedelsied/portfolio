<?php

namespace App\Domain\Personal\Datatables;

use App\Domain\Personal\Models\WorkProcess;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;

class WorkProcessDatatable extends BaseDatatable
{
    public function query(): Builder
    {
        return WorkProcess::query();
    }


    protected function getColumns(): array
    {
        return [
            $this->column('id',__('ID')),
            $this->column('title',__('Title')),
            $this->column('image',__('Image')),
            $this->column('description',__('Description')),
        ];
    }


    protected function getCustomColumns(): array
    {
        return [
            'image' => function ($model) {
                return '<img width="200" src="'.$model->getFirstMediaUrl('work_process.image').'" alt="'.$model->title.'"/>';
            }
        ];
    }
}
