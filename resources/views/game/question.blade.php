@extends('master')

@section('title', 'Question')

@section('style-libraries')
    <link rel="stylesheet" href="{{ url('assets/css/question/track2/question.css?v=1.1') }}">
@stop

@section('styles')
@stop

@section('content')
    <div class="video-bg">
        <video playsinline autoplay muted id="myVideo">
            <source src="{{url('assets/img/track2/background01.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="stream-container">
        <div class="header">
            <div class="left-content">
                <!-- Your left-side content goes here -->
                <div id="button-gift" class="lottie">
                    <p>TRACK2</p>
                </div>
            </div>

            <div class="right-content">
                <!-- Right-side images -->
                <img src="{{url('assets/img/main/score.png')}}" class="score" alt="score">
                <img src="{{url('assets/img/main/support.png')}}" class="support" alt="support">
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            // Initialize all your Lottie animations here
            loadLottieAnimation('button-gift', '{{url('assets/img/track2/breakcrum.json')}}');

            $("#button-gift").click(function () {
                window.open('/gift', '_blank');
            })
        });
    </script>
@stop
