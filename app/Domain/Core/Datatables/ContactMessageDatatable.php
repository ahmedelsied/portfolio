<?php

namespace App\Domain\Core\Datatables;

use App\Domain\Core\Models\ContactMessage;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\Html\Column;

class ContactMessageDatatable extends BaseDatatable
{
    protected ?string $actionable = 'delete|show';

    public function query(): Builder
    {
        return ContactMessage::query();
    }

    protected function getColumns(): array
    {
        return [
            $this->column('id',__('ID')),
            $this->column('full_name',__('Full Name')),
            $this->column('email',__('Email')),
            $this->column('created_at',__('Created At')),
        ];
    }

    protected function getCustomColumns(): array
    {
        return [
            'created_at' => function ($model) {
                return $model?->created_at->format('d F, Y');
            }
        ];
    }
}
