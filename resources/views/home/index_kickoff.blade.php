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
    <div class="kickoff" id="kickoff" >
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
            <div id="button-frame"></div>
        </div>
    </div>

    <div class="story" id="story" style="display: none">
        <div class="full-page-background">
            <div class="full-page-opacity"></div>
        </div>
        <div class="frame-container">
            <div id="border-frame-story">
                <div class="typewriter green" id="story-content">
                    <div id="story-content1"></div>
                    <div id="story-content2"></div>
                </div>
            </div>
            <div id="button-frame-story"></div>
        </div>
    </div>

    <div class="mission" id="mission" style="display: none">
        <div class="full-page-background">
            <div class="full-page-opacity"></div>
        </div>
        <div class="frame-container">
            <div id="border-frame-mission">
                <div class="typewriter green" >
                    <div id="mission-content">
                        <div id="mission-content1"></div>
                        <div id="mission-content2"></div>
                        <div id="mission-content3"></div>
                    </div>
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
             loadLottieAnimation('border-frame', '{{url('assets/img/kickoff/border.json')}}');
             loadLottieAnimation('button-frame', '{{url('assets/img/kickoff/button.json')}}');

             var video = document.getElementById('myVideo');

             video.addEventListener('ended', function() {
                 $("#bg01").css("display", "none");
                 $("#bg02").css("display", "block");
             });

             $("#button-frame").click(function() {
                 $("#kickoff").fadeOut(2000);
                 $("#story").fadeIn(2000, function (){
                     loadLottieAnimation('border-frame-story', '{{url('assets/img/story/border.json')}}');
                     loadLottieAnimation('button-frame-story', '{{url('assets/img/story/button.json')}}');

                     const htmlContent1 = `<p><b>Thị trấn Happiness - The Happiness City</b> luôn được biết tới là một nơi sản xuất
                        và phân phối hàng đầu của nhiều loại thức uống đa dạng, hợp thời và được
                        yêu thích bởi hàng triệu người tiêu dùng trên khắp Vương quốc. Tuy vậy, Thị trấn
                        đang bước vào tương lai với rất nhiều thách thức đang chờ đón như sự thay đổi
                        thói quen liên tục của người tiêu dùng, sự cạnh tranh mạnh mẽ của các thị trấn
                        đối thủ, hay những xu hướng và nhu cầu vô cùng mới của tương lai công việc.</p>
                        <br>
                        <p>Hơn bao giờ hết, thị trấn đang cần tìm kiếm những <b class="pink">Người hùng Dẫn đầu Tương</b>
                        <b class="pink">lai - Growth Shapers</b> để cùng nhau vượt qua những thách thức của tương lai</p>`;
                    const htmlContent2 = `<p class="center">và dẫn dắt Thị trấn tới những thành công mới</p>`;

                     $('#story-content1').typer([htmlContent1]);
                     setTimeout(function (){
                         $('#story-content2').typer([htmlContent2])
                     }, 6900)
                 });
             });

             $("#button-frame-story").click(function() {
                 $("#story").fadeOut(2000);
                 $("#mission").fadeIn(2000, function (){
                     loadLottieAnimation('border-frame-mission', '{{url('assets/img/mission/border.json')}}');
                     loadLottieAnimation('button-frame-mission', '{{url('assets/img/mission/button.json')}}');

                     const htmlContent1 = `<p>Bạn đã sẵn sàng bay tới <b class="pink">Thị trấn Happiness</b></p>`
                     const htmlContent2 = `<p>và cùng hoàn thành những thử thách khác nhau để trở thành</p>`
                     const htmlContent3 = `<p>Người hùng dẫn đầu  <b class="pink">Tương lai - Growth Shapers?</b></p>`;

                     $('#mission-content1').typer([htmlContent1]);
                     setTimeout(function (){
                         $('#mission-content2').typer([htmlContent2])
                     }, 1000)
                     setTimeout(function (){
                         $('#mission-content3').typer([htmlContent3])
                     }, 2000)
                 });
             });

             $("#button-frame-mission").click(function() {
                 window.location.href = "/character"
             });
         });
    </script>
@stop
