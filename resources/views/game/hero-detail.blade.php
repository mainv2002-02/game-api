@extends('master')

@section('content')
    <div class="masthead bg-primary text-white text-center">
        <div class="container">
            <div class="row">
                <h4 class="text-uppercase mb-4">{{$hero->name}} </h4>
            </div>
            <div class="row">
                @foreach($tracks as $track)
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">{{$track->name}} </h4>
                        <p class="lead mb-0">
                            {!! $track->description !!}
                        </p>
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded active"
                               href="{{url("/games/track/{$track->getKey()}/{$track->slug}")}}">Continue</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop