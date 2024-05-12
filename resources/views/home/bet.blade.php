@extends('master')

@section('title', 'Home Page')

@section('style-libraries')
    <link rel="stylesheet" href="{{ url('assets/css/home/bet.css?v=1.2') }}">
@stop

@section('styles')

@stop

@section('content')
    <div class="main-view">
        <div class="video-bg">
            <video playsinline autoplay muted id="myVideo">
                <source src="{{url('assets/img/bet/background.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="frame-container">
{{--            <img id="01" class="team" src="{{url('assets/img/bet/01.png')}}">--}}
            <div class="choose-team" id="list"></div>
            <div class="choose-team" id="team-01"></div>
            <div class="choose-team" id="team-02"></div>
            <div class="choose-team" id="team-03"></div>
            <div class="choose-team" id="team-04"></div>
            <div class="choose-team" id="team-05"></div>
            <div class="choose-team" id="team-06"></div>
            <div class="choose-team" id="team-07"></div>
            <div class="choose-team" id="team-08"></div>
            <div class="choose-team" id="team-09"></div>
            <div class="choose-team" id="team-10"></div>

            <div id="button-frame"></div>
        </div>
    </div>
@stop

@section('scripts')
     <script>
         $(document).ready(function() {
{{--             loadLottieAnimation('border-frame', '{{url('assets/img/gift/gift.json', secure: true)}}');--}}
             loadLottieAnimation('button-frame', '{{url('assets/img/gift/2/back.json', secure: true)}}');
             var video = document.getElementById('myVideo');

             // video.addEventListener('ended', function() {
             //     $("#bg01").css("display", "none");
             //     $("#bg02").css("display", "block");
             // });


             $("#button-frame").click(function() {
                 window.location.href = '/home';
             })
         });
    </script>
@stop
