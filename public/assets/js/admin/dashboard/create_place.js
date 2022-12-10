$(document).ready(function($) {
    $('#choose-image').click(function() {
        $('#image').click()
    })

    let files;
    $('#image').change(function() {
        files = this.files;
        const file = this.files[0];
        showImage(file)

        $('#remove-image').removeClass('hide')
        $('#choose-image').addClass('hide')
        $('#load-images').removeClass('hide')
        $('#show-img').css('display', 'block');
    })

    $('#remove-image').click(function() {
        $('#image').val('')
        $('#show-img').css('display', 'none');
        $('#show-img').attr('src', '');
        $('#choose-image').removeClass('hide')
        $('#load-images').addClass('hide')
        $(this).addClass('hide')
    })

    let index = 0;
    $('.next-btn').click(function() {
        if (index == files.length - 1) {
            index = 0;
        } else {
            index++;
        }
        const file = files[index]

        showImage(file)
    })

    $('.prev-btn').click(function() {
        if (index == 0) {
            index = files.length - 1;
        } else {
            index--;
        }
        const file = files[index]

        showImage(file)
    })
});

function showImage (file) {
    if (file){
        let reader = new FileReader();
        reader.onload = function(event){
            $('#show-img').attr('src', event.target.result);
        }
        reader.readAsDataURL(file);
    }
}