@extends('master')

@section('title', 'Home Page')

@section('style-libraries')
    <link rel="stylesheet" href="{{ url('assets/css/question/track2/question.css') }}">
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
                <div class="title">Câu số 2</div>
                <div id="question" class="question">
                    <div class="question-content">
                        Trong giai đoạn cuối năm 2023, kênh KA OFF tại vùng HCM được dự báo sẽ bán 50 ngàn thùng COCA-COLA SLEEK CAN 320M trong tuần cuối tháng 11. Tuy nhiên, thực tế chúng ta bán được tốt hơn dự kiến. Đâu có thể là lý do cho việc này?
                        <p>A. Coke bán số lượng rất lớn sản phẩm cho khách hàng với giá thấp trong tuần cuối tháng 11, đơn hàng này phát sinh ngoài kế hoạch dự báo.</p>
                        <p>B. Coke chạy các chương trình khuyến mãi cho khách hàng trong tuần cuối tháng 11.</p>
                        <p>C. Đối thủ bán số lượng rất lớn sản phẩm cho khách hàng với giá thấp trong tuần cuối tháng 11, đơn hàng này phát sinh ngoài kế hoạch dự báo.</p>
                        <p>D. Đối thủ chạy các chương trình khuyến mãi đặt biệt trong tuần cuối tháng 11.</p>
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer" onclick="answer(this, true, true)">
                    <div class="answer-content">
                        A
                    </div>
                </div>
                <div id="answer2" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        B
                    </div>
                </div>
                <div id="answer3" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        C
                    </div>
                </div>
                <div id="answer4" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        D
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
                <p>Rất tiếc, ắt hẳn bạn đã có chút nhầm lẫn. Do ảnh hưởng của high-volume sales, lượng thiêu thụ cao hơn so với dự kiến.
                </p>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                <p>Do ảnh hưởng của high-volume sales, lượng thiêu thụ cao hơn so với dự kiến.
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
                    window.location.href = '/2/track1/3';
                })
            });
        </script>
    @stop
@stop
