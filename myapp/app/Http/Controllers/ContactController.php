<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(ContactFormRequest $request): \Illuminate\Http\RedirectResponse
    {
        //  Send mail to admin
        Mail::send('emails.rsvp', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'oMessage' => $request->get('message'),
        ), function($message) use ($request){
            $message->from(trim($request->email));
            $message->to(env('MAIL_TO'))->subject('RSVP: Request ' . $request->name);
        });

        return redirect()->back()->with('success', 'Thanks for your suggestion! Can\'t wait to see you at the wedding!');
    }
}
