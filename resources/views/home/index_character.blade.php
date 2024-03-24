@extends('master')

@section('title', 'Home Page')

@section('style-libraries')
    <link rel="stylesheet" href="{{ url('assets/css/home/character.css') }}">
@stop

@section('styles')

@stop

@section('content')
    <div class="background">
        <!-- Container for the first character and frame -->
        <div class="frame-container">
            <div id="lottie-frame-1" class="lottie-animation"></div>
            <img src="{{url('assets/img/character/datamaster.png')}}" alt="Data Master" class="character-image" style="display: none">
            <div class="character-label" style="display: none">Data Master</div>
        </div>

        <!-- Container for the second character and frame -->
        <div class="frame-container">
            <div id="lottie-frame-2" class="lottie-animation"></div>
            <img src="{{url('assets/img/character/problemsolver.png')}}" alt="Data Master" class="character-image" style="display: none">
            <div class="character-label" style="display: none">Problem Solver</div>
        </div>

        <!-- Container for the third character and frame -->
        <div class="frame-container">
            <div id="lottie-frame-3" class="lottie-animation"></div>
            <img src="{{url('assets/img/character/multitask.png')}}" alt="Data Master" class="character-image" style="display: none">
            <div class="character-label" style="display: none">Multi Tasker</div>
        </div>
    </div>
@stop

@section('scripts')
     <script>
         $(document).ready(function() {
             loadLottieAnimation('lottie-frame-1', '{{url('assets/img/character/border.json')}}');
             loadLottieAnimation('lottie-frame-2', '{{url('assets/img/character/border.json')}}');
             loadLottieAnimation('lottie-frame-3', '{{url('assets/img/character/border.json')}}');

             setTimeout(function () {
                $(".character-image").fadeIn(3000);
                 $(".character-label").fadeIn(3000);
             }, 1000);

             $(".character-image").click(function () {
                 window.location.href = "/home"
             })
         });
    </script>
@stop
