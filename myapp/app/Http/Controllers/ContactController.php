<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(ContactFormRequest $request)
    {
        //  Send mail to admin
        Mail::send('emails.rsvp', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'message' => $request->get('message'),
        ), function($message) use ($request){
            $message->from(trim($request->email));
            $message->to(env('EMAIL_TO'))->subject('RSVP: Request ' . $request->name);
        });

        return redirect()->back()->with('message', 'Thanks for your message! We will get back to you soon!');
    }
}
