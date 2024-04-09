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
                <div class="title">Câu số 5</div>
                <div id="question" class="question">
                    <div class="question-content">
                        <p><b>Câu hỏi</b>: Vào tháng Tư năm 2021, Coca-Cola đã ra quyết định chuyển Sprite từ chai màu xanh lá cây
                            sang chai nhựa PET trong để chai Sprite dễ dàng được tại chế và có thêm vòng đời mới sau khi sử dụng.
                            Trước khi sản phẩm được phê duyệt đi vào sản xuất và bán hàng, bao bì của sản phẩm sẽ cần thông qua bộ phận Pháp Lý
                            để kiểm tra theo tiêu chuẩn nhãn hàng hóa Nghị định 43/2017/NĐ-CP</p>
                        <img src="{{url('assets/img/track3/question5/PictureSprite.png')}}" class="support" alt="support" style="width: 80%"/>
                        <p>Những đáp án nào sau đây là đúng:</p>
                        <p>A. Tên sản phẩm - Thành phần - HD sử dụng, HD bảo quản - NSX & HSD</p>
                        <p>B. Định lượng - Xuất xứ & Thương nhân chịu trách nhiệm</p>
                        <p>C. Thông tin về nhãn hiệu - Thông tin về logo - Thông tin về hình ảnh </p>
                        <p>D. Thông tin về slogan - Thông tin về môi trường</p>
                    </div>
                </div>
                <form method="POST" id="answer-form">
                    <input type="hidden" name="answer" id="answer-input">
                    <input type="hidden" name="track-id" id="track-id" value="{{$track->id}}">
                    <input type="hidden" name="question-id" id="question-id" value="{{$question->id}}">
                    <!-- Lottie Animations for content will be placed here -->
                    <div id="answer1" class="answer"  onclick="answer(this, true, true)">
                        <div class="answer-content">
                            Đáp án: A B
                        </div>
                    </div>
                    <div id="answer2" class="answer"  onclick="answer(this, false, true)">
                        <div class="answer-content">
                            Đáp án: A C
                        </div>
                    </div>
                    <div id="answer3" class="answer"  onclick="answer(this, false, true)">
                        <div class="answer-content">
                            Đáp án: A C D
                        </div>
                    </div>
                    <div id="answer4" class="answer" onclick="answer(this, false, true)">
                        <div class="answer-content">
                            Tất cả đáp án trên.
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
            <div id="hint-text" class="modal-game-text" style="display: none;text-align: center">
                <img src="{{url('assets/img/track3/question5/PictureHint.png')}}" class="support" alt="support" style="width: 70%"/>
            </div>
        </div>

    </div>

    <div id="explain" class="modal">

        <!-- Modal content -->
        <div id="explain-content" class="modal-game-content">
            <div id="explain-text" class="modal-game-text" style="display: none; text-align: center">
                <img src="{{url('assets/img/track3/question5/PictureAnswer.png')}}" class="support" alt="support" style="width: 70%"/>
            </div>
        </div>

    </div>
    <div id="ducrut" class="modal">
        <!-- Modal content -->
        <div id="ducrut-content" class="modal-game-content">
            <div id="ducrut-text" class="modal-game-text" style="display: none">
                <p>Theo Nghị định 43/2017/NĐ-CP nhãn hàng hóa, các sản phẩm lưu thông trên thị trường Việt Nam phải có
                    đầy đủ các thông tin bắt buộc theo quy định. Nếu sản phẩm không có đầy đủ các thông tin bắt buộc,
                    thì doanh nghiệp sẽ bị coi là vi phạm quy định về nhãn hàng hóa và bị xử lý theo quy định của pháp luật.
                    Trong đó, bộ phận Pháp lý tại CCBV sẽ là phụ trách đảm bảo các thông tin đúng nhất và mới nhất cập
                    nhật trên bao bì sản phẩm.</p>
            </div>
        </div>

    </div>
@stop

@section('scripts')
    <script src="{{ url('assets/js/question.js?v=1.0') }}"></script>
@stop
