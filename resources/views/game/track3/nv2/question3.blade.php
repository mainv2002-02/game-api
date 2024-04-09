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
                <div class="title">Câu số 3</div>
                <div id="question" class="question">
                    <div class="question-content">
                        <p>Bạn là một chuyên viên IT mới được giao nhiệm vụ giải quyết vấn đề quản lý dữ liệu thủ công trong bộ phận Chuỗi cung ứng.
                            Hiện nay, mọi dữ liệu về đơn hàng, kho hàng, vận chuyển,... đều được ghi chép và lưu trữ bằng tay,
                            dẫn đến nhiều sai sót, mất mát và khó khăn trong việc truy cập thông tin.
                            Hãy nghiên cứu và chọn giải pháp đổi mới nào sau đây phù hợp:</p>
                        <p>A. Tăng tính chính xác và hiệu quả trong việc quản lý dữ liệu.</p>
                        <p>B. Giảm thiểu sai sót và mất mát dữ liệu.</p>
                        <p>C. Dễ dàng truy cập và chia sẻ thông tin trong nội bộ.</p>
                        <p>D. Cho phép tất cả người dùng dễ dàng truy cập từ mạng bên ngoài</p>
                    </div>
                </div>
                <form method="POST" id="answer-form">
                    <input type="hidden" name="answer" id="answer-input">
                    <input type="hidden" name="track-id" id="track-id" value="{{$track->id}}">
                    <input type="hidden" name="question-id" id="question-id" value="{{$question->id}}">
                    <!-- Lottie Animations for content will be placed here -->
                    <div id="answer1" class="answer"  onclick="answer(this, true, true)">
                        <div class="answer-content">
                            Đáp án: A B C
                        </div>
                    </div>
                    <div id="answer2" class="answer"  onclick="answer(this, false, true)">
                        <div class="answer-content">
                            Đáp án: A C D
                        </div>
                    </div>
                    <div id="answer3" class="answer"  onclick="answer(this, false, true)">
                        <div class="answer-content">
                            Đáp án: B C D
                        </div>
                    </div>
                    <div id="answer4" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content">
                            Tất cả đáp án trên
                        </div>
                    </div>
                    <div id="button-frame-next" class="next"></div>
                </form>
            </div>
        </div>
    </div>

    <div id="hint" class="modal">
        <!-- Modal content -->
        <div id="hint-content" class="modal-game-content">
            <div id="hint-text" class="modal-game-text" style="display: none">
                <p>A. Tăng tính chính xác và hiệu quả trong việc quản lý dữ liệu.</p>
            </div>
        </div>

    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                <p>A. Tăng tính chính xác và hiệu quả trong việc quản lý dữ liệu.</p>
                <p>B. Giảm thiểu sai sót và mất mát dữ liệu.</p>
                <p>C. Dễ dàng truy cập và chia sẻ thông tin trong nội bộ.</p>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                <p>Chính xác
                </p>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script src="{{ url('assets/js/question.js?v=1.0') }}"></script>
@stop
