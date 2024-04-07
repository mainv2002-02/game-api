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
                <div class="title">Câu số 2</div>
                <div id="question" class="question">
                    <div class="question-content">
                        <p style="text-align: center">(Ấn vào <b>HIỆN BẢNG</b> để xem câu hỏi đầy đủ)</p>
                    </div>
                    <div class="background-full-question" onclick="openFullQuestion()">
                        <p class="centered-text">HIỆN BẢNG</p>
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer" onclick="answer(this, true, true)">
                    <div class="answer-content two-long">
                        <ul>
                            <li>
                                Siêu Thị A và B đi chung xe 14 Pallets
                            </li>
                            <li>
                                Siêu Thị C giao bằng xe 2 Pallets, tách giao 4 lần.
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="answer2" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content two-long">
                        <ul>
                            <li>
                                Siêu Thị A và B đi chung xe 14 Pallets
                            </li>
                            <li>
                                Siêu Thị C giao bằng xe 14 Pallets, giao một lần.
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="answer3" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content two-long">
                        <ul>
                            <li>
                                Siêu Thị A và C đi chung xe 14 Pallets
                            </li>
                            <li>
                                Siêu Thị B giao bằng xe 14 Pallets, giao một lần.
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="answer4" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content two-long">
                        <ul>
                            <li>
                                3 Siêu Thị giao chung một lần xe 24 Pallets
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="button-frame-next" class="next"></div>
            </div>
        </div>
    </div>

    <div id="full-question" class="modal">
        <!-- Modal content -->
        <div id="full-question-content" class="modal-game-content" style="display: none">
            Ta biết tổng Pallets hàng cần giao (từ đáp án của câu trên), và biết thêm chi tiết về khu vực giao hàng, cũng như thời gian cần nhận hàng của 3 đơn như bên dưới:
            <table class="table-container">
                <thead>
                <tr>
                    <td>TÊN KHÁCH HÀNG</td>
                    <td>TỔNG PALLETS CẦN GIAO</td>
                    <td>ĐỊA CHỈ</td>
                    <td>THỜI GIAN NHẬN HÀNG</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Siêu Thị A</td>
                    <td>7
                    </td>
                    <td>QUẬN 02
                    </td>
                    <td>20:30 – 24:00
                    </td>
                </tr>
                <tr>
                    <td>Siêu Thị B
                    </td>
                    <td>7
                    </td>
                    <td>QUẬN 02
                    </td>
                    <td>20:30 – 24:00
                    </td>
                </tr>
                <tr>
                    <td>Siêu Thị C
                    </td>
                    <td>8
                    </td>
                    <td>QUẬN 01
                    </td>
                    <td>16:00 – 20:00
                    </td>
                </tr>
                </tbody>
            </table>
            Ta có 1 nhà cung cấp dịch vụ vận tải tên là Phương Nam, họ đưa ra Đơn giá (VND/Pallet) tương ứng với Khung xe vận chuyển để giao tới Quận 1 & Quận 2 như trong bảng dưới:
            <table class="table-container">
                <thead>
                <tr>
                    <td>
                        Khung xe vận chuyển
                    </td>
                    <td>
                        Đơn giá của nhà vận tải Phương Nam (VNĐ/Pallet)
                    </td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2 Pallets

                    </td>
                    <td>94.000
                    </td>
                </tr>
                <tr>
                    <td>14 Pallets
                    </td>
                    <td>80.000
                    </td>
                </tr>
                <tr>
                    <td>24 Pallets
                    </td>
                    <td>70.000
                    </td>
                </tr>
                </tbody>
            </table>
            <b>Câu hỏi</b>: Trong điều kiện không có giới hạn về số lượng xe và tải trọng, hãy <b>LỰA CHỌN PHƯƠNG ÁN GHÉP XE</b> sao cho tối ưu tiền cước vận chuyển mà vẫn đáp ứng các điều kiện giao hàng của khách hàng.

        </div>
    </div>

    <div id="hint" class="modal">
        <!-- Modal content -->
        <div id="hint-content" class="modal-game-content">
            <div id="hint-text" class="modal-game-text" style="display: none">
                <p>Hãy đọc kĩ lại các gợi ý đề bài đã đưa ra ban đầu nhé:
                </p>
                <ul>
                    <li>
                        Giao hàng khung giờ 16:00 – 20:00: chỉ có xe 2 Pallets mới có thể di chuyển giao hàng
                    </li>
                    <li>
                        Có thể ghép xe đối với các Khách hàng trong cùng khu vực để tối ưu chi phí.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                <ul>
                    <li>Do siêu thị A&B cùng ở khu vực Quận 2, và số lượng Pallets cần giao ở mỗi nơi là 7 Pallets, vừa đủ để giao chung bằng 1 xe 14 Pallets – đây là phương án tối ưu nhất.
                    </li>
                    <li>Siêu thị C nhận hàng trong khung giờ cấm tải, nên chỉ có thể chọn giao bằng khung xe nhỏ là 2 Pallets (đồng nghĩa với việc ta cần tách đơn làm 4 xe để giao đủ 8 Pallets)
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="width: 60vw; display: none">
                <p>Bộ phận Logistics có vai trò tối ưu hóa việc giao hàng, thông qua việc ghép xe và lựa chọn trọng tải xe sao cho phù hợp và tối ưu nhất có thể, nhưng vẫn đáp ứng được nhu cầu khách hàng.
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
                window.location.href = '/1/track2/3';
            })
        });
    </script>
@stop
