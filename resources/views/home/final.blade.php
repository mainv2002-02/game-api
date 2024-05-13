@extends('master')

@section('title', 'Home Page')

@section('style-libraries')
    <link rel="stylesheet" href="{{ url('assets/css/home/final.css?v=1.3') }}">
@stop

@section('styles')

@stop

@section('content')
    <div class="main-view">
       <div class="video-bg">
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
                       <img src="{{url('assets/img/main/avata.png')}}" alt="{{Auth::user()->full_name}}"/>
                       <span class="name">{{Auth::user()->full_name}}</span>
                   </div>
               </div>

               <div class="right-content">
                   <a href="tel:123456789">
                        <img src="{{url('assets/img/main/support.png')}}" class="support" alt="support">
                   </a>
               </div>
           </div>
           <div id="chat-frame" class="chat-container">
               <div class="chat-messages">
                   <!-- Danh sách tin nhắn sẽ được thêm vào đây -->
               </div>
               <input type="text" id="messageInput" placeholder="Type your message...">
               <button id="sendMessage" class="fas fa-arrow-circle-right"></button>
           </div>
           <div id="question-frame" class="question">
               <div class="question-content">
                   Đâu là những thành tựu, giải thưởng mà bộ phận chuỗi cung ứng đã đạt được trong năm 2024?
                    <hr/>
                   <p>A. BSG Bronze Award, ASEAN Technical Best in Class, ASP Safety Special Award</p>
                   <p>B. BSG Bronze Award, ASP Safety Special Award, ASP Sustainablity Special Award</p>
                   <p>C. ASP Sustainablity Special Award</p>
                   <p>D. ASP Safety Special Award</p>
               </div>
           </div>
           <div id="answer1" class="answer" onclick="choose()">
               <div class="answer-content">
                   Đáp Án A
               </div>
           </div>
           <div id="answer2" class="answer" onclick="choose()">
               <div class="answer-content">
                   Đáp Án B
               </div>
           </div>
           <div id="answer3" class="answer" onclick="choose()">
               <div class="answer-content">
                   Đáp Án C
               </div>
           </div>
           <div id="answer4" class="answer" onclick="choose()">
               <div class="answer-content">
                   Đáp Án D
               </div>
           </div>
           <div id="button-send" class="next">
               Gửi
           </div>
       </div>
    </div>
@stop

@section('scripts')
     <script>
         $(document).ready(function() {
         // Then some JavaScript in the browser:
         {{--   var conn = new WebSocket('{{$host}}/echo');--}}
         {{--   conn.onmessage = function(e) { console.log(e.data); };--}}
         {{--   conn.onopen = function(e) { conn.send('Hello Me!'); };--}}

             // Initialize all your Lottie animations here
             loadLottieAnimation('chat-frame', '{{url('assets/img/final/chat.json', secure: true)}}');
             loadLottieAnimation('question-frame', '{{url('assets/img/final/question.json', secure: true)}}');
             loadLottieAnimation('answer1', '{{url('assets/img/final/border.json', secure: true)}}');
             loadLottieAnimation('answer2', '{{url('assets/img/final/border.json', secure: true)}}');
             loadLottieAnimation('answer3', '{{url('assets/img/final/border.json', secure: true)}}');
             loadLottieAnimation('answer4', '{{url('assets/img/final/border.json', secure: true)}}');
{{--             loadLottieAnimation('button-send', '{{url('assets/img/final/send.json')}}');--}}

             $(".answer").click(function(){
                $(this).toggleClass("selected");
            });
             $("#sendMessage").click(function(){
                 var message = $("#messageInput").val();
                 if(message.trim() !== "") {
                     $(".chat-messages").append("<div class='message'>" + message + "</div>");
                     $("#messageInput").val("");
                 }
             });
         });
    </script>
@stop
