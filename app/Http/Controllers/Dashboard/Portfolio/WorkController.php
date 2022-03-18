<?php

namespace App\Http\Controllers\Dashboard\Portfolio;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Support\Core\Crud\WithForm;
use App\Support\Core\Crud\WithStore;
use App\Support\Core\Crud\WithUpdate;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Portfolio\Datatables\WorkDatatable;
use App\Domain\Portfolio\Models\Work;
use App\Domain\Portfolio\Models\WorkCategory;
use Arr;

class WorkController extends Controller
{
    use WithDatatable, WithForm, WithStore, WithUpdate, WithDestroy;

    protected string $path = 'dashboard.portfolio.work';

    protected string $datatable = WorkDatatable::class;

    protected string $model = Work::class;


    protected function rules()
    {
        $rules = [
            'category_id'   =>  'required|exists:work_categories,id',
            'title'         =>  'required|string|max:100',
            'link'          =>  'required|url',
            'image'         =>  'required|image|max:2000',
        ];
        if(request()->isMethod('put')){
            $rules['image'] = 'nullable|image|max:2000';
        }

        return $rules;
    }


    protected function storeAction(array $validated)
    {
        $image = Arr::pull($validated, 'image');
        $model = ($this->model)::create($validated);
        $model->addMedia($image)->toMediaCollection('work');
        return null;
    }

    protected function updateAction(array $validated, Model $model)
    {
        if(request()->hasFile('image')){
            $model->clearMediaCollection('work');
            $model->addMedia(Arr::pull( $validated,'image'))->toMediaCollection('work');
        }
        $model->update($validated);
        return null;
    }

    protected function formData(?Model $model = null): array
    {
        return [
            'categories'    =>  toMap(WorkCategory::all(),'id','title'),
        ];
    }
}
