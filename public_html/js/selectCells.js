$(document).on('click', 'td', function () {
    $(this).toggleClass("alive");
    var coordinates = $(this).data('coordinates');
    $.ajax({
        url: '../../src/Controllers/cellsSelector.php',
        type: 'POST',
        data: {coordinates: coordinates},
        dataType: 'json',
        success: function (result) {
            console.log(result);
        }
    })
});