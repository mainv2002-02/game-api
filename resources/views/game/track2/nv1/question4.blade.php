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
                <div class="title">Câu số 4</div>
                <div id="question" class="question">
                    <div class="question-content">
                        Bạn Nhân viên bán hàng A phụ trách 50 cửa hàng, trong đó:
                        <ul>
                            <li>25 cửa hàng (loại A) cần ghé thăm 4 lần/4 tuần</li>
                            <li>10 cửa hàng (loại B) cần ghé thăm 2 lần/4 tuần, bắt đầu từ tuần 1 trong tháng</li>
                            <li>8 cửa hàng (loại C) cần ghé thăm 2 lần/tuần, bắt đầu từ tuần thứ 2 trong tháng</li>
                            <li>5 cửa hàng (loại D) cần ghé thăm 1 lần/4 tuần</li>
                        </ul>
                        <p>Biết tuần 1 bạn cần viếng thăm: 25+10 + 5 = 40 cửa hàng.</p>
                        <b>Hãy tiếp tục tính số cửa hàng bạn SNhân viên bán hàng cần viếng thăm trong tuần 2-tuần 5.</b>
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer" onclick="answer(this, true, false)">
                    <div class="answer-content two-table">
                        <table class="table-answer">
                            <tr>
                                <td>Tuần 2: 33</td>
                                <td>Tuần 3: 35</td>
                            </tr>
                            <tr>
                                <td>Tuần 4: 33</td>
                                <td>Tuần 5: 40</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="answer2" class="answer" onclick="answer(this, false, false)">
                    <div class="answer-content two-table">
                        <table class="table-answer">
                            <tr>
                                <td>Tuần 2: 33</td>
                                <td>Tuần 3: 35</td>

                            </tr>
                            <tr>
                                <td>Tuần 4: 35</td>
                                <td>Tuần 5: 40</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="answer3" class="answer" onclick="answer(this, false, false)">
                    <div class="answer-content two-table">
                        <table class="table-answer">
                            <tr>
                                <td>Tuần 2: 33</td>
                                <td>Tuần 3: 35</td>

                            </tr>
                            <tr>
                                <td>Tuần 4: 33</td>
                                <td>Tuần 5: 35</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="answer4" class="answer" onclick="answer(this, false, false)">
                    <div class="answer-content two-table">
                        <table class="table-answer">
                            <tr>
                                <td>Tuần 2: 33</td>
                                <td>Tuần 4: 40</td>
                            </tr>
                            <tr>
                                <td>Tuần 3: 35</td>
                                <td>Tuần 5: 40</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="button-frame-next" class="next"></div>
            </div>
        </div>
    </div>

    <div id="full-question" class="modal">
        <!-- Modal content -->
        <div id="full-question-content" class="modal-game-content" style="display: none">
            Có 03 khách hàng Trọng điểm (Key Account Off) đặt hàng vào ngày 07/05/2024, và có nhu cầu nhận hàng vào ngày 08/04/2024 với các thông tin chi tiết như bên dưới:
            <table class="table-container">
                <thead>
                <tr>
                    <td>TÊN KHÁCH HÀNG</td>
                    <td>TÊN SẢN PHẨM ĐẶT</td>
                    <td>SỐ LƯỢNG ĐẶT (THÙNG)</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td rowspan="2">Siêu Thị A</td>
                    <td>Thùng 24 lon Green Drink 320ml
                    </td>
                    <td>520
                    </td>
                </tr>
                <tr>
                    <td>Thùng 6 chai White Drink 1 Lít
                    </td>
                    <td>420
                    </td>
                </tr>
                <tr>
                    <td>Siêu Thị B
                    </td>
                    <td>Thùng 24 lon Green Drink 320ml
                    </td>
                    <td>910
                    </td>
                </tr>
                <tr>
                    <td>Siêu Thị C
                    </td>
                    <td>Thùng 6 chai White Drink 1Lít
                    </td>
                    <td>1040
                    </td>
                </tr>
                </tbody>
            </table>
            Bảng quy cách đóng gói
            <table class="table-container">
                <thead>
                <tr>
                    <td>
                        TÊN SẢN PHẨM
                    </td>
                    <td>
                        QUY CÁCH ĐÓNG GÓI
                    </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Thùng 24 lon Green Drink 320ml.
                    </td>
                    <td>130 thùng/pallet
                    </td>
                </tr>
                <tr>
                    <td>Thùng 6 chai White Drink 1Lít
                    </td>
                    <td>140 thùng/pallet
                    </td>
                </tr>
                </tbody>
            </table>
            <b>Câu hỏi</b>: Tính số lượng Pallet hàng cần giao đến mỗi khách hàng
        </div>
    </div>

    <div id="hint" class="modal">
        <!-- Modal content -->
        <div id="hint-content" class="modal-game-content">
            <div id="hint-text" class="modal-game-text" style="display: none">
                <p>Số Pallets = Số thùng khách hàng đặt : Quy cách đóng gói</p>
            </div>
        </div>
    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                Mỗi tuần, bạn Nhân viên bán hàng đều phải bắt đầu với ít nhất 25 cửa hàng loại A, do cần ghé đều đặn 4 lần/4 tuần. Từ con số 25 này:
                <ul>
                    <li>Ở tuần 1, cộng thêm 10 cửa hàng loại B, và 5 cửa hàng loại D.</li>
                    <li>Ở tuần 2, cộng thêm 8 cửa hàng loại C.</li>
                    <li>Ở tuần 3, cộng thêm 10 cửa hàng loại B</li>
                    <li>Ở tuần 4, lặp lại giống tuần 2, vì có 8 cửa hàng loại C cần ghé thăm lại</li>
                    <li>Ở tuần 5, lặp lại giống tuần 1.</li>
                </ul>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="width: 60vw; display: none">
                <p>Đội ngũ bán hàng dựa trên tần suất cần viếng thăm của các cửa hàng để theo dõi và lên kế hoạch viếng thăm phù hợp từng tuần.
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
                window.location.href = '/1/track2/5';
            })
        });
    </script>
@stop
