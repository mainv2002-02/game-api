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
                <div class="title">Câu số 4</div>
                <div id="question" class="question">
                    <div class="question-content">
                        Vào cuối ngày 20/01/2024, số lượng tồn kho của Coca-Cola lon 320ml Carton còn lại 80 000 thùng. Để đáp ứng  cho đơn hàng 120 000 thùng phát sinh cho ngày 24/01/2024, nhà máy miền Nam phải gấp rút thay đổi kế hoạch sản xuất để tập trung chạy mặt hàng này phục vụ cho nhu cầu.
                        <p>Hãy cho biết những vấn đề cần quan tâm để đưa ra giải pháp cho tình huống trên (chọn nhiều đáp án đúng)</p>
                        <ol>
                            <li>Mở rộng nhà máy để sản xuất cho đơn hàng này</li>
                            <li>Vận chuyển hàng thành phẩm từ các vùng bán hàng khác</li>
                            <li>Đảm bảo tồn kho nguyên vật liệu (hương liệu, lon, film, carton,...) còn đủ để sản xuất cho nhu cầu này</li>
                            <li>Đảm bảo dây chuyền sản xuất đủ công suất để sản xuất cho nhu cầu này</li>
                            <li>Không đáp ứng đơn hàng này</li>
                            <li>Huy động nhân lực (operator, thủ kho,...) để hỗ trợ cho tình huống này</li>
                        </ol>
                    </div>
                </div>
                <form method="POST" id="answer-form">
                    <input type="hidden" name="answer" id="answer-input">
                    <input type="hidden" name="track-id" id="track-id" value="{{$track->id}}">
                    <input type="hidden" name="question-id" id="question-id" value="{{$question->id}}">
                    <!-- Lottie Animations for content will be placed here -->
                    <div id="answer1" class="answer" onclick="answer(this, true, true)">
                        <div class="answer-content">
                            Trừ đáp án số 1 tất cả đáp án đều đúng.
                        </div>
                    </div>
                    <div id="answer2" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content">
                            Trừ đáp án số 5 tất cả đáp án đều đúng.
                        </div>
                    </div>
                    <div id="answer3" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content">
                            Trừ đáp án số 6 tất cả đáp án đều đúng.
                        </div>
                    </div>
                    <div id="answer4" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content">
                            Tất cả đáp án đều đúng.
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
@stop
