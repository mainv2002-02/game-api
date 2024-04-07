@extends('master')

@section('title', 'Home Page')

@section('style-libraries')
    <link rel="stylesheet" href="{{ url('assets/css/question/track2/question.css?v=1.0') }}">
@stop

@section('styles')

@stop

@section('content')
    <div class="body-question" style="background-image: url({{url('assets/img/track2/visualize/01.jpg')}})">
        <div class="bg-opacity-10"></div>
        <div class="stream-container">
            <div class="header">
                <div class="left-content">
                    <!-- Your left-side content goes here -->
                    <div id="button-track" class="button-track">
                        <div class="button-track-label">TRACK 01</div>
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
                <div class="title">Câu số 1</div>
                <div id="question" class="question">
                    <div class="question-content">
                        Dựa vào bảng trên, hãy cho biết ngành hàng nào sẽ đóng góp nhiều nhất vào sự tăng trưởng của NARTD trong những năm tiếp theo?
                        <p style="text-align: center">
                            <img src="{{url('assets/img/track1/question1/dashboard.png')}}" class="support" alt="support" style="width: 70%"/>
                        </p>
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        Beverage 5
                    </div>
                </div>
                <div id="answer2" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        Beverage 11
                    </div>
                </div>
                <div id="answer3" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        Beverage 7
                    </div>
                </div>
                <div id="answer4" class="answer" onclick="answer(this, true, true)">
                    <div class="answer-content">
                        Beverage 9
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
                <p>Để biết được ngành hàng đóng góp nhiều nhất, chúng ta nhìn vào số tuyệt đối được dự báo sẽ đóng góp của ngành hàng đó.</p>
            </div>
        </div>
    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                <p>Beverage 9 được dự đoán đóng góp 61bn đến năm 2026, lớn nhất vào sự tăng trưởng của NARTD</p>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="width: 60vw; display: none">
                <p>Phòng Kế hoạch và Hoạch định chiến lược, kết hợp với Phòng Thương mại sẽ dựa vào các báo cáo,
                    dữ liệu về ngành hàng, khách hàng, thị trường kinh tế để đưa ra chiến lược dài hạn cho công ty</p>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script src="{{ url('assets/js/question.js?v=1.0') }}"></script>
    <script>
    $(document).ready(function() {
        $("#button-frame-next").click(function () {
            window.location.href = '/1/track1/2';
        })
    });
    </script>
@stop
