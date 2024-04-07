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
                        <div class="button-track-label">TRACK 02</div>
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
                        Độ phủ (Numeric distribution) của một sản phẩm đo lường “mức độ có mặt” của sản phẩm ấy trên tổng số điểm bán của thị trường, số này càng lớn thì tức là sản phẩm đã phủ được càng nhiều điểm bán (về mặt hiện diện). Hiểu về độ phủ là nền tảng quan trọng, hãy thử tính độ phủ của sản phẩm Green Drink trong một ví dụ sau đây nhé!
                        <p style="text-align: center">(Ấn vào <b>HIỆN BẢNG</b> để xem câu hỏi đầy đủ)</p>
                    </div>
                    <div class="background-full-question" onclick="openFullQuestion()">
                        <p class="centered-text">HIỆN BẢNG</p>
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        50
                    </div>
                </div>
                <div id="answer2" class="answer" onclick="answer(this, true, true)">
                    <div class="answer-content">
                        60
                    </div>
                </div>
                <div id="answer3" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                       70
                    </div>
                </div>
                <div id="answer4" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        80
                    </div>
                </div>
                <div id="button-frame-next" class="next"></div>
            </div>
        </div>
    </div>

    <div id="full-question" class="modal">
        <!-- Modal content -->
        <div id="full-question-content" class="modal-game-content" style="display: none">
            Độ phủ (Numeric distribution) của một sản phẩm đo lường “mức độ có mặt” của sản phẩm ấy trên tổng số điểm bán của thị trường, số này càng lớn thì tức là sản phẩm đã phủ được càng nhiều điểm bán (về mặt hiện diện). Hiểu về độ phủ là nền tảng quan trọng, hãy thử tính độ phủ của sản phẩm Green Drink trong một ví dụ sau đây nhé!
            <table class="table-container">
                <thead>
                <tr>
                    <td>CÁC ĐIỂM BÁN CÓ TRÊN THỊ TRƯỜNG</td>
                    <td>SẢN PHẨM GREEN DRINK ĐÃ CÓ MẶT TẠI CỬA HÀNG</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Cửa hàng A</td>
                    <td>&#10004;
                    </td>
                </tr>
                <tr>
                    <td>Cửa hàng B</td>
                    <td>&#10004;
                    </td>
                </tr>
                <tr>
                    <td>Cửa hàng C</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Cửa hàng D</td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>Cửa hàng E</td>
                    <td>&#10004;
                    </td>
                </tr>
                </tbody>
            </table>
            <b>Câu hỏi</b>: Độ phủ của FuzeTea trong tình huống này là bào nhiêu %?
        </div>
    </div>

    <div id="hint" class="modal">
        <!-- Modal content -->
        <div id="hint-content" class="modal-game-content">
            <div id="hint-text" class="modal-game-text" style="display: none">
                <p>Bạn có thể tính độ phủ của sản phẩm = Tổng số cửa hàng : Số cửa hàng mà sản phẩm đã có mặt</p>
            </div>
        </div>
    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                <p>Hiện tại có tổng 5 cửa hàng trên thị trường. Và Fuzetea đã có mặt tại 3 cửa hàng. Khi đó, bạn có thể tính độ phủ của sản phẩm = 3:5</p>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="width: 60vw; display: none">
                <p>Đây là một trong những chỉ số mà phòng Thương mại đo lường để biết được độ phổ biến của nhãn hàng, để thấy hệ thống phân phối của chúng ta đã sâu rộng được tới đâu. Sản phẩm càng được phủ rộng rãi trên thị trường càng có nhiều cơ hội hơn để tiếp xúc với người tiêu dùng.
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
                window.location.href = '/2/track2/4';
            })
        });
    </script>
@stop
