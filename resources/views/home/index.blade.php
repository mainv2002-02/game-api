@extends('master')

@section('title', 'Home Page')

@section('style-libraries')
    <link rel="stylesheet" href="{{ url('assets/css/home/main.css?v=1.1') }}">
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
                   <img src="{{url('assets/img/main/avata.png')}}" alt="{{Auth::user()->name}}"/>
                   <span class="name">{{Auth::user()->name}}</span>
               </div>
               <div id="button-gift" class="lottie"></div>
               <div id="lottie-button-2" class="lottie"></div>
               <div id="button-dc" class="lottie"></div>
           </div>

           <div class="right-content">
               <!-- Right-side images -->
               <img src="{{url('assets/img/main/replay.png')}}" class="replay" alt="replay">
               <div class="background-image-div">
                   <p class="centered-text">100</p>
               </div>
               <a href="tel:123456789">
                    <img src="{{url('assets/img/main/support.png')}}" class="support" alt="support">
               </a>
           </div>
       </div>
       <div id="chat-frame" class=""></div>
       <div id="livestream-frame" class=""></div>
       <div class="main-content">
           <!-- Lottie Animations for content will be placed here -->
           <div class="track1 track"></div>
           <div class="track2 track"></div>
           <div class="track3 track"></div>
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


             // Initialize all your Lottie animations here
             loadLottieAnimation('button-gift', '{{url('assets/img/main/gift.json')}}');
             loadLottieAnimation('lottie-button-2', '{{url('assets/img/main/agenda.json')}}');
             loadLottieAnimation('chat-frame', '{{url('assets/img/main/border.json')}}');
             loadLottieAnimation('livestream-frame', '{{url('assets/img/main/livestream.json')}}');
             loadLottieAnimation('button-dc', '{{url('assets/img/main/dc.json')}}');

             $("#button-gift").click(function () {
                window.open('/gift', '_blank');
             })
             $(".track1").click(function () {
                 window.open('/1/track1/1', '_blank');
             })
             $(".track2").click(function () {
                 window.open('/1/track2/1', '_blank');
             })
             $(".track3").click(function () {
                 window.open('/1/track3/1', '_blank');
             })
         });
    </script>
@stop
