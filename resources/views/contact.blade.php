@extends('layouts.main')

@section('content')
    <div class="uk-position-center">
        <div>
                <div class="uk-card uk-card-default animated bounceInUp ">
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-circle" width="40" height="40" src="{{asset('images/hoofd.png')}}">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Contact me:</h3>
                                <p class="uk-text-meta uk-margin-remove-top">I won't bite! :-)</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <p>
                            <span uk-icon="mail"></span><a class="text-decoration-none" style="color:#666;" href="mailto:rickschijvenaars@gmail.com"> rickschijvenaars@gmail.com</a>
                        </p>
                        <span uk-icon="linkedin"></span> <a class="text-decoration-none" style="color:#666;" href="https://www.linkedin.com/in/rickschijvenaars/">LinkedIn</a>


                    </div>
                    <div class="uk-card-footer">
                        <span class="uk-button-text uk-text-meta">HEAR FROM YOU SOON!</span>
                    </div>
                </div>

            </div>
        </div>

@endsection