@php use Illuminate\Support\Facades\Auth; @endphp
@extends('master')

@section('title', 'Home Page')

@section('style-libraries')

@stop

@section('styles')
    <link rel="stylesheet" href="{{ url('assets/css/home/home.css') }}">
@stop

@section('content')
    <div id="page-home" class="page-home">
        <div id="content">
            <div id="lottie-background" class="lottie"></div>

            <div class="form-container">
                <div id="lottie-input-1" class="lottie-input">
                    <div class="lottie-text"
                         style="display: none">{{Auth::user()->full_name}}</div>
                </div>
                <div id="lottie-input-2" class="lottie-input">
                    <div class="lottie-text" style="display: none">{{Auth::user()->phone}}</div>
                </div>
                <div id="lottie-input-3" class="lottie-input">
                    <div class="lottie-text" style="display: none">{{Auth::user()->title}}</div>
                </div>
                <div id="lottie-input-4" class="lottie-input">
                    <div class="lottie-text" style="display: none">{{Auth::user()->department}}</div>
                </div>
                <div id="lottie-input-5" class="lottie-input">
                    <div class="lottie-text" style="display: none">{{Auth::user()->area}}</div>
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
                loadLottieAnimation('lottie-background', '{{url('assets/img/home/border.json', secure: true)}}');
                // Initialize Lottie animations for each input and the button
                loadLottieAnimation('lottie-input-1', '{{url('assets/img/home/input.json', secure: true)}}');
                loadLottieAnimation('lottie-input-2', '{{url('assets/img/home/input.json', secure: true)}}');
                loadLottieAnimation('lottie-input-3', '{{url('assets/img/home/input.json', secure: true)}}');
                loadLottieAnimation('lottie-input-4', '{{url('assets/img/home/input.json', secure: true)}}');
                loadLottieAnimation('lottie-input-5', '{{url('assets/img/home/input.json', secure: true)}}');
                loadLottieAnimation('lottie-button', '{{url('assets/img/home/button.json', secure: true)}}');
                $(".lottie-text").fadeIn(2000);
            }, 2000)


            $("#lottie-button").click(function(event) {
                window.location.href = "/kickoff"
            });
        });
    </script>
@stop
