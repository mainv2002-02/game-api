@extends('master')

@section('title', 'Home Page')

@section('style-libraries')
    <link rel="stylesheet" href="{{ url('assets/css/home/gift.css?v=1.5') }}">
@stop

@section('styles')

@stop

@section('content')
    <div class="video-bg" id="bg01">
        <video playsinline autoplay muted id="myVideo">
            <source src="{{url('assets/img/gift/background01.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div id="button-frame"></div>

    <div class="frame-container">
        <div id="border-frame">
            <div class="typewriter green">
                <div id="gift-content1"></div>
            </div>
        </div>
    </div>
    <img src="{{url('assets/img/gift/logo.png')}}" alt="Celerating You" class="image-logo"/>
    <div id="convert-frame" class="convert-frame">
        <div class="convert-text green">
            Đổi quà tại đây
        </div>
    </div>

{{--    <div id="gift-frame"></div>--}}
    <div id="number" class="score-animation score-text">
        100
    </div>
    <div id="score-frame"></div>
    <div id="back-frame"></div>
    <!-- Your content here -->
@stop

@section('scripts')
     <script>
         $(document).ready(function() {
             loadLottieAnimation('border-frame', '{{url('assets/img/gift/border.json')}}');
             loadLottieAnimation('button-frame', '{{url('assets/img/gift/gift.json')}}');
             loadLottieAnimation('back-frame', '{{url('assets/img/gift/back.json')}}');
             loadLottieAnimation('gift-frame', '{{url('assets/img/gift/border-logo.json')}}');
             loadLottieAnimation('score-frame', '{{url('assets/img/gift/score.json')}}');
             loadLottieAnimation('convert-frame', '{{url('assets/img/gift/border2.json')}}');

             var $number = $('#number'),
                 numberFromText = parseInt($number.text(), 10);

             $number.prop('Counter',0).animate({
                 Counter: numberFromText
             }, {
                 duration: 1000,
                 easing: 'swing',
                 step: function (now) {
                     $number.text(Math.ceil(now));
                 }
             });

             const htmlContent1 = `<p>Điểm tích lũy của bạn sẽ được tải lên hệ thống trong vòng 48h
                tiếp theo, khi có điểm, hãy cùng lên ứng dụng <b class="pink">Celebrating You</b> để đổi quà bạn nhé!</p>`;

             $('#gift-content1').typer([htmlContent1]);

             $("#button-frame").click(function() {
                 window.location.href = '/gift2';
             })

             $("#back-frame").click(function() {
                 window.location.href = 'home/2';
             })
         });
    </script>
@stop
