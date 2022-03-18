<?php

namespace App\Domain\Personal\Datatables;

use App\Domain\Personal\Models\Experience;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\Html\Column;

class ExperienceDatatable extends BaseDatatable
{
    public function query(): Builder
    {
        return Experience::query();
    }

    protected function getColumns(): array
    {
        return [
            $this->column('id',__('ID')),
            $this->column('position_title',__('Position Title')),
            $this->column('company_name',__('Company Name')),
            Column::make('from')->title(__('From')),
            Column::make('to')->title(__('To')),
        ];
    }
}
