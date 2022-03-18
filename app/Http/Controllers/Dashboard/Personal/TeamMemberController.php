<?php

namespace App\Http\Controllers\Dashboard\Personal;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Support\Core\Crud\WithForm;
use App\Support\Core\Crud\WithStore;
use App\Support\Core\Crud\WithUpdate;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Personal\Datatables\TeamMemberDatatable;
use App\Domain\Personal\Models\TeamMember;
use Arr;

class TeamMemberController extends Controller
{
    use WithDatatable, WithForm, WithStore, WithUpdate, WithDestroy;

    protected string $path = 'dashboard.personal.team-members';

    protected string $datatable = TeamMemberDatatable::class;

    protected string $model = TeamMember::class;


    protected function rules()
    {
        $rules = [
            'name'      =>  'required|string|max:70',
            'position'  =>  'required|string|max:100',
            'avatar'    =>  'required|image|max:2000',
        ];

        if(request()->isMethod('put')) $rules['avatar'] = 'nullable|image|max:2000';
        return $rules;
    }

    protected function storeAction(array $validated)
    {
        $image = Arr::pull($validated, 'avatar');
        $model = ($this->model)::create($validated);
        $model->addMedia($image)->toMediaCollection('team.avatar');
        return null;
    }

    protected function updateAction(array $validated, Model $model)
    {
        if(request()->hasFile('avatar')){
            $model->clearMediaCollection('work');
            $model->addMedia(Arr::pull( $validated,'avatar'))->toMediaCollection('team.avatar');
        }
        $model->update($validated);
        return null;
    }
}
