<?php

namespace App\Http\Controllers\Dashboard\Personal;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Support\Core\Crud\WithForm;
use App\Support\Core\Crud\WithStore;
use App\Support\Core\Crud\WithUpdate;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Personal\Datatables\WorkProcessDatatable;
use App\Domain\Personal\Models\WorkProcess;
use Arr;

class WorkProcessController extends Controller
{
    use WithDatatable, WithForm, WithStore, WithUpdate, WithDestroy;

    protected string $path = 'dashboard.personal.work-processes';

    protected string $datatable = WorkProcessDatatable::class;

    protected string $cacheKey = 'work_processes';

    protected string $model = WorkProcess::class;


    protected function rules()
    {
        $rules = [
            'title'         =>  'required|string|max:80',
            'description'   =>  'required|string',
            'image'         =>  'required|image|max:2000',
        ];
        if(request()->isMethod('put')) $rules['image'] = 'nullable|image|max:2000';

        return $rules;
    }

    protected function storeAction(array $validated)
    {
        $image = Arr::pull($validated, 'image');
        $model = ($this->model)::create($validated);
        $model->addMedia($image)->toMediaCollection('work_process.image');
        return null;
    }

    protected function updateAction(array $validated, Model $model)
    {
        if(request()->hasFile('image')){
            $model->clearMediaCollection('work');
            $model->addMedia(Arr::pull( $validated,'image'))->toMediaCollection('work_process.image');
        }
        $model->update($validated);
        return null;
    }
}
