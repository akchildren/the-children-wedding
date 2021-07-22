@extends('layouts.app')
@section('title', 'Page Title')

{{--@section('sidebar')--}}
{{--    @parent--}}

{{--    <p>This is appended to the master sidebar.</p>--}}
{{--@endsection--}}

@section('content')

    @include('components.nav')
    @include('components.header')
    <!-- Success message -->
    @include('components.alerts.success')
{{--    @include('components.stories')--}}
    @include('components.mvps')

    @include('components.spotify')

    @include('components.honeyfund')

    @include('components.map')

    @include('components.contact-form')
    @include('components.clients')
    @include('components.footer')

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                @include('components.partials.nav-list')
            </div>
        </div>
    </nav>
@endsection
