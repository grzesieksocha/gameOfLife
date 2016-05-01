$(document).ready(function () {
    $(".generateButton").click(function ( event ) {
        event.preventDefault();
        $(".boardSizeForm").toggleClass("isHidden");
        $(".boardContainer").toggleClass("isHidden");

        var height = $(".height").val();
        var width = $(".width").val();
        var board = "<table>";

        for (var i = 0; i < height; i++) {
            board += "<tr>";
            for (var j = 0; j < width; j++) {
                board += "<td data-coordinates='" + i + "," + j + "'></td>";
            }
            board += "</tr>";
        }
        board += "</table>";

        var boardAdded = $(board);
        $(".board").prepend(boardAdded);
    })
});