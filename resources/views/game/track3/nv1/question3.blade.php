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
                        Nhằm đảm bảo sự an toàn và bảo mật thông tin trong thành phố, phòng tránh Phishing Email là một trong những việc quan trọng của mỗi cư dân chúng ta. Hãy tập nhận biết đâu là Phising Email với các hình ảnh sau đây nhé:
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
                    <div id="answer1" class="answer"  onclick="answer(this, false, true)">
                        <div class="answer-content">
                            Đáp án: 1 2 3
                        </div>
                    </div>
                    <div id="answer2" class="answer"  onclick="answer(this, false, true)">
                        <div class="answer-content">
                            Đáp án: 1 2 4
                        </div>
                    </div>
                    <div id="answer3" class="answer"  onclick="answer(this, false, true)">
                        <div class="answer-content">
                            Đáp án: 1 3 4
                        </div>
                    </div>
                    <div id="answer4" class="answer" onclick="answer(this, true, true)">
                        <div class="answer-content">
                            Cả 4 đáp án
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
            Nhằm đảm bảo sự an toàn và bảo mật thông tin trong thành phố, phòng tránh Phishing Email là một trong những việc quan trọng của mỗi cư dân chúng ta. Hãy tập nhận biết đâu là Phising Email với các hình ảnh sau đây nhé:
            <p style="text-align: center">
                <img src="{{url('assets/img/track3/question5/Picture1.png')}}" class="support" alt="support" style="width: 70%"/>
                <img src="{{url('assets/img/track3/question5/Picture2.png')}}" class="support" alt="support" style="width: 70%"/>
                <img src="{{url('assets/img/track3/question5/Picture3.png')}}" class="support" alt="support" style="width: 70%"/>
            </p>
            <b>Câu hỏi</b>: Chọn đáp án đúng cách nhận biết phishing email:
            <p>1. Địa chỉ người gửi: Email được gửi từ một địa chỉ người gửi giả mao/ hoàn toàn xa lạ.</p>
            <p>2. Tiêu đề email: Mang tính mời chào hoặc đề cập việc cấp bách.</p>
            <p>3. Lời chào: Thiếu tên người nhận trong lời chào của Email.</p>
            <p>4. Nội dung email: Không liên quan đến cá nhân/ công việc</p>
        </div>
    </div>

    <div id="hint" class="modal">
        <!-- Modal content -->
        <div id="hint-content" class="modal-game-content">
            <div id="hint-text" class="modal-game-text" style="display: none">
                <p>Cách nhận biết phishing email
                </p>
            </div>
        </div>

    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                Cả 4 đáp án
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                <p>Phishing email là những email có chứa liên kết (link) hoặc tệp tin đính kèm “Độc Hại” được gửi trực tiếp đến người dùng cuối.</p>
                <p>Mục đích: lừa đảo người dung Click vào liên kết (link)/ mở tập tin đính kèm nhằm đánh cắp thông tin tài khoản hoặc xâm nhập chiếm quyền điều khiển thiết bị/ đánh cắp dữ liệu nhạy cảm tổ chức.</p>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script src="{{ url('assets/js/question.js?v=1.0') }}"></script>
@stop

