$(document).ready(function () {
    $(".generateButton").click(function ( event ) {
        event.preventDefault();
        $(".boardSizeForm").toggleClass("isHidden");
        $(".boardContainer").toggleClass("isHidden");

        var height = $(".height").val();
        var width = $(".width").val();
        var board = "<table>";

        $.ajax({
            url: '../../src/Controllers/generateBoard.php',
            type: 'POST',
            data: {height: height, width: width},
            dataType: 'html',
            success: function (board) {
                var boardAdded = $(board);
                $(".board").prepend(boardAdded);
                console.log(result);
            },
            error: function () {
                console.log('ERROR');
            },
            complete: function () {
                console.log('DONE');
            }
        });
    })
});