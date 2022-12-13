$(document).ready(function(){
    $('.star-rating').click(function(){
        insertVote($('#' + $(this).attr('for')).val())
    });
});

function insertVote (numverStar) {
    $.ajax({
        url: 'vote',
        type: "post",
        datatype: "html",
        headers: {'X-CSRF-TOKEN': $('[name="_token"]').val()},
        data: {
            blog_id: $("#blog_id").val(),
            vote: numverStar
        }
    }).done(function(data){
        alert('Vote thành công')
    }).fail(function(jqXHR, ajaxOptions, thrownError){
        alert('No response from server');
    });
}