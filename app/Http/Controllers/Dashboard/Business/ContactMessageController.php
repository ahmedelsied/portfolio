<?php

namespace App\Http\Controllers\Dashboard\Business;
use App\Http\Controllers\Controller;
use App\Support\Core\Crud\WithDatatable;
use App\Support\Core\Crud\WithDestroy;
use App\Domain\Business\Datatables\ContactMessageDatatable;
use App\Domain\Business\Models\ContactMessage;

class ContactMessageController extends Controller
{
    use WithDatatable, WithDestroy;

    protected string $path = 'dashboard.business.contact-messages';

    protected string $datatable = ContactMessageDatatable::class;

    protected string $model = ContactMessage::class;

    public function show($message)
    {
        return view($this->path.'.show')->with(['message' => ($this->model)::findOrFail($message)]);
    }
}
