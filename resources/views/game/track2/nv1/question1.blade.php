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
                <div class="title">Câu số 1</div>
                <div id="question" class="question">
                    <div class="question-content">
                        Có 03 khách hàng Trọng điểm (Key Account Off) đặt hàng vào ngày 07/05/2024, và có nhu cầu nhận hàng vào ngày 08/04/2024 với các thông tin chi tiết như bên dưới:
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
                        <div class="answer-content two-table">
                            <table class="table-answer">
                                <tr>
                                    <td>Siêu thị A: 7</td>
                                    <td>Siêu thị B: 1</td>
                                </tr>
                                <tr>
                                    <td>Siêu thị C: 6</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="answer2" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content two-table">
                            <table class="table-answer">
                                <tr>
                                    <td>Siêu thị A: 5</td>
                                    <td>Siêu thị B: 1</td>
                                </tr>
                                <tr>
                                    <td>Siêu thị C: 8</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="answer3" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content two-table">
                            <table class="table-answer">
                                <tr>
                                    <td>Siêu thị A: 5</td>
                                    <td>Siêu thị B: 3</td>
                                </tr>
                                <tr>
                                    <td>Siêu thị C: 8</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="answer4" class="answer" onclick="answer(this, true, true)">
                        <div class="answer-content two-table">
                            <table class="table-answer">
                                <tr>
                                    <td>Siêu thị A: 7</td>
                                    <td>Siêu thị B: 3</td>
                                </tr>
                                <tr>
                                    <td>Siêu thị C: 8</td>
                                    <td></td>
                                </tr>
                            </table>
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
                <ul>
                    <li>Siêu thị A = (520:130) + (420:140)</li>
                    <li>Siêu thị B = 910:130</li>
                    <li>Siêu thị C = 1040:140</li>
                </ul>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="width: 60vw; display: none">
                <p>Khi giao hàng từ nhà máy, chúng ta thường dùng đơn vị Pallet, mỗi nhóm sản phẩm có thể sẽ có quy cách đóng gói (số thùng trên 1 pallet) khác nhau từ đó cân nhắc trọng tải xe vận tải phù hợp.
                </p>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script src="{{ url('assets/js/question.js?v=1.0') }}"></script>
@stop
