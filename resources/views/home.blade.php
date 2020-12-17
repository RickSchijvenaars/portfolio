@extends('layouts.main')

@section('content')
    <div class="home uk-inline w-100">
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push; autoplay: true;autoplay-interval: 3000;">
            {{--slideshow--}}
            <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300">
                <li>
                    <img src="{{asset('images/code.jpg')}}" alt="" uk-cover>
                </li>
                <li>
                    <img src="{{asset('images/brainstorm.jpeg')}}" alt="" uk-cover>
                </li>
                <li>
                    <img src="{{asset('images/storyboard.JPG')}}" alt="" uk-cover>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        </div>

        <div class="uk-position-cover cover-background">
            <div class="uk-text-center">
                <span id="welcomemessage"></span>{{--welcomemessage js--}}
            </div>
            {{--nav buttons--}}
            <div class="uk-position-center uk-flex uk-flex-wrap uk-flex-center">
                <a class="text-decoration-none" href="{{ route('aboutme') }}">
                    <div class="homepage-item" id="aboutme"></div>
                </a>

                <a class="text-decoration-none" href="{{ route('projects') }}">
                    <div class="homepage-item" id="myprojects"></div>
                </a>

                <a class="text-decoration-none" href="{{ route('contact') }}">
                    <div class="homepage-item" id="contactme"></div>
                </a>
            </div>
        </div>

    </div>

    <script>
        window.addEventListener('load', (event) => {
            // typeText('#welcomemessage', 'Welcome.', 'My name is Rick.');
            welcomeMessage();
        });
    </script>
@endsection