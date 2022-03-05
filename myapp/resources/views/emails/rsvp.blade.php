

<h1>This is the RSVP form response.</h1>

Name: {{$name}} <br>
Email: {{$email}} <br>
Phone: {{$phone}} <br>

Food Menu Options: {{$food}} <br>

@if($oMessage)
Message: {{$oMessage}} <br>
@endif

<small>Sent directly from {{env('APP_URL')}}</small>
