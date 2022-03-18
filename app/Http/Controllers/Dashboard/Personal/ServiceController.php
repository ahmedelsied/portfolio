<?php

namespace App\Http\Controllers\Dashboard\Personal;

use App\Domain\Core\Models\Icon;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Support\Core\Crud\WithForm;
use App\Support\Core\Crud\WithStore;
use App\Support\Core\Crud\WithUpdate;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Personal\Datatables\ServiceDatatable;
use App\Domain\Personal\Models\Service;

class ServiceController extends Controller
{
    use WithDatatable, WithForm, WithStore, WithUpdate, WithDestroy;

    protected string $path = 'dashboard.personal.services';

    protected string $datatable = ServiceDatatable::class;

    protected string $model = Service::class;


    protected function rules()
    {
        return [
            'title'         =>  'required|string|max:80',
            'description'   =>  'required|string',
            'icon'          =>  'required|string|exists:icons,icon',
        ];
    }

    protected function formData(): array
    {
        return [
            'icons'    =>  Icon::all(),
        ];
    }
}
