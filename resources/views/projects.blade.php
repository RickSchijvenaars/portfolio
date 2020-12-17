@extends('layouts.main')

@section('content')
    <div id="projectscontainer" class="uk-flex-center" uk-grid>
        <div class="uk-width-5-6">
            {{--Contact button--}}
            <a style="  text-decoration: none;" href="mailto:rickschijvenaars@gmail.com">
                <div class="uk-card uk-card-default uk-card-hover btn-fixed">
                    <div class="uk-card-body btn-cta" >
                        <span class="uk-text-meta uk-margin-remove-top">Want to know more?</span>
                        <h3 class="uk-card-title uk-button-text uk-margin-remove-bottom uk-margin-remove-top">JUST ASK! <span uk-icon="icon: comment"></span></h3>
                    </div>
                </div>
            </a>
            <div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid="masonry: true">
                {{--flip-card for project--}}
                @foreach($projects as $project)
                    <a href="{{ route('projectdetails', ['name' => $project->title])}}">
                        <div class="flip-card animated zoomIn">
                            <div class="flip-card-inner uk-card-hover">
                                <div class="flip-card-front uk-card-media-top" style="background-image:url('/images/{{$project->source}}');">
                                </div>
                                <div class="flip-card-back uk-card-body" style="overflow:hidden;">
                                    <h3 class="uk-card-title">{{$project->title}}</h3>
                                    <p style="max-height: 80%;overflow:hidden;">{{$project->description}}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
        </div>
    </div>

@endsection