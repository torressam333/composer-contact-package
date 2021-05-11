<?php

namespace Phantomdev\Contact\controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
use Phantomdev\Contact\Contact;
use Phantomdev\Contact\ContactMailable;

class ContactController extends controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('contact::contact');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \Phantomdev\Contact\Contact $contact
     * @return array|Application|RedirectResponse|Redirector
     */
    public function send(Request $request, Contact $contact)
    {
        Mail::to(config('contact.send_email_to'))
        ->send(new ContactMailable(
            $request->message,
            $request->name
        ));

        $contact->create($request->all());

        return redirect(route('contacts'));
    }
}
