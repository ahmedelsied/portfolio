<?php

namespace App\Domain\Blog\Datatables;

use App\Domain\Blog\Models\BlogCategory;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\Html\Column;

class BlogCategoryDatatable extends BaseDatatable
{
    public function query(): Builder
    {
        return BlogCategory::query();
    }

    protected function getColumns(): array
    {
        return [
            $this->column('id',__('ID')),
            $this->column('title',__('Title')),
        ];
    }
}
