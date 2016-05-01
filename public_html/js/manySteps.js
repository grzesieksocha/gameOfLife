$(document).ready(function () {
    $(".startButton").click(function ( event ) {
        event.preventDefault();
        $(".titleBegin").toggleClass("isHidden");
        $(".titlePlay").toggleClass("isHidden");
        var numberOfSteps = $(".numberOfSteps").val();
        var step = 0;
        var interval = setInterval(function() {
            $.ajax({
                url: '../../src/Controllers/nextStep.php',
                type: 'POST',
                dataType: 'html',
                success: function (board) {
                    var boardAdded = $(board);
                    $(".generatedBoard").replaceWith(boardAdded);
                    $(".board").prepend(boardAdded);
                }
            });
            step += 1;
            if (step == numberOfSteps) {
                clearInterval(interval);
                $(".titleBegin").toggleClass("isHidden");
                $(".titlePlay").toggleClass("isHidden");
            }
        }, 300);
    })
});