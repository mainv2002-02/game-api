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
                <div class="title">Câu số 2</div>
                <div id="question" class="question">
                    <div class="question-content">
                        Đề bài: Giả sử tệp khách hàng NKA OFF có 2 khách hàng là Công ty A và Công ty B
                        <p>Theo kế hoạch đề ra từ đầu tháng (Tháng 1/2023), doanh thu gộp (GSR) mà sales cam kết đặt được là 50 tỷ VND với mức phân bổ như ở bảng bên</p>
                        <p style="text-align: center">(Ấn vào <b>HIỆN BẢNG</b> để xem câu hỏi đầy đủ)</p>
                    </div>
                    <div class="background-full-question" onclick="openFullQuestion()">
                        <p class="centered-text">HIỆN BẢNG</p>
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer"  onclick="answer(this, false, true)">
                    <div class="answer-content">
                        A
                    </div>
                </div>
                <div id="answer2" class="answer"  onclick="answer(this, true, true)">
                    <div class="answer-content">
                        B
                    </div>
                </div>
                <div id="answer3" class="answer"  onclick="answer(this, false, true)">
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
            Đề bài: Giả sử tệp khách hàng NKA OFF có 2 khách hàng là Công ty A và Công ty B
            <p>Theo kế hoạch đề ra từ đầu tháng (Tháng 1/2023), doanh thu gộp (GSR) mà sales cam kết đặt được là 50 tỷ VND với mức phân bổ như ở bảng bên</p>
            <p style="text-align: center">(Ấn vào <b>HIỆN BẢNG</b> để xem câu hỏi đầy đủ)</p>
            <p style="text-align: center">
                <img src="{{url('assets/img/track3/question1/dashboard.png')}}" class="support" alt="support" style="width: 70%"/>
            </p>
            <b>Câu hỏi</b>: Trong trường hợp này, bộ phận Tài chính cần có hành động gì?
            <p>A. Không cần hành động vì công ty đã đạt mục tiêu đặt ra rồi và %NSR chỉ giảm ít, không đáng kể</p>
            <p>B. Thường xuyên theo dõi tiến độ bán hàng, đánh giá hiệu quả chiến lược bán hàng và tư vấn team sales để hỗ trợ phòng Bán hàng theo sát kế hoạch DFR dự kiến của công ty A và công ty B.</p>
            <p>C. Đặt giới hạn về volume đơn hàng của công ty A và khuyến khích nân viên bán hàng đẩy đơn của công ty B để kiểm soát %DFR</p>
            <p>D. Tất cả các hành động trên.</p>
        </div>
    </div>

    <div id="hint" class="modal">
        <!-- Modal content -->
        <div id="hint-content" class="modal-game-content">
            <div id="hint-text" class="modal-game-text" style="display: none">
                <p>Chưa chính xác
                </p>
            </div>
        </div>

    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                B. Thường xuyên theo dõi tiến độ bán hàng, đánh giá hiệu quả chiến lược bán hàng và tư vấn team sales để hỗ trợ phòng Bán hàng theo sát kế hoạch DFR dự kiến của công ty A và công ty B
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                <p>Một trong những nhiệm vụ chính của phòng Tài chính là "hỗ trợ bán hàng". Là đối tác của phòng Thương mại, phòng Tài chính sẽ đưa ra đánh giá, phân tích về tính hiệu quả và tính khả thi của các chương trình bán hàng dựa trên thông tin thực tế và dữ liệu lịch sử. Bộ phận Tài chính sẽ làm việc trực tiếp với phòng Thương mại để đưa ra chiến lược bán hàng hiệu quả nhất, tối ưu hóa lợi nhuận cho công ty.
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
                window.location.href = '/1/track3/3';
            })
        });
    </script>
@stop
