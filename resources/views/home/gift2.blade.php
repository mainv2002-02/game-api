@extends('master')

@section('title', 'Home Page')

@section('style-libraries')
    <link rel="stylesheet" href="{{ url('assets/css/home/gift2.css?v=1.2') }}">
@stop

@section('styles')

@stop

@section('content')
    <div class="video-bg" id="bg01">
        <video playsinline autoplay muted id="myVideo">
            <source src="{{url('assets/img/gift/2/background.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="video-bg" id="bg02" style="display: none">
        <video playsinline autoplay loop muted id="myVideo02">
            <source src="{{url('assets/img/gift/2/background2.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="frame-container">
        <div id="border-frame"></div>
        <div id="button-frame"></div>
    </div>
@stop

@section('scripts')
     <script>
         $(document).ready(function() {
             loadLottieAnimation('border-frame', '{{url('assets/img/gift/gift.json', secure: true)}}');
             loadLottieAnimation('button-frame', '{{url('assets/img/gift/2/back.json', secure: true)}}');
             var video = document.getElementById('myVideo');

             video.addEventListener('ended', function() {
                 $("#bg01").css("display", "none");
                 $("#bg02").css("display", "block");
             });


             $("#button-frame").click(function() {
                 window.location.href = '/gift';
             })
         });
    </script>
@stop
