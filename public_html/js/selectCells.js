$(document).on('click', 'td', function () {
    console.log("clicked");
    $(this).toggleClass("alive");
    var coordinates = $(this).data('coordinates');
    $.ajax({
        url: '../../src/Controllers/cellsSelector.php',
        type: 'POST',
        data: {coordinates: coordinates},
        dataType: 'json',
        success: function (result) {
            console.log(result);
        },
        error: function () {   
            console.log('ERROR');
        },
        complete: function () {
            console.log('DONE');
        }
    })
});