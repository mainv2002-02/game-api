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
                        <div class="button-track-label">TRACK 03</div>
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
                <div class="title">Câu số 4</div>
                <div id="question" class="question">
                    <div class="question-content">
                        Bộ phận IT hiện đang tổng hợp các thông tin có khả năng sẽ bị thu thập qua các cuộc tấn công Phishing Email trong thành phố hạnh phục của chúng ta.
                        <p>Hãy chọn những đáp án có khả năng xảy ra nhất vào màn hình máy tính:</p>
                        <p>1. Dữ liệu nhạy cảm của công ty (Lương nhân viên; dữ liệu mua hàng, chiến lược kinh doanh…)</p>
                        <p>2. Dữ liệu không thể thu thập qua email (sinh trắc học, lưu trữ trên thiết bị ngoại tuyến,…)</p>
                        <p>3. Dữ liệu được bảo vệ an toàn (mã hóa mạnh, các biện pháp kiểm soát nghiêm ngặt)</p>
                        <p>4. Thông tin đăng nhập của users</p>
                        <p>5. Thông tin cá nhân của users (CCCD/Bank…)</p>
                        <p>6. Thông tin tài chính của users (Số tài khoản/ Số dư tài khoản …)</p>
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer"  onclick="answer(this, false, true)">
                    <div class="answer-content">
                        Đáp án: 1 2 3 4
                    </div>
                </div>
                <div id="answer2" class="answer"  onclick="answer(this, false, true)">
                    <div class="answer-content">
                        Đáp án: 1 3 5 6
                    </div>
                </div>
                <div id="answer3" class="answer"  onclick="answer(this, true, true)">
                    <div class="answer-content">
                        Đáp án: 1 4 5 6
                    </div>
                </div>
                <div id="answer4" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        Tất cả đáp án trên.
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
                <p>Dữ liệu không thể thu thập qua email và được bảo vệ an toàn không có khả năng bị thu thập
                </p>
            </div>
        </div>

    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                <p>1. Dữ liệu nhạy cảm của công ty (Lương nhân viên; dữ liệu mua hàng, chiến lược kinh doanh…)</p>
                <p>4. Thông tin đăng nhập của users</p>
                <p>5. Thông tin cá nhân của users (CCCD/Bank…)</p>
                <p>6. Thông tin tài chính của users (Số tài khoản/ Số dư tài khoản …)</p>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                <p>Bộ phận IT đóng vai trò vô cùng quan trọng trong việc bảo vệ tổ chức khỏi các mối đe dọa an ninh mạng ngày càng gia tăng.</p>
                <p>Dưới đây là một số lý do chính:</p>
                <p>1. Phòng chống tấn công mạng</p>
                <p>2. Bảo vệ dữ liệu</p>
                <p>3. Đảm bảo tính sẵn sàng và khả năng phục hồi của hệ thống</p>
                <p>4. Tuân thủ các quy định về bảo mật dữ liệu và an ninh mạng.</p>
                <p>5. Hỗ trợ người dùng trong việc sử dụng các hệ thống CNTT và giải quyết các vấn đề kỹ thuật.</p>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script src="{{ url('assets/js/question.js?v=1.0') }}"></script>
    <script>
        $(document).ready(function() {
            $("#button-frame-next").click(function () {
                window.location.href = '/1/track3/5';
            })
        });
    </script>
@stop
