@extends('layouts.main')

@section('content')
    <div class="uk-child-width-expand@s">
        <div>
            {{--Contact button--}}
            <a style="  text-decoration: none;" href="mailto:rickschijvenaars@gmail.com">
                <div class="uk-card uk-card-default uk-card-hover btn-fixed">
                    <div class="uk-card-body btn-cta" >
                        <span class="uk-text-meta uk-margin-remove-top">Want to know more?</span>
                        <h3 class="uk-card-title uk-button-text uk-margin-remove-bottom uk-margin-remove-top">JUST ASK! <span uk-icon="icon: comment"></span></h3>
                    </div>
                </div>
            </a>
            {{--Page content--}}
            <div class="uk-card uk-card-default uk-card-body m-auto uk-width-5-6@m animated zoomIn">
                <div uk-grid>
                    {{--Left side--}}
                    <div class="uk-width-1-2@m">

                        <h1 class="uk-article-title">{{$project->title}}</h1>

                        <p class="uk-article-meta">
                            {!! nl2br($project->description)!!}</p>

                        <p class="uk-text-lead" style="font-size: 17px !important;">
                            {!! nl2br($project->detail_description)!!}</p>

                    </div>

                    {{--right side--}}
                    <div class="uk-width-1-2@m">
                        {{--skills/url--}}
                        <div class="mt-5">
                            <img width="30px" src="/images/line-chart.png">
                            <span class="uk-text-lead uk-text-muted uk-text-middle" style="font-size: 17px!important"> {{ $project->languages}}</span>
                        </div>
                        <div class="mt-2">
                            <img width="30px" src="/images/link.png">
                            <a class="uk-text-lead uk-text-muted uk-text-middle" href="{{ $project->link}}" target="_blank" style="font-size: 17px!important"> {{ $project->link}}</a>
                        </div>

                        <hr class="mt-5">

                        {{--images--}}
                        <div class="uk-child-width-1-2@s uk-grid-collapse uk-flex-center mt-5" uk-grid uk-lightbox="animation: fade">
                            @foreach($images as $image)
                                <a href="/images/{{$image}}" data-caption="{{$project->title}}">
                                    <div class="imagecontainer" style="background-image:url('/images/{{$image}}');">
                                    </div>
                                </a>
                            @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection