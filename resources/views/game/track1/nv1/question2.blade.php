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
                        <div class="button-track-label">TRACK 01</div>
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
                        Tìm Doanh thu Beverage 9 cần đạt của vùng Hà Nội trong năm 2024, biết:
                        <ol>
                          <li>Doanh thu trung bình mỗi UC sản phẩm của 2023: 12,000 VND</li>
                            <li>Mục tiêu tăng trưởng Doanh thu/UC của 2024 so với 2023: 1%</li>
                            <li>Sản lượng đã bán trong năm 2023 là: 471.48 UC</li>
                            <li>Mục tiêu tăng trưởng sản lượng của 2024 so với 2023 là: 5%</li>
                        </ol>
                        -> Doanh thu cần đạt của vùng Hà Nội trong năm 2024 là? (USD)
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer" onclick="answer(this, true, true)">
                    <div class="answer-content">
                        6,000,000
                    </div>
                </div>
                <div id="answer2" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        1,000,000
                    </div>
                </div>
                <div id="answer3" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        10,000,000
                    </div>
                </div>
                <div id="answer4" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        3,000,000
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
                <p>Hãy bắt đầu bằng việc tính mục tiêu tăng trưởng Doanh thu/UC và sản lượng của 2024, sau đó suy ra Doanh thu của Beverage 9.</p>
            </div>
        </div>

    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                <p>Mục tiêu tăng trưởng Doanh thu/UC của 2024 = (Doanh thu trung bình mỗi UC sản phẩm của 2023)*(100+ Mục tiêu tăng trưởng Doanh thu/UC của 2024 so với 2023)% (VND)</p>
                <p>Mục tiêu tăng trưởng sản lượng của 2024 = (Sản lượng đã bán trong năm 2023) * (100+ Mục tiêu tăng trưởng sản lượng của 2024 so với 2023)% (UC)</p>
                <p>Doanh thu cần đạt năm 2024 = (Mục tiêu tăng trưởng Doanh thu/UC của 2024)*(Mục tiêu tăng trưởng sản lượng của 2024) (VND)</p>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                <p>Từ kế hoạch kinh doanh dài hạn, việc lên kế hoạch nhu cầu ngắn hạn là vô cùng quan trọng, cập nhật các xu hướng của thị trường, sử dụng các công cụ phân tích, đo lường các chỉ số bán hàng quá khứ để lập chiến lược cung cầu, đảm bảo đáp ứng nhu cầu của khách hàng một cách hiệu quả nhất. Việc lên kế hoạch nhu cầu cần hết sức cẩn trọng, chi tiết, tỉ mỉ tính toán từ những con số lớn hàng năm cho đến những con số nhỏ nhất hàng ngày để đảm bảo phản ánh đúng nhu cầu thị trường!</p>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script src="{{ url('assets/js/question.js?v=1.0') }}"></script>
    <script>
        $(document).ready(function() {
            $("#button-frame-next").click(function () {
                window.location.href = '/1/track1/3';
            })
        });
    </script>
@stop
