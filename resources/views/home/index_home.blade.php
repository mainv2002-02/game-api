@extends('master')

@section('title', 'Home Page')

@section('style-libraries')

@stop

@section('styles')
    <link rel="stylesheet" href="{{ url('assets/css/home/home.css') }}">
@stop

@section('content')
    <div id="page-home" class="page-home">
        <video autoplay muted id="bg-video" class="video-background">
            <source src="{{url('assets/img/home/background01.mp4')}}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

        <div id="content" style="display: none">
            <div id="lottie-background" class="lottie"></div>

            <div class="form-container">
                <div id="lottie-input-1" class="lottie-input">
                    <div class="lottie-text" style="display: none">Họ Tên</div>
                </div>
                <div id="lottie-input-2" class="lottie-input">
                    <div class="lottie-text" style="display: none">Số điện thoại</div>
                </div>
                <div id="lottie-input-3" class="lottie-input">
                    <div class="lottie-text" style="display: none">Chức danh</div>
                </div>
                <div id="lottie-input-4" class="lottie-input">
                    <div class="lottie-text" style="display: none">Bộ Phận</div>
                </div>
                <div id="lottie-input-5" class="lottie-input">
                    <div class="lottie-text" style="display: none">Vùng miền</div>
                </div>
                <div id="lottie-button" class="lottie-button"></div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#content").fadeIn(1800);
            setTimeout(function () {
                loadLottieAnimation('lottie-background', '{{url('assets/img/home/border.json')}}');
                // Initialize Lottie animations for each input and the button
                loadLottieAnimation('lottie-input-1', '{{url('assets/img/home/input.json')}}');
                loadLottieAnimation('lottie-input-2', '{{url('assets/img/home/input.json')}}');
                loadLottieAnimation('lottie-input-3', '{{url('assets/img/home/input.json')}}');
                loadLottieAnimation('lottie-input-4', '{{url('assets/img/home/input.json')}}');
                loadLottieAnimation('lottie-input-5', '{{url('assets/img/home/input.json')}}');
                loadLottieAnimation('lottie-button', '{{url('assets/img/home/button.json')}}');
                $(".lottie-text").fadeIn(2000);
            }, 2000)


            $("#lottie-button").click(function(event) {
                window.location.href = "/kickoff"
            });
        });
    </script>
@stop
