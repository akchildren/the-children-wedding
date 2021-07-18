@component('mail::message')

This is the RSVP form response.

Name: {{$name}}
Email: {{$email}}
Phone: {{$phone}}

@if($message)
Message: {{$message}}
@endif

@endcomponent
