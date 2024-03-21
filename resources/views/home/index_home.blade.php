@extends('master')

@section('title', 'Home Page')

@section('style-libraries')

@stop

@section('styles')
    <link rel="stylesheet" href="{{ url('assets/css/home/home.css') }}">
@stop

@section('content')
    <video autoplay muted id="bg-video" class="video-background">
        <source src="{{url('assets/img/home/background01.mp4')}}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div id="content" style="display: none">
        <div id="lottie-background" class="lottie"></div>

        <div class="form-container">
            <div id="lottie-input-1" class="lottie-input">
                <div class="lottie-text">Họ Tên</div>
            </div>
            <div id="lottie-input-2" class="lottie-input">
                <div class="lottie-text">Số điện thoại</div>
            </div>
            <div id="lottie-input-3" class="lottie-input">
                <div class="lottie-text">Chức danh</div>
            </div>
            <div id="lottie-input-4" class="lottie-input">
                <div class="lottie-text">Bộ Phận</div>
            </div>
            <div id="lottie-input-5" class="lottie-input">
                <div class="lottie-text">Vùng miền</div>
            </div>
            <div id="lottie-button" class="lottie-button"></div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            function loadLottieAnimation(elementId, pathToJson) {
                lottie.loadAnimation({
                    container: document.getElementById(elementId), // the DOM element that will contain the animation
                    renderer: 'svg',
                    loop: false,
                    autoplay: true,
                    path: pathToJson
                });
            }
            setTimeout(function () {

                loadLottieAnimation('lottie-background', '{{url('assets/img/home/border.json')}}');
                // Initialize Lottie animations for each input and the button
                loadLottieAnimation('lottie-input-1', '{{url('assets/img/home/input.json')}}');
                loadLottieAnimation('lottie-input-2', '{{url('assets/img/home/input.json')}}');
                loadLottieAnimation('lottie-input-3', '{{url('assets/img/home/input.json')}}');
                loadLottieAnimation('lottie-input-4', '{{url('assets/img/home/input.json')}}');
                loadLottieAnimation('lottie-input-5', '{{url('assets/img/home/input.json')}}');
                loadLottieAnimation('lottie-button', '{{url('assets/img/home/button.json')}}');
            }, 2000)

            setTimeout(function() {
                $("#content").css("display", "block");
            }, 2005)
        });
    </script>
@stop
