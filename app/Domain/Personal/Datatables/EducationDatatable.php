<?php

namespace App\Domain\Personal\Datatables;

use App\Domain\Personal\Models\Education;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\Html\Column;

class EducationDatatable extends BaseDatatable
{
    public function query(): Builder
    {
        return Education::query();
    }

    protected function getColumns(): array
    {
        return [
            $this->column('id',__('ID')),
            $this->column('title',__('Title')),
            $this->column('location',__('Certificate Center Or College')),
            $this->column('year',__('Year')),
        ];
    }
}
