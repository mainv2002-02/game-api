@extends('master')

@section('title', 'Home Page')

@section('style-libraries')
    <link rel="stylesheet" href="{{ url('assets/css/home/kickoff.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/story.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/mission.css') }}">
@stop

@section('styles')

@stop

@section('content')
    <div id="kickoff">
        <div class="video-bg" id="bg01">
            <video playsinline autoplay muted id="myVideo">
                <source src="{{url('assets/img/kickoff/background1.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="video-bg" id="bg02" style="display: none">
            <video playsinline autoplay loop muted id="myVideo02">
                <source src="{{url('assets/img/kickoff/background2.mp4')}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="frame-container">
            <div id="border-frame"></div>
            <div id="button-frame">
                <div id="button-text">Tiếp theo</div>
            </div>
        </div>
    </div>
    <div id="story" style="display: none">
        <div class="full-page-background"></div>
        <div class="frame-container">
            <div id="border-frame-story">
                <div class="typewriter green" id="story-content">

                </div>
            </div>
            <div id="button-frame-story">
            </div>
        </div>
    </div>

    <div id="mission" style="display: none">
        <div class="full-page-background"></div>
        <div class="frame-container">
            <div id="border-frame-mission">
                <div class="typewriter green" >
                    <div id="mission-content"></div>
                </div>
            </div>
            <div id="button-frame-mission">
            </div>
        </div>
    </div>

    <!-- Your content here -->
@stop

@section('scripts')
     <script>
         $(document).ready(function() {
            // Initialize Lottie animations for borders and buttons using the JSON data
            lottie.loadAnimation({
                container: document.getElementById('border-frame'), // the dom element
                renderer: 'svg',
                loop: false,
                autoplay: true,
                path: '{{url('assets/img/kickoff/border01.json')}}' // the path to the animation json
            });

            lottie.loadAnimation({
                container: document.getElementById('button-frame'), // the dom element
                renderer: 'svg',
                loop: false,
                autoplay: true,
                path: '{{url('assets/img/kickoff/button.json')}}' // the path to the animation json
            });

             var video = document.getElementById('myVideo');

             video.addEventListener('ended', function() {
                 $("#bg01").css("display", "none");
                 $("#bg02").css("display", "block");

                 // Remove the event listener if you only want to change the video once
                 // video.removeEventListener('ended', arguments.callee);
             });

             $("#button-frame").click(function() {
                 $("#kickoff").css("display", "none");
                 $("#story").css("display", "block");

                 lottie.loadAnimation({
                     container: document.getElementById('border-frame-story'), // the dom element
                     renderer: 'svg',
                     loop: false,
                     autoplay: true,
                     path: '{{url('assets/img/story/border.json')}}' // the path to the animation json
                 });

                 lottie.loadAnimation({
                     container: document.getElementById('button-frame-story'), // the dom element
                     renderer: 'svg',
                     loop: false,
                     autoplay: true,
                     path: '{{url('assets/img/story/button.json')}}' // the path to the animation json
                 });

                 const htmlContent = `<p><b>Thị trấn Happiness - The Happiness City</b> luôn được biết tới là một nơi sản xuất</p>
                    <p>và phân phối hàng đầu của nhiều loại thức uống đa dạng, hợp thời và được</p>
                    <p>yêu thích bởi hàng triệu người tiêu dùng, sự cạnh tranh mạnh mẽ của các thị trấn</p>
                    <p>đối thủ, hay những xu hướng và nhu cầu vô cùng mới của tương lai công việc.</p>
                    <br>
                    <p>Hơn bao giờ hết, thị trấn đang cần tìm kiếm những <b class="pink">Người hùng Dẫn đầu Tương</b></p>
                    <p> <b class="pink">lai - Growth Shapers</b> để cùng nhau vượt qua những thách thức của tương lai</p>
                    <p class="center">và dẫn dắt Thị trấn tới những thành công mới</p>`;

                 $('#story-content').typer([htmlContent])
             });

             $("#button-frame-story").click(function() {
                 $("#story").css("display", "none");
                 $("#mission").css("display", "block");

                 lottie.loadAnimation({
                     container: document.getElementById('border-frame-mission'), // the dom element
                     renderer: 'svg',
                     loop: false,
                     autoplay: true,
                     path: '{{url('assets/img/mission/border.json')}}' // the path to the animation json
                 });

                 lottie.loadAnimation({
                     container: document.getElementById('button-frame-mission'), // the dom element
                     renderer: 'svg',
                     loop: false,
                     autoplay: true,
                     path: '{{url('assets/img/mission/button.json')}}' // the path to the animation json
                 });

                 const htmlContent = `<p>Bạn đã sẵn sàng bay tới <b class="pink">Thị trấn Happiness</b></p>
                    <p>và cùng hoàn thành những thử thách khác nhau để trở thành</p>
                    <p>Người hùng dẫn đầu  <b class="pink">Tương lai - Growth Shapers?</b></p>`;
                 $('#mission-content').typer([htmlContent])
             });

             $("#button-frame-mission").click(function() {
                 window.location.href = "/character"
             });
         });
    </script>
@stop
