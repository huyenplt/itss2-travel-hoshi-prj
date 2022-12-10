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

    loadImage()
});

function loadImage() {
    const images = $('.thumbnails img');
    const mainImage = $('#place-image');
    let index = 0;
    
    function toMainImage(src) {
        mainImage.attr('src', src);
    }

    $('.next-btn').click(function() {
        if (index == images.length - 1) {
            index = 0;
        } else {
            index++;
        }
        toMainImage($(images[index]).attr('src'));
    })

    $('.prev-btn').click(function() {
        if (index == 0) {
            index = images.length - 1;
        } else {
            index--;
        }
        toMainImage($(images[index]).attr('src'));
    })
}