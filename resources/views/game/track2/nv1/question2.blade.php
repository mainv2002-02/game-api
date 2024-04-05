@extends('master')

@section('title', 'Home Page')

@section('style-libraries')
    <link rel="stylesheet" href="{{ url('assets/css/question/track2/question.css') }}">
@stop

@section('styles')

@stop

@section('content')
    <div class="body-question" style="background-image: url({{url('assets/img/track2/visualize/02.jpg')}})">
        <div class="bg-opacity-10"></div>
        <div class="stream-container">
           <div class="header">
               <div class="left-content">
                   <!-- Your left-side content goes here -->
                   <div id="button-track" class="button-track">
                       <div class="button-track-label">Track 02</div>
                   </div>
               </div>

               <div class="right-content">
                   <div class="background-image-div">
                       <p class="centered-text">100</p>
                   </div>
                   <img src="{{url('assets/img/main/support.png')}}" class="support" alt="support">
               </div>
           </div>

           <div class="main-content">
               <div class="title">Câu số 2</div>
               <div id="question" class="question">
                   <div class="question-content">

                   </div>
               </div>
               <!-- Lottie Animations for content will be placed here -->
               <div id="answer1" class="answer">
                   <div class="answer-content">
                        answer1
                   </div>
               </div>
               <div id="answer2" class="answer">
                   <div class="answer-content">
                       answer2
                   </div>
               </div>
               <div id="answer3" class="answer">
                   <div class="answer-content">
                       answer3
                   </div>
               </div>
               <div id="answer4" class="answer">
                   <div class="answer-content">
                       answer4
                   </div>
               </div>
               <div id="button-frame-next" class="next"></div>
           </div>
        </div>
    </div>

    <div id="hint" class="modal">
        <!-- Modal content -->
        <div id="hint-content" class="modal-game-content">
            <div id="hint-text" class="modal-game-text" style="display: none">
                <p>ssssdasdasdas</p>
            </div>
        </div>

    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                <p>ssssdasdasdas</p>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                <p>ssssdasdasdas</p>
            </div>
        </div>

    </div>
@stop

@section('scripts')
     <script>
         $(document).ready(function() {

             // Initialize all your Lottie animations here
             loadLottieAnimation('button-track', '{{url('assets/img/track2/breakcrum.json')}}');
             loadLottieAnimation('question', '{{url('assets/img/track2/border.json')}}');
             loadLottieAnimation('answer1', '{{url('assets/img/track2/answer.json')}}');
             loadLottieAnimation('answer2', '{{url('assets/img/track2/answer.json')}}');
             loadLottieAnimation('answer3', '{{url('assets/img/track2/answer.json')}}');
             loadLottieAnimation('answer4', '{{url('assets/img/track2/answer.json')}}');
             loadLottieAnimation('button-frame-next', '{{url('assets/img/track2/next.json')}}');

             $("#answer1").click(function () {
                 $("#hint").fadeIn("slow", function() {
                     loadLottieAnimation('hint-content', '{{url('assets/img/track2/hint.json')}}');
                     $("#hint-text").fadeIn(2500);
                 })
             })

             $("#answer2").click(function () {
                 $("#explain").fadeIn("slow", function() {
                     loadLottieAnimation('explain-content', '{{url('assets/img/track2/giaithich.json')}}');
                     $("#explain-text").fadeIn(2500);
                 })
             })
             $("#answer3").click(function () {
                 $("#ducrut").fadeIn("slow", function() {
                     loadLottieAnimation('ducrut-content', '{{url('assets/img/track2/ducrut.json')}}');
                     $("#ducrut-text").fadeIn(3000);
                 })
             })
             $("#button-frame-next").click(function () {
                window.location.href = '/1/track2/3';
             })

             $(window).click(function(event) {
                 if ($(event.target).is("#hint")) {
                     destroyLottieAnimation('hint-content')
                     $(".modal").hide();
                 }
                 if ($(event.target).is("#explain")) {
                     destroyLottieAnimation('explain-content')
                     $("#explain").hide();
                 }
                 if ($(event.target).is("#ducrut")) {
                     destroyLottieAnimation('ducrut-content')
                     $("#ducrut").hide();
                 }
             });
         });
    </script>
@stop
