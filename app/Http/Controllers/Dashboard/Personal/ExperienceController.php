<?php

namespace App\Http\Controllers\Dashboard\Personal;

use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Support\Core\Crud\WithForm;
use App\Support\Core\Crud\WithStore;
use App\Support\Core\Crud\WithUpdate;
use App\Domain\Personal\Datatables\ExperienceDatatable;
use App\Domain\Personal\Models\Experience;

class ExperienceController extends Controller
{
    use WithDatatable, WithForm, WithStore, WithUpdate, WithDestroy;

    protected string $path = 'dashboard.personal.experiences';

    protected string $datatable = ExperienceDatatable::class;

    protected string $model = Experience::class;


    protected function rules()
    {
        return [
            'position_title'    =>  'required|string|max:100',
            'company_name'      =>  'required|string|max:100',
            'from'              =>  'required|date|date_format:Y-m',
            'to'                =>  'nullable|date|date_format:Y-m',
        ];
    }
}
