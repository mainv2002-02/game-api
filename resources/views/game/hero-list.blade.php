@extends('master')

@section('content')
    <div class="masthead bg-primary text-white text-center">
        <div class="container">
            <div class="row">
                @foreach($heros as $hero)
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">{{$hero->name}} </h4>
                        <img class="masthead-avatar mb-5" src="{{url($hero->avatar)}}" alt="{{$hero->name}}"/>
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link py-3 px-0 px-lg-3 rounded active"
                               href="{{url("/games/hero/{$hero->getKey()}/{$hero->slug}")}}">Play Game</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop