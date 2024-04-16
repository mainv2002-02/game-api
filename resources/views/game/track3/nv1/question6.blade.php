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
                <div class="title">Câu số 6</div>
                <div id="question" class="question">
                    <div class="question-content">
                        <p>CCBV đang lên kế hoạch mở rộng hoạt động bằng cách xây dựng một nhà máy mới tại Long An, Việt Nam.
                            Nhà máy mới dự kiến sẽ đi vào hoạt động trong vòng 12 tháng tới với công suất sản xuất gấp 2 lần nhà máy hiện tại.
                        </p>
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
                    <div id="answer1" class="answer"  onclick="answer(this, true, true)">
                        <div class="answer-content two-table-long">
                            <table class="table-answer">
                                <tr>
                                    <td>Kỹ năng 1: 0</td>
                                    <td>Kỹ năng 2: 3</td>
                                    <td>Kỹ năng 3: 5</td>
                                </tr>
                                <tr>
                                    <td>Kỹ năng 4: 3</td>
                                    <td>Kỹ năng 5: 4</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="answer2" class="answer"  onclick="answer(this, false, true)">
                        <div class="answer-content two-table-long">
                            <table class="table-answer">
                                <tr>
                                    <td>Kỹ năng 1: 0<td>
                                    <td>Kỹ năng 2: 3</td>
                                    <td>Kỹ năng 3: 5</td>
                                </tr>
                                <tr>
                                    <td>Kỹ năng 4: 3</td>
                                    <td>Kỹ năng 5: 4</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="answer3" class="answer"  onclick="answer(this, false, true)">
                        <div class="answer-content two-table-long">
                            <table class="table-answer">
                                <tr>
                                    <td>Kỹ năng 1: 1</td>
                                    <td>Kỹ năng 2: 3</td>
                                    <td>Kỹ năng 3: 5</td>
                                </tr>
                                <tr>
                                    <td>Kỹ năng 4: 3</td>
                                    <td>Kỹ năng 5: 4</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="answer4" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content two-table-long">
                            <table class="table-answer">
                                <tr>
                                    <td>Kỹ năng 1: 1</td>
                                    <td>Kỹ năng 2: 5</td>
                                    <td>Kỹ năng 3: 5</td>
                                </tr>
                                <tr>
                                    <td>Kỹ năng 4: 3</td>
                                    <td>Kỹ năng 5: 4</td>
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
            <p>CCBV đang lên kế hoạch mở rộng hoạt động bằng cách xây dựng một nhà máy mới tại Long An, Việt Nam.
            Nhà máy mới dự kiến sẽ đi vào hoạt động trong vòng 12 tháng tới với công suất sản xuất gấp 2 lần nhà máy hiện tại.
            Sau khi thống kê và phân tích nguồn nhân lực sẵn có theo 5 kỹ năng cần thiết nhất cho đội Kho vận,
            sau đây là kết quả đánh giá theo trạng thái năng lực của người lao động (Đạt, Chưa đạt và Nghỉ việc).</p>
            <img src="{{url('assets/img/track3/question6/dashboard.png')}}" class="support" alt="support" style="width: 80%"/>
            <p><b>Câu hỏi</b>: Hãy tính tổng số lượng nhân sự cần tuyển dụng thêm cho mỗi kỹ năng:</p>
        </div>
    </div>

    <div id="hint" class="modal">
        <!-- Modal content -->
        <div id="hint-content" class="modal-game-content">
            <div id="hint-text" class="modal-game-text" style="display: none;text-align: center">
                Nhân sự với năng lực chưa đạt có thể thông qua giải pháp đào tạo để nâng cao năng lực phù hợp hơn
            </div>
        </div>
    </div>

    <div id="explain" class="modal">
        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none; text-align: center">
                <table class="table-answer">
                    <tr>
                        <td>Kỹ năng 1: 0</td>
                        <td>Kỹ năng 2: 3</td>
                        <td>Kỹ năng 3: 5</td>
                    </tr>
                    <tr>
                        <td>Kỹ năng 4: 3</td>
                        <td>Kỹ năng 5: 4</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                Đối với các nhân sự với năng lực tương ứng với kỹ năng cần có chưa đạt, bộ phận Nhân sự sẽ cần tư vấn với đối tác bộ phận Chuỗi cung ứng và đội Kho vận để ưu tiên đưa ra các giải pháp đào tạo, nâng cao năng lực phù hợp để giúp nguồn cung lao động nội bộ bền vững trong tương lai, đồng thời giúp tiết kiệm chi phí tuyển dụng mới.
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script src="{{ url('assets/js/question.js?v=1.0') }}"></script>
@stop
