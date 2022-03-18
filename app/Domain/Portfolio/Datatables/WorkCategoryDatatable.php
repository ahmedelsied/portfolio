<?php

namespace App\Domain\Portfolio\Datatables;

use App\Domain\Portfolio\Models\WorkCategory;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\Html\Column;

class WorkCategoryDatatable extends BaseDatatable
{
    public function query(): Builder
    {
        return WorkCategory::query();
    }

    protected function getColumns(): array
    {
        return [
            $this->column('id',__('ID')),
            $this->column('title',__('Title')),
        ];
    }
}
