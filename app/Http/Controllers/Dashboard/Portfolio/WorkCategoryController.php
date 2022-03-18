<?php

namespace App\Http\Controllers\Dashboard\Portfolio;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Support\Core\Crud\WithForm;
use App\Support\Core\Crud\WithStore;
use App\Support\Core\Crud\WithUpdate;
use App\Domain\Portfolio\Datatables\WorkCategoryDatatable;
use App\Domain\Portfolio\Models\WorkCategory;

class WorkCategoryController extends Controller
{
    use WithDatatable, WithForm, WithStore, WithUpdate, WithDestroy;

    protected string $path = 'dashboard.portfolio.work-categories';

    protected string $datatable = WorkCategoryDatatable::class;

    protected string $model = WorkCategory::class;

    protected function rules()
    {
        return [
            'title' =>  'required|string|max:50'
        ];
    }
}
