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
                <div class="title">Câu số 7</div>
                <div id="question" class="question">
                    <div class="question-content">
                        Ngoài độ phủ, chúng ta còn có 1 khái niệm liên quan nữa là Tỷ trọng độ phủ (WTD – Weighted distribution), đo lường mức độ hiệu quả của kênh phân phối dựa trên mức độ bán hàng của điểm bán. Tiếp tục từ câu hỏi trên, giả sử biết thêm số bán của ngành hàng tương ứng tại mỗi cửa hàng như bên dưới, hãy thử tính Tỷ trọng độ phủ của Fuzetea nhé!
                        <p style="text-align: center">(Ấn vào <b>HIỆN BẢNG</b> để xem câu hỏi đầy đủ)</p>
                    </div>
                    <div class="background-full-question" onclick="openFullQuestion()">
                        <p class="centered-text">HIỆN BẢNG</p>
                    </div>
                </div>
                <form method="POST" id="answer-form">
                    <input type="hidden" name="answer" id="answer-input">
                    <input type="hidden" name="track-id" id="track-id" value="{{$track->id}}">
                    <input type="hidden" name="question-id" id="question-id" value="{{$question->id}}">
                    <!-- Lottie Animations for content will be placed here -->
                    <div id="answer1" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content">
                            25
                        </div>
                    </div>
                    <div id="answer2" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content">
                            35
                        </div>
                    </div>
                    <div id="answer3" class="answer" onclick="answer(this, true, true)">
                        <div class="answer-content two-table">
                            45
                        </div>
                    </div>
                    <div id="answer4" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content two-table">
                           55
                        </div>
                    </div>
                    <div id="button-frame-next" class="next"></div>
                </form>
            </div>
        </div>
    </div>

    <div id="full-question" class="modal">
        <!-- Modal content -->
        <div id="full-question-content" class="modal-game-content" style="display: none">
            Ngoài độ phủ, chúng ta còn có 1 khái niệm liên quan nữa là Tỷ trọng độ phủ (WTD – Weighted distribution), đo lường mức độ hiệu quả của kênh phân phối dựa trên mức độ bán hàng của điểm bán. Tiếp tục từ câu hỏi trên, giả sử biết thêm số bán của ngành hàng tương ứng tại mỗi cửa hàng như bên dưới, hãy thử tính Tỷ trọng độ phủ của Fuzetea nhé!
            <p>Gợi ý: chỉ số này có thể tính rất đơn giản bằng cách: lấy số bán của các cửa hàng đã có Fuzetea, chia tổng số bán của toàn bộ cửa hàng trên thị trường</p>
            <table class="table-container">
                <thead>
                <tr>
                    <td>Các cửa hàng có trên thị trường</td>
                    <td>Sản phẩm Fuzetea đã có mặt tại cửa hàng</td>
                    <td>Số bán của tổng ngành hàng tương ứng tại cửa hàng
                        (Trà đóng chai,lon các loại)</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Cửa hàng A</td>
                    <td>&#10004;
                    </td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Cửa hàng B</td>
                    <td>&#10004;
                    </td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Cửa hàng C</td>
                    <td>
                    </td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Cửa hàng D</td>
                    <td>
                    </td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Cửa hàng E</td>
                    <td>&#10004;
                    </td>
                    <td>20</td>
                </tr>
                </tbody>
            </table>
            <b>Câu hỏi</b>: Tỷ trọng độ phủ của FuzeTea trong tình huống này là bao nhiêu %?
        </div>
    </div>

    <div id="hint" class="modal">
        <!-- Modal content -->
        <div id="hint-content" class="modal-game-content">
            <div id="hint-text" class="modal-game-text" style="display: none">
                <p>Hãy cộng tổng số bán của 5 cửa hàng trước (1), ngoài ra, cộng số bán của 3 cửa hàng đã có Fuzetea (2). Tỷ trọng độ phủ = (2):(1)
                </p>
            </div>
        </div>
    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                Tỷ trọng độ phủ = Số bán của các cửa hàng đã có Fuzetea (10+20+20), chia cho tổng số bán của toàn bộ cửa hàng trên thị trường (tổng 110, cho cả 5 cửa hàng)
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="width: 60vw; display: none">
                <p>Đây là một trong những chỉ số vô cùng quan trọng để thấy được hiệu quả của kênh phân phối của chúng ta. Vì không phải 100% điểm bán đều mang lại hiệu quả cao, mà đôi khi còn tốn thêm chi phí, thời gian và nhân lực. Phòng thương mại thường xuyên theo dõi và đo lường để lọc ra những điểm bán có hiệu quả cao, từ đó đẩy mạnh tập trung để bao phủ. Chỉ số này cũng giúp ta có cái nhìn chính xác hơn về tiềm năng thị trường, nhằm đưa ra những kế hoạch phát triển hay mở rộng điểm bán hợp lí.
                </p>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script src="{{ url('assets/js/question.js?v=1.0') }}"></script>
@stop
