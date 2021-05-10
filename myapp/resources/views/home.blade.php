@extends('layouts.app')
@section('title', 'Page Title')

{{--@section('sidebar')--}}
{{--    @parent--}}

{{--    <p>This is appended to the master sidebar.</p>--}}
{{--@endsection--}}

@section('content')

    @include('components.nav')
    @include('components.header')
{{--    @include('components.stories')--}}
    @include('components.mvps')

    @include('components.spotify')

    @include('components.map')

    @include('components.contact-form')
    @include('components.clients')
    @include('components.footer')

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
{{--            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{asset('img/logo-removebg-preview-crop.png')}}" alt="..." /></a>--}}
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                @include('components.partials.nav-list')
            </div>
        </div>
    </nav>
@endsection
