<?php

namespace App\Http\Controllers\Dashboard\Core;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Domain\Core\Datatables\ContactMessageDatatable;
use App\Domain\Core\Models\ContactMessage;

class ContactMessageController extends Controller
{
    use WithDatatable, WithDestroy;

    protected string $path = 'dashboard.core.contact-messages';

    protected string $datatable = ContactMessageDatatable::class;

    protected string $model = ContactMessage::class;

    public function show($message)
    {
        return view($this->path.'.show')->with(['message' => ($this->model)::findOrFail($message)]);
    }
}
