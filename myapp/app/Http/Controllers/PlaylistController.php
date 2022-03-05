<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaylistFormRequest;
use Illuminate\Support\Facades\Mail;

class PlaylistController extends Controller
{
    public function __invoke(PlaylistFormRequest $request): \Illuminate\Http\RedirectResponse
    {
        //  Send mail to admin
        Mail::send('emails.playlist', array(
            'artist' => $request->get('artist'),
            'song' => $request->get('song'),
            'name' => $request->get('name'),
        ), function($message) use ($request){
            $message->from(trim(env('MAIL_TO')));
            $message->to(trim(env('MAIL_TO')))->subject('Playlist: Request ' . $request->name);
        });

        return redirect()->back()->with('success', 'Thanks for your suggestion! We will give this a listen!');
    }
}
