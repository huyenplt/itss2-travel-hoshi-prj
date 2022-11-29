$(document).ready(function($) {
    // show place when load page
    $('.place-info').load($($('.table-hover tr')[1]).attr('data-url'))

    // load content place info when click table place
    $('.table-hover tr').click(function() {
        const url = $(this).attr('data-url');

        if (url) {
            $('.place-info').load(url)
        }
    })

    $('#search').on('input', function(event) {
        if (event.target.value !== '') {
            $('.icon-search').addClass('hide')
        } else {
            $('.icon-search').removeClass('hide')
        }
    })
});