<?php

namespace App\Http\Controllers\Dashboard\Personal;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Support\Core\Crud\WithForm;
use App\Support\Core\Crud\WithStore;
use App\Support\Core\Crud\WithUpdate;
use App\Domain\Personal\Datatables\SkillDatatable;
use App\Domain\Personal\Models\Skill;

class SkillController extends Controller
{
    use WithDatatable, WithForm, WithStore, WithUpdate, WithDestroy;

    protected string $path = 'dashboard.personal.skills';

    protected string $cacheKey = 'skills';

    protected string $datatable = SkillDatatable::class;

    protected string $model = Skill::class;


    protected function rules()
    {
        return [
            'title'             =>  'required|string|max:80',
            'experience_level'  =>  'required|numeric|min:0|max:100',
            'color'             =>  'required|string',
        ];
    }
}
