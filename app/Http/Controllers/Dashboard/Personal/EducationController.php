<?php

namespace App\Http\Controllers\Dashboard\Personal;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Support\Core\Crud\WithForm;
use App\Support\Core\Crud\WithStore;
use App\Support\Core\Crud\WithUpdate;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Personal\Datatables\EducationDatatable;
use App\Domain\Personal\Models\Education;

class EducationController extends Controller
{
    use WithDatatable, WithForm, WithStore, WithUpdate, WithDestroy;

    protected string $path = 'dashboard.personal.education';

    protected string $datatable = EducationDatatable::class;

    protected string $model = Education::class;


    protected function rules()
    {
        return [
            'title'     =>  'required|string|max:100',
            'location'  =>  'required|string',
            'year'      =>  'required|date|date_format:Y-m',
        ];
    }
}
