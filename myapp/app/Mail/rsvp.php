<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Client\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class rsvp
 * @package App\Mail
 */
class rsvp extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Request
     */
    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return rsvp
     */
    public function build()
    {
        return $this->from(env('EMAIL_FROM'))
            ->view('emails.rsvp')
            ->subject('RSVP: Request ' . $this->request->name)
            ->with([
                'attributes' => (array) $this->request,
            ]);
    }
}
