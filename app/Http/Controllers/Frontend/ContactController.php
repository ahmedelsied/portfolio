<?php

namespace App\Http\Controllers\Frontend;

use App\Domain\Business\Models\ContactMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.index');
    }
    public function contact(ContactRequest $request)
    {
        ContactMessage::create($request->validated());

        return back()->with(['success' => 'We Received Your Message Successfully']);
    }
}
