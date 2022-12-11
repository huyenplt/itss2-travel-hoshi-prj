$(window).on('hashchange', function() {
    if (window.location.hash) {
        var page = window.location.hash.replace('#', '');
        if (page == Number.NaN || page <= 0) {
            return false;
        } else{
            getData(page);
        }
    }
});

$(document).ready(function(){
    $("emoji-picker").on( "emoji-click", function(event) {
        $("#content").text($("#content").text() + event.detail.unicode)
    });

    $(".d-content").click(function() {
        $("#content").focus();
    })

    $(".emoji i").click(function() {
        $("emoji-picker").toggleClass("d-none")
    })

    $(".images i").click(function() {
        $("#image").click()
    })

    // show image when choose image
    $('#image').on('input', function() {
        const file = this.files[0];
        if (file){
            let reader = new FileReader();
            reader.onload = function(event){
                $('.d-image').html('<img src="" id="show-img"/>')
                $('#show-img').attr('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    })

    // before submit form create blog
    $('form').submit(function() {
        $("textarea").val($("#content").text())
    });

    $('.alert').alert()

    $(document).on('click', '.pagination a',function(event) {
        event.preventDefault();

        $('li').removeClass('active');
        $(this).parent('li').addClass('active');

        var page=$(this).attr('href').split('page=')[1];

        getData(page);
    });

    $('.user-place-search').submit(function(event) {
        event.preventDefault();

        const key = $('.user-place-search-key').val();

        if(key.length) {
            $('.pagination').addClass('d-none')
        }
        else $('.pagination').removeClass('d-none')

        handleSearch(key);
    });

});

function getData(page){
    $.ajax(
    {
        url: '?page=' + page,
        type: "get",
        datatype: "html"
    }).done(function(data){
        $("#tag_container").empty().html(data);
        location.hash = page;
    }).fail(function(jqXHR, ajaxOptions, thrownError){
          alert('No response from server');
    });
}

function handleSearch(key) {
    $.ajax(
        {
            url: '?query=' + key,
            type: "get",
            datatype: "html"
        }).done(function(data){
            $("#tag_container").empty().html(data);
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
}
