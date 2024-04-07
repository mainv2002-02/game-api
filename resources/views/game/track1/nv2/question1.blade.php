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
                        Nối mục đích mua sắm tương ứng với diễn giải và ví dụ:
                        <p style="text-align: center">(Ấn vào <b>HIỆN BẢNG</b> để xem câu hỏi đầy đủ)</p>
                    </div>
                    <div class="background-full-question" onclick="openFullQuestion()">
                        <p class="centered-text">HIỆN BẢNG</p>
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        1E   2D   3B   4A   5C   6F
                    </div>
                </div>
                <div id="answer2" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        1D   2E   3C   4F   5B   6A
                    </div>
                </div>
                <div id="answer3" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        1A   2D   3B   4F   5C   6E
                    </div>
                </div>
                <div id="answer4" class="answer" onclick="answer(this, true, true)">
                    <div class="answer-content">
                        1E   2D   3B   4F   5C   6A
                    </div>
                </div>
                <div id="button-frame-next" class="next"></div>
            </div>
        </div>
    </div>

    <div id="full-question" class="modal">
        <!-- Modal content -->
        <div id="full-question-content" class="modal-game-content" style="display: none">
            Nối mục đích mua sắm tương ứng với diễn giải và ví dụ:
            <p style="text-align: center">
                <img src="{{url('assets/img/track1/question5/dashboard.png')}}" class="support" alt="support" style="width: 70%"/>
            </p>
        </div>
    </div>

    <div id="hint" class="modal">
        <!-- Modal content -->
        <div id="hint-content" class="modal-game-content">
            <div id="hint-text" class="modal-game-text" style="display: none">
                <p>Rất tiếc, hãy đọc kĩ và hiểu thấu để có câu trả lời chính xác bạn nhé!
                </p>
            </div>
        </div>

    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                <p>Rất tiếc, ắt hẳn bạn đã có chút nhầm lẫn. Lên kế hoạch dự đoán nhu cầu thị trường đòi hỏi người lên kế hoạch phải nhạy bén và có kiến thức sâu về nhiệm vụ, cách thức, động cơ mua sắm của khách hàng với từng mặt hàng khác nhau.
                </p>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                <p>Lên kế hoạch dự đoán nhu cầu thị trường đòi hỏi người lên kế hoạch phải nhạy bén và có kiến thức sâu về nhiệm vụ, cách thức, động cơ mua sắm của khách hàng với từng mặt hàng khác nhau.
                </p>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    @section('scripts')
        <script src="{{ url('assets/js/question.js?v=1.0') }}"></script>
        <script>
            $(document).ready(function() {
                $("#button-frame-next").click(function () {
                    window.location.href = '/2/track1/2';
                })
            });
        </script>
    @stop
@stop
