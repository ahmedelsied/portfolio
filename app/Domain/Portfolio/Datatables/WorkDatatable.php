<?php

namespace App\Domain\Portfolio\Datatables;

use App\Domain\Portfolio\Models\Work;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;

class WorkDatatable extends BaseDatatable
{
    public function query(): Builder
    {
        return Work::with('category');
    }

    protected function getColumns(): array
    {
        return [
            $this->column('id',__('ID')),
            $this->column('category_title',__('Work Category')),
            $this->column('title',__('Title')),
            $this->column('link',__('Work Link')),
            $this->column('created_at',__('Created At')),
        ];
    }

    protected function getCustomColumns(): array
    {
        return [
            'created_at' => function ($model) {

                return $model->created_at->format('d F, Y');
            },
            'category_title'  => function($model){

                return $model->category->title;
            }
        ];
    }
}
