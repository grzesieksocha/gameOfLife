$(document).on('click', 'td', function () {
    console.log("clicked");
    $(this).toggleClass("alive")
});