<?php

namespace App\Domain\Blog\Datatables;

use App\Domain\Blog\Models\Blog;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;

class BlogDatatable extends BaseDatatable
{
    public function query(): Builder
    {
        return Blog::with(['category','writer']);
    }

    protected function getColumns(): array
    {
        return [
            $this->column('title',__('Title')),
            $this->column('writer_name',__('Writer')),
            $this->column('category_title',__('Category')),
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
            },
            'writer_name'  => function($model){

                return $model->writer->name;
            }
        ];
    }
}
