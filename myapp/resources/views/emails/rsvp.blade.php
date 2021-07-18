@component('mail::message')

This is the RSVP form response.

Name: {{$attributes['name']}}
Email: {{$attributes['email']}}
Phone: {{$attributes['phone']}}

@isset($attributes['message'])
    Message: {{$attributes['message']}}
@endif

@endcomponent
