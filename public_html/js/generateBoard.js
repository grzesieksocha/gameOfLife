$(document).ready(function () {
    $(".generateButton").click(function ( event ) {
        event.preventDefault();
        $(".boardSizeForm").toggleClass("isHidden");
        $(".boardContainer").toggleClass("isHidden");

        var BoardHeight = $(".height").val();
        var BoardWidth = $(".width").val();

        $.ajax({
            url: '../../src/Controllers/generateBoard.php',
            type: 'POST',
            data: {BoardHeight: BoardHeight, BoardWidth: BoardWidth},
            dataType: 'html',
            success: function (generatedBoard) {
                var boardToAdd = $(generatedBoard);
                $(".board").prepend(boardToAdd);
            }
        });
    })
});