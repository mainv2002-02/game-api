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
                        <div class="button-track-label">TRACK01</div>
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
                <div class="title">Câu số 3</div>
                <div id="question" class="question">
                    <div class="question-content">
                        Chương trình Summer UTC là một trong những chương trình lớn nhất của mùa hè, vì thiết kế sản phẩm có sự khác biệt so với phiên bản thông thường nên đòi hỏi nguyên vật liệu phải được chuẩn bị từ trước để phục vụ cho đợt tung sản phẩm vào đầu tháng 5.
                        <p>Biết rằng:</p>
                        <dl>
                            <dt>- Thời gian cần cho việc sản xuất và đưa sản phẩm ra thị trường là: 2 tuần</dt>
                            <dt>- Thời gian cần cho việc đặt hương liệu sản xuất là: 8 tuần</dt>
                            <dt>- Thời gian cần cho việc đặt lon/preform (sản xuất vỏ chai) là: 6 tuần</dt>
                            <dt>- Thời gian cần cho việc đặt nắp lon/chai là: 5 tuần</dt>
                            <dt>- Thời gian cần cho việc đặt carton/ màng co là: 2 tuần</dt>
                        </dl>
                        <p>Lưu ý: leadtime của nguyên vật liệu phải được tính trước thời điểm sản xuất</p>
                        <p>Biết tuần ra mắt sản phẩm thiết kế mới là tuần 18 của năm 2024, việc đặt nắp lon và việc đặt carton vào lúc nào?</p>
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content two">
                        Việc đặt nắp lon xảy ra vào tuần thứ: 12
                        <br/>
                        Việc đặt carton xảy ra vào tuần thứ: 14
                    </div>
                </div>
                <div id="answer2" class="answer" onclick="answer(this, true, true)">
                    <div class="answer-content two">
                        Việc đặt nắp lon xảy ra vào tuần thứ: 11
                        <br/>
                        Việc đặt carton xảy ra vào tuần thứ: 14
                    </div>
                </div>
                <div id="answer3" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content two">
                        Việc đặt nắp lon xảy ra vào tuần thứ: 11
                        <br/>
                        Việc đặt carton xảy ra vào tuần thứ: 15
                    </div>
                </div>
                <div id="answer4" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content two">
                        Việc đặt nắp lon xảy ra vào tuần thứ: 12
                        <br/>
                        Việc đặt carton xảy ra vào tuần thứ: 15
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
                <p>Rất tiếc, hãy đọc kĩ và hiểu thấu để có câu trả lời chính xác bạn nhé! Lưu ý rằng việc đặt các nguyen vật liệu phải được tính bắt đầu từ thời điểm sản xuất, 2 tuần trước khi ra mắt sản phẩm, tức là tuần 16
                </p>
            </div>
        </div>

    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                <p>Rất tiếc, ắt hẳn bạn đã có chút nhầm lẫn.
                    Việc lên kế hoạch để đảm bảo cung cầu cho đợt tung sản phẩm đòi hỏi sự cẩn thận, chi tiết đến từng tuần, thậm chí từng ngày, từng giờ.
                </p>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                <p>Việc lên kế hoạch để đảm bảo cung cầu cho đợt tung sản phẩm đòi hỏi sự cẩn thận, chi tiết đến từng tuần, thậm chí từng ngày, từng giờ.
                </p>
            </div>
        </div>

    </div>
@stop

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
