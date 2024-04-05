@php use Illuminate\Support\Facades\Auth; @endphp
@extends('master')

@section('title', 'Home Page')

@section('style-libraries')

@stop

@section('styles')
    <link rel="stylesheet" href="{{ url('assets/css/home/home.css?v=1.1') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/kickoff.css?v=1.1') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/story.css?v=1.1') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/mission.css?v=1.1') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/character.css?v=1.2') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/character-info.css?v=1.3') }}">
@stop

@section('content')
    <div id="page-home" class="page-home">
        <div id="lottie-background" class="lottie"></div>
        <div class="form-container">
            <div id="lottie-input-1" class="lottie-input">
                <div class="input-text lottie-text" style="display: none">{{Auth::user()->name}}</div>
            </div>
            <div id="lottie-input-2" class="lottie-input">
                <div class="input-text lottie-text" style="display: none">{{Auth::user()->phone}}</div>
            </div>
            <div id="lottie-input-3" class="lottie-input">
                <div class="input-text lottie-text" style="display: none">{{Auth::user()->title}}</div>
            </div>
            <div id="lottie-input-4" class="lottie-input">
                <div class="input-text lottie-text" style="display: none">{{Auth::user()->department}}</div>
            </div>
            <div id="lottie-input-5" class="lottie-input">
                <div class="input-text lottie-text" style="display: none">{{Auth::user()->area}}</div>
            </div>
            <div id="home-button" class="lottie-button"></div>
        </div>
    </div>

    <div class="kickoff" id="kickoff" style="display: none">
        <div id="kickoff-background" class="lottie">
            <div class="lottie-text kickoff-text" style="display: none">CHÀO MỪNG BẠN TỚI VỚI EXPERIENCE DAY</div>
        </div>
        <div class="frame-container">
            <div id="kickoff-border-frame"></div>
            <div id="kickoff-button-frame"></div>
            <div id="kickoff-fullscreen-frame"></div>
        </div>
    </div>

    <div class="story" id="story" style="display: none">
        <div id="story-background" class="lottie">
            <div class="lottie-text story-text" style="display: none">Bối cảnh</div>
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
        <div id="story-background" class="lottie">
            <div class="lottie-text mission-text" style="display: none">Nhiệm vụ</div>
        </div>
        <div class="frame-container">
            <div id="border-frame-mission">
                <div class="typewriter green" >
                    <div id="mission-content">
                        <div id="mission-content"></div>
                    </div>
                </div>
            </div>
            <div id="button-frame-mission">
            </div>
        </div>
    </div>

    <div class="character" id="character" style="display: none">
        <div class="background" id="bg-character">
            <!-- Container for the first character and frame -->
            <div class="frame-container">
                <div id="lottie-frame-1" class="lottie-animation"></div>
                <img id="nv01" src="{{url('assets/img/nv/nv01-01.png')}}" alt="Data Master" hero-id="1" class="character-image" style="display: none">
                <div class="character-label" style="display: none">Data Master</div>
                <div class="left-character" onclick="prevCharacter('1')"></div>
                <div class="right-character" onclick="nextCharacter('1')"></div>
                <div class="select-character" onclick="selectCharacter('1')"></div>
            </div>

            <!-- Container for the second character and frame -->
            <div class="frame-container">
                <div id="lottie-frame-2" class="lottie-animation"></div>
                <img id="nv02" src="{{url('assets/img/nv/nv02-01.png')}}" alt="Data Master" hero-id="2" class="character-image" style="display: none">
                <div class="character-label" style="display: none;">Problem Solver</div>
                <div class="left-character" onclick="prevCharacter('2')"></div>
                <div class="right-character" onclick="nextCharacter('2')"></div>
                <div class="select-character" onclick="selectCharacter('2')"></div>
            </div>

            <!-- Container for the third character and frame -->
            <div class="frame-container">
                <div id="lottie-frame-3" class="lottie-animation"></div>
                <img id="nv03" src="{{url('assets/img/nv/nv03-01.png')}}" alt="Data Master" hero-id="3" class="character-image" style="display: none">
                <div class="character-label" style="display: none">Multitasker</div>
                <div class="left-character" onclick="prevCharacter('3')"></div>
                <div class="right-character" onclick="nextCharacter('3')"></div>
                <div class="select-character" onclick="selectCharacter('3')"></div>
            </div>
        </div>
    </div>

    <div class="character-info" id="character-info" style="display: none">
        <div id="character-info-background" class="lottie"></div>
        <div class="background" id="bg-character">
            <div class="frame-container">
                <div id="character-info-title" class="character-info-title" style="display: none">Thông Tin Nhân Vật</div>
                <div id="character-info-des" class="character-info-des" style="display: none">

                </div>
                <div id="lottie-frame-info" class="lottie-animation"></div>
                <img id="character-info-image" alt="Data Master" hero-id="1" class="character-info-image" style="display: none" />
                <div id="character-info-name" class="character-info-label" style="display: none"></div>
                <div id="button-frame-back"></div>
                <div id="button-frame-next"></div>
            </div>
        </div>
    </div>


    <div class="video-bg" id="bg01" style="display: none">
        <video playsinline autoplay muted id="myVideo">
            <source src="{{url('assets/img/character/animation.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            loadLottieAnimation('lottie-background', '{{url('assets/img/home/border.json')}}');
            loadLottieAnimation('lottie-input-1', '{{url('assets/img/home/input.json')}}');
            loadLottieAnimation('lottie-input-2', '{{url('assets/img/home/input.json')}}');
            loadLottieAnimation('lottie-input-3', '{{url('assets/img/home/input.json')}}');
            loadLottieAnimation('lottie-input-4', '{{url('assets/img/home/input.json')}}');
            loadLottieAnimation('lottie-input-5', '{{url('assets/img/home/input.json')}}');
            loadLottieAnimation('home-button', '{{url('assets/img/home/button.json')}}');
            $(".input-text").fadeIn(1000);

            $("#home-button").click(function () {
                $("#page-home").fadeOut(2000);
                $("#kickoff").fadeIn(2000, function () {
                    displayLottieText('kickoff-text');
                    loadLottieAnimation('kickoff-background', '{{url('assets/img/kickoff/border.json')}}');
                    loadLottieAnimation('kickoff-border-frame', '{{url('assets/img/kickoff/border01.json')}}');
                    loadLottieAnimation('kickoff-button-frame', '{{url('assets/img/kickoff/button.json')}}');
                    loadLottieAnimation('kickoff-fullscreen-frame', '{{url('assets/img/kickoff/fullscreen.json')}}');
                });
            });

            $("#kickoff-button-frame").click(function() {
                $("#kickoff").fadeOut(2000);
                $("#story").fadeIn(2000, function (){
                    displayLottieText('story-text');
                    loadLottieAnimation('border-frame-story', '{{url('assets/img/story/border.json')}}');
                    loadLottieAnimation('button-frame-story', '{{url('assets/img/story/button.json')}}');

                    const htmlContent1 = `<p><b>Thị trấn Hạnh Phúc - The Happiness City</b> luôn được biết tới là một nơi sản xuất
                        và phân phối hàng đầu của nhiều loại thức uống đa dạng, hợp thời và được
                        yêu thích bởi hàng triệu người tiêu dùng trên khắp Vương quốc. Tuy vậy, Thị trấn
                        đang bước vào tương lai với rất nhiều thách thức đang chờ đón như sự thay đổi
                        thói quen liên tục của người tiêu dùng, sự cạnh tranh mạnh mẽ của các thị trấn
                        đối thủ, hay những xu hướng và nhu cầu vô cùng mới của tương lai công việc.</p>
                        <br>
                        <p>Hơn bao giờ hết, thị trấn đang cần tìm kiếm những <b class="pink">Người hùng Dẫn đầu Tương</b>
                        <b class="pink">lai - Growth Shapers</b> để cùng nhau vượt qua những thách thức của tương lai
                        và dẫn dắt Thị trấn tới những thành công mới</p>`;

                    $('#story-content1').typer([htmlContent1]);
                });
            });
            $("#button-frame-story").click(function() {
                $("#story").fadeOut(2000);
                $("#mission").fadeIn(2000, function (){
                    displayLottieText('mission-text');
                    loadLottieAnimation('border-frame-mission', '{{url('assets/img/story/border.json')}}');
                    loadLottieAnimation('button-frame-mission', '{{url('assets/img/mission/button.json')}}');

                    const htmlContent1 = `<p>Bạn đã sẵn sàng bay tới <b class="pink">Thị trấn Hạnh Phúc</b></p>
                                          <p>và cùng hoàn thành những thử thách khác nhau để trở thành</p>
                                          <p>Người hùng dẫn đầu  <b class="pink">Tương lai - Growth Shapers?</b></p>`;

                    $('#mission-content').typer([htmlContent1]);
                });
            });

            $("#button-frame-mission").click(function() {
                $("#mission").fadeOut(2000);
                $("#character").fadeIn(2000, function (){
                addAnimationCharacter();
                });
            });

            heroId = 1;

            $("#button-frame-back").click(function () {
                $("#character-info").fadeOut(3000);
                $("#bg-character").fadeIn(2000, function (){
                    destroyAnimationCharacterInfo();
                    addAnimationCharacter();
                });
            })

            $("#button-frame-next").click(function () {
                $("#character-info").fadeOut(3000);
                $("#bg01").fadeIn(2000);
            })

            var video = document.getElementById('myVideo');

            video.addEventListener('ended', function() {
                window.location.href = "/home/" + heroId;
            });

            function displayLottieText(cssClass) {
                $("." + cssClass).fadeIn(100);
            }
        });

        var char1 = [
            {url: '{{url('assets/img/nv/nv01-01.png')}}', selected: true},
            {url: '{{url('assets/img/nv/nv01-02.png')}}', selected: false},
            {url: '{{url('assets/img/nv/nv01-03.png')}}', selected: false}
        ]

        var char2 = [
            {url: '{{url('assets/img/nv/nv02-01.png')}}', selected: true},
            {url: '{{url('assets/img/nv/nv02-02.png')}}', selected: false},
            {url: '{{url('assets/img/nv/nv02-03.png')}}', selected: false}
        ]

        var char3 = [
            {url: '{{url('assets/img/nv/nv03-01.png')}}', selected: true},
            {url: '{{url('assets/img/nv/nv03-02.png')}}', selected: false},
            {url: '{{url('assets/img/nv/nv03-03.png')}}', selected: false}
        ]

        function nextCharacter(num) {
            var obj = getChar(num);
            var char = obj.char;

            var currentIndex = char.findIndex(item => item.selected === true);

            if (currentIndex !== -1) {
                char[currentIndex].selected = false;
            }

            var newIndex = currentIndex + 1;

            if (newIndex > 2) {
                newIndex = 0;
            }
            char[newIndex].selected = true;

            var newURL = char[newIndex].url;
            var id = "nv0" + num;
            changeImage(id, newURL, false);
        }

        function prevCharacter(num) {
            var obj = getChar(num);
            var char = obj.char;

            var currentIndex = char.findIndex(item => item.selected === true);

            if (currentIndex !== -1) {
                char[currentIndex].selected = false;
            }

            var newIndex = currentIndex - 1;

            if (newIndex < 0) {
                newIndex = 2;
            }
            char[newIndex].selected = true;

            var newURL = char[newIndex].url;
            var id = "nv0" + num;
            changeImage(id, newURL, true);
        }

        function selectCharacter(num) {
            heroId = num;
            var obj = getChar(num);
            var char = obj.char;
            var currentIndex = char.findIndex(item => item.selected === true);

            var newURL = char[currentIndex].url;
            $("#character-info-name").html(obj.name);
            $("#character-info-des").html(obj.des);

            $("#character-info-image").attr("src", newURL);
            setTimeout(function () {
                $("#bg-character").fadeOut(2000);
                $("#character-info").fadeIn(1000, function() {
                    destroyAnimationCharacter();
                    addAnimationCharacterInfo();
                });
            }, 500)
        }

        function addAnimationCharacter() {
            loadLottieAnimation('lottie-frame-1', '{{url('assets/img/character/border.json')}}');
            loadLottieAnimation('lottie-frame-2', '{{url('assets/img/character/border.json')}}');
            loadLottieAnimation('lottie-frame-3', '{{url('assets/img/character/border.json')}}');

            setTimeout(function () {
                $(".character-image").fadeIn(3000);
                $(".character-label").fadeIn(3000);
            }, 1000);
        }

        function destroyAnimationCharacter() {
            destroyLottieAnimation('lottie-frame-1');
            destroyLottieAnimation('lottie-frame-2');
            destroyLottieAnimation('lottie-frame-3');
            $(".character-image").fadeOut("slow");
            $(".character-label").fadeOut("slow");
        }

        function addAnimationCharacterInfo() {
            loadLottieAnimation('character-info-background', '{{url('assets/img/character-info/border.json')}}');
            loadLottieAnimation('lottie-frame-info', '{{url('assets/img/character-info/frame.json')}}');
            loadLottieAnimation('button-frame-back', '{{url('assets/img/character-info/back.json')}}', true);
            loadLottieAnimation('button-frame-next', '{{url('assets/img/character-info/next.json')}}', true);
            $("#character-info-title").fadeIn("slow");
            $("#character-info-des").fadeIn("slow");
            $("#character-info-image").fadeIn("slow");
            $("#character-info-name").fadeIn("slow");
        }

        function destroyAnimationCharacterInfo() {
            destroyLottieAnimation('character-info-background');
            destroyLottieAnimation('lottie-frame-info');
            destroyLottieAnimation('button-frame-back');
            destroyLottieAnimation('button-frame-next');
            $("#character-info-title").fadeOut("slow");
            $("#character-info-des").fadeOut("slow");
            $("#character-info-image").fadeOut("slow");
            $("#character-info-name").fadeOut("slow");
        }

        function changeImage(id, newImageUrl, isLeft) {
            var leftStr = isLeft ? '-5vw': '5vw';
            $("#" + id).animate({left: leftStr, opacity: 0}, 700, function() {
                $(this).removeAttr('style');
                $(this).attr("src", newImageUrl);
                setTimeout(function () {
                    $("#" + id).fadeIn('slow');
                }, 500);
                    // $(this).removeAttr('style');
            });
        }

        function getChar(num) {
            var char = [];
            var name = '';
            var des = '';
            switch (num) {
                case '1':
                    char = char1;
                    name = 'Data Master';
                    des = `<p>Giới Tính: Không xác định</p>
                    <p>Đặc điểm: Không xác định</p>`;
                    break;
                case '2':
                    char = char2;
                    name = 'Problem Solver';
                    des = `<p>Giới Tính: Không xác định</p>
                    <p>Đặc điểm: Không xác định</p>`;
                    break;
                case '3':
                    char = char3;
                    name = 'Multitasker';
                    des = `<p>Giới Tính: Không xác định</p>
                    <p>Đặc điểm: Không xác định</p>`;
                    break;
                default:
                    break;
            }

            return {char: char, name: name, des: des};
        }
    </script>
@stop
