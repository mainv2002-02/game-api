$(document).ready(function() {
    // Initialize all your Lottie animations here
    loadLottieAnimation('button-track', '../../../../assets/img/track2/breakcrum.json');
    loadLottieAnimation('question', '../../../../assets/img/track2/border.json');
    loadLottieAnimation('answer1', '../../../../assets/img/track2/answer.json');
    loadLottieAnimation('answer2', '../../../../assets/img/track2/answer.json');
    loadLottieAnimation('answer3', '../../../../assets/img/track2/answer.json');
    loadLottieAnimation('answer4', '../../../../assets/img/track2/answer.json');
    loadLottieAnimation('button-frame-next', '../../../../assets/img/track2/next.json');

    $(window).click(function(event) {
        if ($(event.target).is("svg")) {
            // destroyLottieAnimation('full-question')
            $("#full-question").fadeOut();
        }
        if ($(event.target).is("#hint")) {
            destroyLottieAnimation('hint-content')
            $(".modal").hide();
        }
        if ($(event.target).is("#explain")) {
            destroyLottieAnimation('explain-content')
            $("#explain").fadeOut(50, function () {
                $("#ducrut").fadeIn("slow", function() {
                    loadLottieAnimation('ducrut-content', '../../../../assets/img/track2/ducrut.json');
                    $("#ducrut-text").fadeIn(3000);
                })
            });
        }
        if ($(event.target).is("#ducrut")) {
            destroyLottieAnimation('ducrut-content')
            $("#ducrut").hide();
        }
    });
});

var isCorrect = false;
var count = 0;
var fullQuestion = false;

function openFullQuestion() {
    if (fullQuestion) {
        $("#full-question").fadeIn("slow");
    } else {
        loadLottieAnimation('full-question', '../../../../assets/img/track2/modal.json');
        $("#full-question").fadeIn("slow", function () {
            $("#full-question-content").fadeIn(2500);
        });
    }
}

function answer(element, correct, isExplain = false) {
    if (correct) {
        correctAnswer(element);
    } else {
        wrongAnswer(element, isExplain);
    }
    $.post(
        '/games/answer',
        {
            'track_id' : $('#track-id').val(),
            'question_id' : $('#question-id').val(),
            'correct': Number(correct),
            'count' : count
        },
        function(){}
    );
}

function wrongAnswer(element, isHint = false) {
    if (count > 1 || isCorrect) {
        return;
    }

    if (count === 0) {
        if (isHint) {
            $("#hint").fadeIn("slow", function () {
                loadLottieAnimation('hint-content', '../../../../assets/img/track2/hint.json');
                $("#hint-text").fadeIn(2500);
            });
        }
    }

    if (count > 0) {
        // if (isExplain) {
            $("#explain").fadeIn("slow", function() {
                loadLottieAnimation('explain-content', '{../../../../assets/img/track2/giaithich.json');
                $("#explain-text").fadeIn(2500);
            })
        // } else {
        //     $("#ducrut").fadeIn("slow", function() {
        //         loadLottieAnimation('ducrut-content', '../../../../assets/img/track2/ducrut.json');
        //         $("#ducrut-text").fadeIn(3000);
        //     })
        // }
    }
    count++;
    $(element).addClass('fail');
}

function correctAnswer(element) {
    if (count > 1 || isCorrect) {
        return;
    }
    $(element).addClass('correct');
    $("#ducrut").fadeIn("slow", function() {
        loadLottieAnimation('ducrut-content', '../../../../assets/img/track2/ducrut.json');
        $("#ducrut-text").fadeIn(3000);
    })
    isCorrect = true;
}

$(document).ready(function() {
    $("#button-frame-next").click(function () {
        $('#answer-form').submit();
    })
});
