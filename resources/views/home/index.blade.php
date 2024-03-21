@extends('master')

@section('title', 'Home Page')

@section('style-libraries')
    <link rel="stylesheet" href="{{ url('assets/css/home/main.css') }}">
@stop

@section('styles')

@stop

@section('content')
   <div class="video-bg" id="bg01">
        <video playsinline autoplay muted id="myVideo">
            <source src="{{url('assets/img/main/background1.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

   <div class="video-bg" id="bg02" style="display: none">
       <video playsinline autoplay loop muted id="myVideo02">
           <source src="{{url('assets/img/main/background2.mp4')}}" type="video/mp4">
           Your browser does not support the video tag.
       </video>
   </div>

   <div class="stream-container">
       <div class="header">
           <div class="left-content">
               <!-- Your left-side content goes here -->
               <div class="user-info">
                   <img src="{{url('assets/img/main/avata.png')}}" alt="Tony Nguyen" />
                   <span class="name">Tony Nguyen abc ax sssssss</span>
               </div>
               <div id="lottie-button-1" class="lottie"></div>
               <div id="lottie-button-2" class="lottie"></div>
           </div>

           <div class="right-content">
               <!-- Right-side images -->
               <img src="{{url('assets/img/main/replay.png')}}" class="replay" alt="replay">
               <img src="{{url('assets/img/main/score.png')}}" class="score" alt="score">
               <img src="{{url('assets/img/main/support.png')}}" class="support" alt="support">
           </div>
       </div>

       <div class="main-content">
           <!-- Lottie Animations for content will be placed here -->
           <div class="track1"></div>
           <div class="track2"></div>
           <div class="track3"></div>
           <div class="livestream"></div>
       </div>

   </div>


@stop

@section('scripts')
     <script>
         $(document).ready(function() {
             var video = document.getElementById('myVideo');

             video.addEventListener('ended', function() {
                 $("#bg01").css("display", "none");
                 $("#bg02").css("display", "block");

                 // Remove the event listener if you only want to change the video once
                 // video.removeEventListener('ended', arguments.callee);
             });

             function loadLottieAnimation(elementId, path) {
                 lottie.loadAnimation({
                     container: document.getElementById(elementId), // the DOM element that will contain the animation
                     renderer: 'svg',
                     loop: false,
                     autoplay: true,
                     path: path // the path to your Lottie file
                 });
             }

             // Initialize all your Lottie animations here
             loadLottieAnimation('lottie-button-1', '{{url('assets/img/main/gift.json')}}');
             loadLottieAnimation('lottie-button-2', '{{url('assets/img/main/agenda.json')}}');
         });
    </script>
@stop
