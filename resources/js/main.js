$(function(){

$("#main_form").on('submit',function(event)
{
    event.preventDefault();

    $.ajax({

        url: $(this).attr('action'),
        method: $(this).attr('method'),
        data: new FormData(this),
        processData:false,
        dataType:'json',
        contentType:false,
        beforeSend:function(){
            $(document).find('span.error-text').text('');
        },
        complete: function(r){
            var data = r.responseJSON;
            if(data.status == 0 )
            {
                $.each(data.error,function(prefix,val){
                    $('span.' + prefix + '_error').text(val[0]);
                });
            }else{
                $('#main_form')[0].reset();
                location.reload();
                $('#editmodal').modal('hide');
                $('#succes_response').text(data.msg);
            }
        }

    });

});


});
