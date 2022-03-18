<?php

namespace App\Http\Controllers\Dashboard\Blog;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Support\Core\Crud\WithForm;
use App\Support\Core\Crud\WithStore;
use App\Support\Core\Crud\WithUpdate;
use App\Domain\Blog\Datatables\BlogCategoryDatatable;
use App\Domain\Blog\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    use WithDatatable, WithForm, WithStore, WithUpdate, WithDestroy;

    protected string $path = 'dashboard.blog.blog-categories';

    protected string $datatable = BlogCategoryDatatable::class;

    protected string $model = BlogCategory::class;


    protected function rules()
    {
        return [
            'title' =>  'required|string|max:50'
        ];
    }
}
