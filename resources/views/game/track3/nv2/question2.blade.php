
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
                <div class="title">Câu số 2</div>
                <div id="question" class="question">
                    <div class="question-content">
                        <b>Lời dẫn</b>: Việc đảm bảo tính thanh khoản của công ty là một trong những nhiệm vụ vô cùng quan trọng của bộ phận Tài chính. Trong đó, nhiệm vụ thu tiền đúng hạn từ khách hàng là mắt xích không thể thiếu để đảm bảo dòng tiền của công ty.Tuy nhiên, việc khách hàng không trả nợ khi đến hạn thường xuyên xảy ra, đòi hỏi bộ phận có sự theo dõi sát sao về công nợ khách hàng và hành động ngay khi cần thiết.
                        <p style="text-align: center">(Ấn vào <b>HIỆN BẢNG</b> để xem câu hỏi đầy đủ)</p>
                    </div>
                    <div class="background-full-question" onclick="openFullQuestion()">
                        <p class="centered-text">HIỆN BẢNG</p>
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        1A   2B   3C   4D   5E
                    </div>
                </div>
                <div id="answer2" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        1E   2A   3B   4C   5D
                    </div>
                </div>
                <div id="answer3" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        1D   2A   3B   4C   5D
                    </div>
                </div>
                <div id="answer4" class="answer" onclick="answer(this, true, true)">
                    <div class="answer-content">
                        1C   2A   3B   4E   5D
                    </div>
                </div>
                <div id="button-frame-next" class="next"></div>
            </div>
        </div>
    </div>

    <div id="full-question" class="modal">
        <!-- Modal content -->
        <div id="full-question-content" class="modal-game-content" style="display: none">
            <b>Lời dẫn</b>: Việc đảm bảo tính thanh khoản của công ty là một trong những nhiệm vụ vô cùng quan trọng của bộ phận Tài chính. Trong đó, nhiệm vụ thu tiền đúng hạn từ khách hàng là mắt xích không thể thiếu để đảm bảo dòng tiền của công ty.Tuy nhiên, việc khách hàng không trả nợ khi đến hạn thường xuyên xảy ra, đòi hỏi bộ phận có sự theo dõi sát sao về công nợ khách hàng và hành động ngay khi cần thiết.
            <p>
                <b>Tình huống</b>: A là một khách hàng LKA (Local Key Account) của thành phố chúng ta với hạn mức tín dụng 30 triệu, kỳ hạn thanh toán 15 ngày.
            </p>
            <p>Ngày 15.03.2024 là tới kì hạn thanh toán 25 triệu tiền hàng của khách hàng A. Tuy nhiên, hôm nay (13.03) khách hàng A vẫn chưa thanh toán. Bạn hãy đưa ra các hành động đúng nhất để giải quyết tình huống này nhé:</p>
            <p style="text-align: center">(Ấn vào <b>HIỆN BẢNG</b> để xem câu hỏi đầy đủ)</p>
            <p><b>Câu hỏi</b>: Nối đáp án đúng nhất.</p>
            <p>Trong trường hợp Phòng tài chính đã nhắc nhở và đốc thúc nhưng khách hàng không chịu trả nợ, phòng Tài chính cần có hành động gì ở từng khoảng thời gian sau
            <p style="text-align: center">
                <img src="{{url('assets/img/track3/question4/dashboard.png')}}" class="support" alt="support" style="width: 70%"/>
            </p>
        </div>
    </div>

    <div id="hint" class="modal">
        <!-- Modal content -->
        <div id="hint-content" class="modal-game-content">
            <div id="hint-text" class="modal-game-text" style="display: none">
                <p>Hãy sắp xếp theo thứ tự mức độ hình phạt theo thời gian
                </p>
            </div>
        </div>

    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                1C   2A   3B   4E   5D
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
    <script>
        $(document).ready(function() {
            $("#button-frame-next").click(function () {
                window.location.href = '/2/track3/3';
            })
        });
    </script>
@stop
