$(document).ready(function($) {
    $('#choose-image').click(function() {
        $('#image').click()
    })

    $('#image').change(function() {
        const file = this.files[0];
        if (file){
            let reader = new FileReader();
            reader.onload = function(event){
                $('#remove-image').removeClass('hide')
                $('#choose-image').addClass('hide')
                $('#show-img').css('display', 'block');
                $('#show-img').attr('src', event.target.result);
            }
            reader.readAsDataURL(file);
        }
    })

    $('#remove-image').click(function() {
        $('#image').val('')
        $('#show-img').css('display', 'none');
        $('#show-img').attr('src', '');
        $('#choose-image').removeClass('hide')
        $(this).addClass('hide')
    })
});