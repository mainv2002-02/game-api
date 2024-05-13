@php use Illuminate\Support\Facades\Auth; @endphp
@extends('master')

@section('title', 'Home Page')

@section('style-libraries')

@stop

@section('styles')
    <link rel="stylesheet" href="{{ url('assets/css/home/home.css?v=1.7') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/kickoff.css?v=1.4') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/story.css?v=1.4') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/mission.css?v=1.4') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/character.css?v=1.6') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/character-info.css?v=1.7') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home/modal.css?v=1.1') }}">
@stop

@section('content')
    <!-- Modal Container -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Thông tin</h5>
                </div>
                <div class="modal-body">
                    <form id="inputForm" method="POST">
                        <!-- Phone Input -->
                        <div class="form-group">
                            <label for="phone">Điện Thoại:</label>
                            <input type="text" class="form-control" id="phone" name="phone" required value="123">
                        </div>

                        <!-- Title Dropdown -->
                        <div class="form-group">
                            <label for="title">Chức danh:</label>
                            <input type="text" id="title" name="title" class="form-control" required value="111">
                        </div>

                        <!-- Department Dropdown -->
                        <div class="form-group">
                            <label for="department">Bộ Phận:</label>
                            <select class="form-control" id="department" name="department" required value="123}">
                                <option value="">Lựa chọn Bộ phận</option>
                                <option value="Supply Chain">Supply Chain</option>
                                <option value="Sales & Commercial">Sales & Commercial</option>
                                <option value="People">People</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="Legal">Legal</option>
                                <option value="PACS">PACS</option>
                                <option value="Strategy">Strategy</option>
                            </select>
                        </div>

                        <!-- Area Dropdown -->
                        <div class="form-group">
                            <label for="area">Vùng Miền:</label>
                            <select class="form-control" id="area" name="area" required value="233">
                                <option value="">Lựa chọn vùng miền</option>
                                <option value="HO (trụ sở chính)">HO (trụ sở chính)</option>
                                <option value="HCM">HCM</option>
                                <option value="Mekong">Mekong</option>
                                <option value="South Provinces">South Provinces</option>
                                <option value="Da Nang">Da Nang</option>
                                <option value="Hanoi">Hanoi</option>
                                <option value="North East">North East</option>
                                <option value="North West">North West</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="checkSubmit()">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <div id="page-home" class="page-home">
        <div id="lottie-background" class="lottie"></div>
        <div class="form-container">
            <div id="lottie-input-1" class="lottie-input">
                <div class="input-text lottie-text" style="display: none">111</div>
            </div>
            <div id="lottie-input-2" class="lottie-input">
                <div class="input-text lottie-text" style="display: none">222</div>
            </div>
            <div id="lottie-input-3" class="lottie-input">
                <div class="input-text lottie-text" style="display: none">333</div>
            </div>
            <div id="lottie-input-4" class="lottie-input">
                <div class="input-text lottie-text" style="display: none">444</div>
            </div>
            <div id="lottie-input-5" class="lottie-input">
                <div class="input-text lottie-text" style="display: none">555</div>
            </div>
            <div id="home-button" class="lottie-button"></div>
        </div>
    </div>

    <div class="kickoff" id="kickoff" style="display: none">
        <div id="kickoff-background" class="lottie"></div>
        <div class="frame-container">
            <div id="kickoff-border-frame"></div>
            <div id="kickoff-button-frame"></div>
{{--            <div id="kickoff-fullscreen-frame"></div>--}}
        </div>
    </div>

    <div class="story" id="story" style="display: none">

        <div class="lottie-text story-text" style="display: none">BỐI CẢNH</div>

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
        <div class="lottie-text mission-text" style="display: none">NHIỆM VỤ</div>
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

            <div id="lottie-frame" class="lottie-animation"></div>

            <div class="frame-container">
                <img id="nv01" src="{{url('assets/img/nv/nv01-01.png')}}"
                     alt="Data Master" hero-id="1" class="character-image" style="display: none" onclick="selectCharacter('1')">
                <div class="left-character" onclick="prevCharacter('1')"></div>
                <div class="right-character" onclick="nextCharacter('1')"></div>
                <div class="select-character" onclick="selectCharacter('1')"></div>
            </div>

            <!-- Container for the second character and frame -->
            <div class="frame-container">
                <img id="nv02" src="{{url('assets/img/nv/nv02-01.png')}}"
                     alt="Data Master" hero-id="2" class="character-image" style="display: none" onclick="selectCharacter('2')">
                <div class="left-character" onclick="prevCharacter('2')"></div>
                <div class="right-character" onclick="nextCharacter('2')"></div>
                <div class="select-character" onclick="selectCharacter('2')"></div>
            </div>

            <!-- Container for the third character and frame -->
            <div class="frame-container">
                <img id="nv03" src="{{url('assets/img/nv/nv03-01.png')}}"
                     alt="Data Master" hero-id="3" class="character-image" style="display: none" onclick="selectCharacter('3')">
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
        function checkSubmit() {
            var isFormComplete = true;
            $('#inputForm input, #inputForm select').each(function() {
                if (!$(this).val()) {
                    isFormComplete = false;
                    return false; // break the loop
                }
            });

            if (isFormComplete) {
                $("#inputForm").submit();
            } else {
                alert("Please fill all the fields.");
            }
        }

        $(document).ready(function() {
            // Display the modal when the document is fully loaded


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
                    loadLottieAnimation('kickoff-background', '{{url('assets/img/kickoff/borderNew.json')}}');
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

                    const htmlContent1 = `<p>Bạn đã sẵn sàng tới khám phá <b class="pink">Thị trấn Hạnh Phúc</b></p>
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
                 $.post(
                    '/home',
                    {
                        'heroId' : heroId,
                    },
                    function(){}
                 ).done(function( data ) {
                    window.location.href = "/home";
                 });
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
            loadLottieAnimation('lottie-frame', '{{url('assets/img/character/fullBackground.json')}}');

            setTimeout(function () {
                $(".character-image").fadeIn(4000);
                $(".character-label").fadeIn(4000);
            }, 1000);
        }

        function destroyAnimationCharacter() {
            destroyLottieAnimation('lottie-frame');
            $(".character-image").fadeOut("slow");
            $(".character-label").fadeOut("slow");
        }

        function addAnimationCharacterInfo() {
            loadLottieAnimation('character-info-background', '{{url('assets/img/character-info/border.json')}}');
            loadLottieAnimation('lottie-frame-info', '{{url('assets/img/character-info/frame.json')}}');
            loadLottieAnimation('button-frame-back', '{{url('assets/img/character-info/back.json')}}', true);
            loadLottieAnimation('button-frame-next', '{{url('assets/img/character-info/next.json')}}', true);
            $("#character-info-title").fadeIn("slow");
            $("#character-info-des").fadeIn(2000);
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
            $("#" + id).fadeOut("slow", function() {
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
                    des = `<p>Thoại: "Hãy để tôi cho bạn thấy những gì dữ liệu đang nói"</p>
                    <p>Mô tả: Là người cẩn thận, tỉ mỉ và logic, bạn có nhiệm vụ thu thập và phân tích dữ liệu một cách nhanh chóng
                        và chính xác từ mỗi tòa nhà để tạo ra những thông tin cần thiết hỗ trợ đưa ra các
                        quyết định chiến lược thông minh nhằm nâng cấp thành phố hành phúc.</p>`;
                    break;
                case '2':
                    char = char2;
                    name = 'Problem Solver';
                    des = `<p>Thoại: "Tôi thích những thử thách, vì tôi luôn có giải pháp"</p>
                    <p>Mô tả: Nhiệm vụ của bạn sẽ là tìm ra và đối mặt với các tình huống khó khăn và thử thách trong từng tòa nhà trong thành phố hạnh phúc, từ đó đưa ra những giải pháp sáng tạo để xử lý vấn đề hiệu quả.</p>`;
                    break;
                case '3':
                    char = char3;
                    name = 'Multitasker';
                    des = `<p>Thoại: "Tôi là người đa năng, có thể thích nghi với mọi tình huống và hoàn thành mọi nhiệm vụ"</p>
                    <p>Mô tả: Là một nhân vật đa năng và linh hoạt, bạn mang trong mình khả năng phi thường kết hợp thu thập dữ liệu, phân tích chuyên sâu và đồng thời đưa ra giải pháp sáng tạo cho những thách thức phức tạp trong các tòa nhà thuộc thành phố hạnh phúc.</p>`;
                    break;
                default:
                    break;
            }

            return {char: char, name: name, des: des};
        }
    </script>
@stop
