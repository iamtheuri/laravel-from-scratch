<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

    public function show()
    {
        return view('contact');
    }

    public function submit(ContactRequest $request)
    {
        Mail::to('theuridavid56@gmail.com')->send(new ContactMail(
            $request->name,
            $request->email,
            $request->phone,
            $request->service,
            $request->content,
        ));
        return to_route('contact.show');
    }
}
