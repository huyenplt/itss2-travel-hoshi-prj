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
});