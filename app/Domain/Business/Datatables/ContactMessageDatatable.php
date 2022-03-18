<?php

namespace App\Domain\Business\Datatables;

use App\Domain\Business\Models\ContactMessage;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;

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
