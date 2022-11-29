$(document).ready(function($) {
    $(".table-hover tr").click(function() {
        if ($(this).attr("data-action")) {
            window.document.location = $(this).attr("data-action")
        }
    });

    $('#search').on('input', function(event) {
        $('.table-hover tbody tr').each(function() {
            $(this).removeClass('hide')
            const text = $(this).children('td').text().toLowerCase();
            if (!text.includes(event.target.value.toLowerCase())) {
                $(this).addClass('hide')
            }
        })
    })
});