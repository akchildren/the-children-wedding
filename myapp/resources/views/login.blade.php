@extends('layouts.app')
@section('title', 'Page Title')


@section('content')

    <!-- Masthead-->
    <header class="main-header">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="{{asset(env('ASSET_LOCATION').'/video/background-comp.mp4')}}" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <img src="{{asset(env('ASSET_LOCATION').'/img/logos/wedding-logo.png')}}" alt="..." class="main-wedding-logo"/>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row" style="padding-top: 15px;">
            <form id="contactForm" method="post" action="{{ route('login') }}" class="col-md-6 offset-md-3">
                @csrf
                <div class="form-group">
                    <input class="form-control" id="passcode" name="passcode" type="text"
                           placeholder="Passcode *" required="required"
                           data-validation-required-message="Please enter passcode."/>
                </div>

                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">
                        Enter
                    </button>
                </div>
            </form>
            @include('components.alerts.error')
        </div>
    </div>
@endsection
