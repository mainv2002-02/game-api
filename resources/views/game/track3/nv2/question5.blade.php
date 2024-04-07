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
                <div class="title">Câu số 4</div>
                <div id="question" class="question">
                    <div class="question-content">
                        <p>Từ việc phân tích thực trạng nguồn cung lao động nội bộ và bên ngoài, bộ phận HR sẽ tư vấn bộ
                            phận đối tác các giải pháp nhân tài phù hợp để đảm bảo nguồn cung lao động phù hợp với nhu cầu nhân lực,
                            phù hợp với chi phí và tạo điều kiện phát triển sự nghiệp bền vững tại CCBV.</p>
                        <p style="text-align: center">(Ấn vào <b>HIỆN BẢNG</b> để xem câu hỏi đầy đủ)</p>
                    </div>
                    <div class="background-full-question" onclick="openFullQuestion()">
                        <p class="centered-text">HIỆN BẢNG</p>
                    </div>
                </div>
                <!-- Lottie Animations for content will be placed here -->
                <div id="answer1" class="answer"  onclick="answer(this, true, true)">
                    <div class="answer-content">
                        Đáp án: 1C 2B 3E 3D 4A
                    </div>
                </div>
                <div id="answer2" class="answer"  onclick="answer(this, false, true)">
                    <div class="answer-content">
                        Đáp án: 1A 2B 3E 3C 4D
                    </div>
                </div>
                <div id="answer3" class="answer"  onclick="answer(this, false, true)">
                    <div class="answer-content">
                        Đáp án: 1C 2B 3E 3A 4D
                    </div>
                </div>
                <div id="answer4" class="answer" onclick="answer(this, false, true)">
                    <div class="answer-content">
                        Đáp án: 1B 2C 3E 3D 4A
                    </div>
                </div>
                <div id="button-frame-next" class="next"></div>
            </div>
        </div>
    </div>

    <div id="full-question" class="modal">
        <!-- Modal content -->
        <div id="full-question-content" class="modal-game-content" style="display: none">
            CCBV đang lên kế hoạch mở rộng hoạt động bằng cách xây dựng một nhà máy mới tại Việt Nam. Nhà máy mới dự kiến sẽ đi vào hoạt động trong vòng 12 tháng tới với công suất sản xuất gấp 2 lần nhà máy hiện tại. Sau khi trao đổi, thống kê và phân tích nguồn nhân lực sẵn có theo 4 kỹ năng cần thiết nhất cho đội Phát triển Hệ thống Phân phối số, dưới đây là kết quả đánh giá theo trạng thái năng lực của 4 nhân viên (Đạt, Chưa đạt và Nghỉ việc).
            <p style="text-align: center">
                <img src="{{url('assets/img/track3/question6/table.png')}}" class="support" alt="support" style="width: 80%"/>
            </p>
            <p><b>Câu hỏi</b>: Hãy sắp xếp các giải pháp nhân sự có khả năng phù hợp để cung cấp nguồn cung nhân lực tương ứng với các kỹ năng :</p>
            <p style="text-align: center">
                <img src="{{url('assets/img/track3/question6/mapping.png')}}" class="support" alt="support" style="width: 70%"/>
            </p>
        </div>
    </div>

    <div id="hint" class="modal">
        <!-- Modal content -->
        <div id="hint-content" class="modal-game-content">
            <div id="hint-text" class="modal-game-text" style="display: none">
                <p>Kỹ năng 1: Đào tạo phát triển nội bộ, nâng cao năng lực nhân viên A hơn nữa</p>
            </div>
        </div>

    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                <p>Đáp án đúng: 1C 2B 3E 3D 4A</p>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                <p>Chính xác
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
                window.location.href = '/home/2';
            })
        });
    </script>
@stop
