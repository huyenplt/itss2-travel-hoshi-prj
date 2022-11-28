$(document).ready(function($) {
    $(".table-hover tr").click(function() {
        if ($(this).attr("data-action")) {
            window.document.location = $(this).attr("data-action")
        }
    });
});