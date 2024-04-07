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
                <div class="title">Câu số 5</div>
                <div id="question" class="question">
                    <div class="question-content">
                        Tuyến thứ 2 của bạn Nhân viên Trưng bày siêu thị (Merchandiser) Nguyễn Văn A có 8 cửa hàng Minimart Vàng, và 4 cửa hàng Minimart Bạc, và 2 cửa hàng Minimart đồng.
                        <p>Thời gian thực thi trưng bày ở mỗi lần ghé thăm cho 1 cửa hàng Minimart tương ứng là:</p>
                        <dl>
                            <dt>- Vàng: 30 phút</dt>
                            <dt>- Bạc: 15 phút</dt>
                            <dt>- Đồng: 7 phút </dt>
                        </dl>
                        <p>Biết rằng thời gian di chuyển đến mỗi cửa hàng là khoảng 10 phút.</p>
                        <p>Vậy, bạn A sẽ cần bao nhiêu giờ tối thiểu để ghé thăm hết tuyến bán hàng của mình?</p>
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        6,13 giờ
                    </div>
                </div>
                <div id="answer2" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        6,23 giờ
                    </div>
                </div>
                <div id="answer3" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        7,13 giờ
                    </div>
                </div>
                <div id="answer4" class="answer" onclick="answer(this, true, true)">
                    <div class="answer-content">
                        7,23 giờ
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
                <p>Tổng thời gian ghé thăm = (số cửa hàng trong tệp X thời gian ghé thăm 1 cửa hàng tương ứng) + tổng thời gian di chuyển giữa các điểm.
                </p>
            </div>
        </div>
    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                Tổng thời gian ghé thăm = (30 phút x 8 CH vàng) + (15 phút x 4 CH bạc) + (7 phút x 2 CH Đồng) + ( 10 phút di chuyển x 12 CH)
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="width: 60vw; display: none">
                <p>Bộ phận Thương mại luôn cân đối và sắp xếp tuyến đường, số lượng cửa hàng phụ trách cũng như năng suất phù hợp của đội ngũ bán hàng để xây dựng kế hoạch thực thi hiệu quả trên từng ngày!
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
                window.location.href = '/1/track2/6';
            })
        });
    </script>
@stop
