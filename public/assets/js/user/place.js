$(document).ready(function() {
    $(document).on('click', '.favorite-action__btn', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');

        const curCount = parseInt($('.favorite__count').text());

        if ($(this)[0].classList.contains("liked")) {
            url = url.replace('/like/', '/dislike/')
            handleLikePlace(url);
            $(this).removeClass('liked');
            $('.favorite__count').text(curCount - 1);
        }
        else {
            $(this).addClass('liked');
            url = url.replace('/dislike/', '/like/')
            handleLikePlace(url);
            $('.favorite__count').text(curCount + 1);
        }
    });

});

function handleLikePlace(url) {
    $.ajax({
        url: url,
        type: "get",
        datatype: "html",
    }).fail(function (jqXHR, ajaxOptions, thrownError) {
        alert("No response from server");
    });
}
