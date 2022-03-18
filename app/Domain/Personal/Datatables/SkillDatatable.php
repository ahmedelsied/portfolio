<?php

namespace App\Domain\Personal\Datatables;

use App\Domain\Personal\Models\Skill;
use App\Support\Datatables\BaseDatatable;
use Illuminate\Database\Eloquent\Builder;

class SkillDatatable extends BaseDatatable
{
    public function query(): Builder
    {
        return Skill::query();
    }

    protected function getColumns(): array
    {
        return [
            $this->column('id',__('ID')),
            $this->column('title',__('Title')),
            $this->column('experience_level',__('Experience Level')),
            $this->column('color',__('Color')),
            $this->column('created_at',__('Created At')),
        ];
    }


    protected function getCustomColumns(): array
    {
        return [
            'color' => function ($model) {

                return '<span class="span-color" style="background-color:'.$model->color.'"></span>';
            },
            'experience_level' => function ($model) {

                return $model->experience_level.'%';
            },
            'created_at' => function ($model) {

                return $model->created_at->format('d F, Y');
            }
        ];
    }
}
