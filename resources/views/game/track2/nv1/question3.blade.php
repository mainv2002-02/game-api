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
                <div class="title">Câu số 3</div>
                <div id="question" class="question">
                    <div class="question-content">
                        Như vậy, với Phương án giao hàng tối ưu của câu trên, ta có các chi tiết vận tải như sau:
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
                        <div class="answer-content two-table-long">
                            <table class="table-answer">
                                <tr>
                                    <td>Siêu thị A và B: 1.120.000 </td>
                                    <td>Siêu thị C: 752.000 </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Toàn bộ chi phí: 1.872.000 </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="answer2" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content two-table-long">
                            <table class="table-answer">
                                <tr>
                                    <td>Siêu thị A và C: 1.120.000 </td>
                                    <td>Siêu thị B: 752.000 </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Toàn bộ chi phí: 1.872.000 </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="answer3" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content two-table-long">
                            <table class="table-answer">
                                <tr>
                                    <td>Siêu thị A: 1.120.000 </td>
                                    <td>Siêu thị B và C: 752.000 </td>
                                </tr>
                                <tr>
                                    <td colspan="2">Toàn bộ chi phí: 1.872.000 </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="answer4" class="answer" onclick="answer(this, true, true)">
                        <div class="answer-content two-table-long">
                            <table class="table-answer">
                                <tr>
                                    <td>Siêu thị A, B và: 752.000 </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Toàn bộ chi phí: 2.256.000 </td>
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
            Như vậy, với Phương án giao hàng tối ưu của câu trên, ta có các chi tiết vận tải như sau:
                <table class="table-container">
                    <thead>
                    <tr>
                        <td>
                            TÊN KHÁCH HÀNG
                        </td>
                        <td>
                            TỔNG PALLET CẦN GIAO
                        </td>
                        <td>
                            PHƯƠNG ÁN XE VẬN TẢI TỐI ƯU
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Siêu Thị A</td>
                        <td>7
                        </td>
                        <td rowspan="2">Giao chung 1 xe khung 14 Pallets
                        </td>
                    </tr>
                    <tr>
                        <td>Siêu Thị B
                        </td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>Siêu Thị C
                        </td>
                        <td>8
                        </td>
                        <td>Giao bằng xe khung 2 Pallets, tách giao 4 lần
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table class="table-container">
                    <thead>
                    <tr>
                        <td>
                            NVT
                        </td>
                        <td>
                            Đơn giá (/Pallet)
                        </td>
                        <td>
                            Khung xe vận chuyển
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Phương Nam

                        </td>
                        <td>94.000
                        </td>
                        <td>2 Pallets
                        </td>
                    </tr>
                    <tr>
                        <td>Phương Nam
                        </td>
                        <td>80.000
                        </td>
                        <td>14 Pallets
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            Biết Chi phí giao hàng = Số pallet cần giao x Đơn giá vận chuyển. Hãy tính toàn bộ chi phí giao hàng đến 3 siêu thị.
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
