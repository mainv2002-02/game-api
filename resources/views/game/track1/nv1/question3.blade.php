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
                <div class="title">Câu số 3</div>
                <div id="question" class="question">
                    <div class="question-content">
                        Với 6,000,000 USD đã tính phía trên sẽ được tiếp tục lên kế hoạch theo quý và tính toán kỹ từng SKU. Sau đó, bộ phận Kế hoạch Cung Ứng sẽ tính nguyên vật liệu cần để sản xuất đáp ứng được nhu cầu của thị trường. Hãy nhìn vào ví dụ nhỏ dưới đây và điền vào ô xanh lá để hiểu một cách cơ bản nhất về công việc của Phòng Kế hoạch.
                        <p style="text-align: center">
                            <img src="{{url('assets/img/track1/question3/dashboard.png')}}" class="support" alt="support" style="width: 70%"/>
                        </p>
                    </div>
                </div>
                <form method="POST" id="answer-form">
                    <input type="hidden" name="answer" id="answer-input">
                    <input type="hidden" name="track-id" id="track-id" value="{{$track->id}}">
                    <input type="hidden" name="question-id" id="question-id" value="{{$question->id}}">
                    <!-- Lottie Animations for content will be placed here -->
                    <div id="answer1" class="answer" onclick="answer(this, true, true)">
                        <div class="answer-content" >
                            2
                        </div>
                    </div>
                    <div id="answer2" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content">
                            2.6
                        </div>
                    </div>
                    <div id="answer3" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content">
                            1.7
                        </div>
                    </div>
                    <div id="answer4" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content">
                            3
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
                <p>Từ Doanh thu của Sprite CAN 320ml, bạn có thể tính được số lon CAN 320ml, từ đó quy ra dung tích ml, l và cuối cùng là UC
                </p>
            </div>
        </div>

    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none">
                <p>Số lon CAN 320ml dự kiến: 350,000 / 10,000 (lon)
                    Dung tích của lượng CAN trên: 350,000/10,000*320/1000 (L)  (UC)
                </p>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                <p>Từ kế hoạch kinh doanh, bộ phận sản xuất sẽ tiến hành lên kế hoạch chi tiết kế hoạch sản xuất, trong đó bao gồm việc cần dùng bao nhiêu nguyên vật liệu để đáp ứng nhu cầu thị trường.

                </p>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script src="{{ url('assets/js/question.js?v=1.0') }}"></script>
@stop
