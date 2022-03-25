<?php

namespace App\Http\Controllers\Dashboard\Blog;

use App\Domain\Blog\Datatables\BlogDatatable;
use App\Domain\Blog\Models\Blog;
use App\Domain\Blog\Models\BlogCategory;
use App\Domain\User\Models\User;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Support\Core\Crud\WithForm;
use App\Support\Core\Crud\WithStore;
use App\Support\Core\Crud\WithUpdate;
use Arr;
use Illuminate\Database\Eloquent\Model;

class BlogController extends Controller
{
    use WithDatatable, WithForm, WithStore, WithUpdate, WithDestroy;

    protected string $path = 'dashboard.blog.blog';

    protected string $cacheKey = 'posts';

    protected string $datatable = BlogDatatable::class;

    protected string $model = Blog::class;

    protected function rules()
    {
        $rules = [
            'title'         =>  'required|string|max:100',
            'description'   =>  'required|string|max:200',
            'image'         =>  'required|image|max:2000',
            'category_id'   =>  'required|exists:blog_categories,id',
            'body'          =>  'required',
        ];
        if(request()->isMethod('put')){
            $rules['image'] = 'nullable|image|max:2000';
        }

        return $rules;
    }


    protected function storeAction(array $validated)
    {
        $image = Arr::pull($validated, 'image');
        $validated['writer_id'] = auth()->user()->id;
        $model = ($this->model)::create($validated);
        $model->addMedia($image)->toMediaCollection('blog');
        return null;
    }

    protected function updateAction(array $validated, Model $model)
    {
        if(request()->hasFile('image')){
            $model->clearMediaCollection('blog');
            $model->addMedia(Arr::pull( $validated,'image'))->toMediaCollection('blog');
        }
        $model->update($validated);
        return null;
    }

    protected function formData(?Model $model = null): array
    {
        return [
            'categories'    =>  toMap(BlogCategory::all(),'id','title'),
        ];
    }
}
