<?php

namespace App\Http\Controllers\Dashboard\Business;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Support\Core\Crud\WithForm;
use App\Support\Core\Crud\WithStore;
use App\Support\Core\Crud\WithUpdate;
use Illuminate\Database\Eloquent\Model;
use App\Domain\Business\Datatables\TestimonialDatatable;
use App\Domain\Business\Models\Testimonial;
use Arr;

class TestimonialController extends Controller
{
    use WithDatatable, WithForm, WithStore, WithUpdate, WithDestroy;

    protected string $path = 'dashboard.business.testimonials';

    protected string $datatable = TestimonialDatatable::class;

    protected string $cacheKey = 'testimonials';

    protected string $model = Testimonial::class;


    protected function rules()
    {
        $rules = [
            'client_name'       => 'required|string|max:70',
            'client_position'   => 'required|string|max:100',
            'review'            => 'required|string',
            'client_image'      => 'required|image|max:2000',
        ];

        if(request()->isMethod('put')) $rules['client_image'] = 'nullable|image|max:2000';

        return $rules;
    }

    protected function storeAction(array $validated)
    {
        $image = Arr::pull($validated, 'client_image');
        $model = ($this->model)::create($validated);
        $model->addMedia($image)->toMediaCollection('client_image');
        return null;
    }

    protected function updateAction(array $validated, Model $model)
    {
        if(request()->hasFile('client_image')){
            $model->clearMediaCollection('client_image');
            $model->addMedia(Arr::pull( $validated,'client_image'))->toMediaCollection('client_image');
        }
        $model->update($validated);
        return null;
    }
}
