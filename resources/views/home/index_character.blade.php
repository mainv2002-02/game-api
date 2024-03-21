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
            <div class="character-label">Data Master</div>
        </div>

        <!-- Container for the second character and frame -->
        <div class="frame-container">
            <div id="lottie-frame-2" class="lottie-animation"></div>
            <img src="{{url('assets/img/character/problemsolver.png')}}" alt="Data Master" class="character-image" style="display: none">
            <div class="character-label">Problem Solver</div>
        </div>

        <!-- Container for the third character and frame -->
        <div class="frame-container">
            <div id="lottie-frame-3" class="lottie-animation"></div>
            <img src="{{url('assets/img/character/multitask.png')}}" alt="Data Master" class="character-image" style="display: none">
            <div class="character-label">Multi Tasker</div>
        </div>
    </div>
@stop

@section('scripts')
     <script>
         $(document).ready(function() {
            // Initialize Lottie animations for borders and buttons using the JSON data
            lottie.loadAnimation({
                container: document.getElementById('lottie-frame-1'), // the dom element
                renderer: 'svg',
                loop: false,
                autoplay: true,
                path: '{{url('assets/img/character/border.json')}}' // the path to the animation json
            });

             lottie.loadAnimation({
                 container: document.getElementById('lottie-frame-2'), // the dom element
                 renderer: 'svg',
                 loop: false,
                 autoplay: true,
                 path: '{{url('assets/img/character/border.json')}}' // the path to the animation json
             });

             lottie.loadAnimation({
                 container: document.getElementById('lottie-frame-3'), // the dom element
                 renderer: 'svg',
                 loop: false,
                 autoplay: true,
                 path: '{{url('assets/img/character/border.json')}}' // the path to the animation json
             });

             setTimeout(function () {
                $(".character-image").css("display", "block");
             }, 1000);

             $(".character-image").click(function () {
                 window.location.href = "/home"
             })
         });
    </script>
@stop
