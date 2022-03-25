<?php

namespace App\Http\Controllers\Dashboard\Business;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Support\Core\Crud\WithForm;
use App\Support\Core\Crud\WithStore;
use App\Support\Core\Crud\WithUpdate;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Business\Datatables\ClientDatatable;
use App\Domain\Business\Models\Client;
use Arr;

class ClientController extends Controller
{
    use WithDatatable, WithForm, WithStore, WithUpdate, WithDestroy;

    protected string $path = 'dashboard.business.clients';

    protected string $datatable = ClientDatatable::class;

    protected string $cacheKey = 'clients';

    protected string $model = Client::class;


    protected function rules()
    {
        $rules = [
            'name'          =>  'required|string|max:100',
            'link'          =>  'required|url',
            'client_logo'   =>  'required|image|max:200',
        ];

        if(request()->isMethod('put')) $rules['client_logo'] = 'nullable|image|max:2000';

        return $rules;
    }


    protected function storeAction(array $validated)
    {
        $image = Arr::pull($validated, 'client_logo');
        $model = ($this->model)::create($validated);
        $model->addMedia($image)->toMediaCollection('client_logo');
        return null;
    }

    protected function updateAction(array $validated, Model $model)
    {
        if(request()->hasFile('client_logo')){
            $model->clearMediaCollection('client_logo');
            $model->addMedia(Arr::pull( $validated,'client_logo'))->toMediaCollection('client_logo');
        }
        $model->update($validated);
        return null;
    }
}
