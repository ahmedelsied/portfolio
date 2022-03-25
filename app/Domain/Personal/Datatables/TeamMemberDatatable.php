<?php

namespace App\Domain\Personal\Datatables;

use App\Domain\Personal\Models\TeamMember;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;

class TeamMemberDatatable extends BaseDatatable
{
    public function query(): Builder
    {
        return TeamMember::query();
    }


    protected function getColumns(): array
    {
        return [
            $this->column('id',__('ID')),
            $this->column('name',__('Name')),
            $this->column('avatar',__('Avatar')),
            $this->column('position',__('Position')),
        ];
    }


    protected function getCustomColumns(): array
    {
        return [
            'avatar' => function ($model) {
                return '<img width="200" src="'.$model->getFirstMediaUrl('team.avatar','optimized').'" alt="'.$model->name.'"/>';
            }
        ];
    }
}
