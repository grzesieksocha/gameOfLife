$(document).ready(function () {
    $(".nextStep").click(function ( event ) {
        event.preventDefault();

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

    })
});