<!-- resources/views/components/layout.blade.php -->

<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{"Adam's & Rachel's Wedding" }}</title>
</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container mx-auto">
    @yield('content')
</div>
</body>
</html>
