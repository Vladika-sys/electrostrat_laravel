$(document).ready(function(){
    $('.feedback_edit').on('click',function()
    {
        $('#edit_feedback').modal('show');
        let info = $(this).closest('tr').find("td").map(function() {
            return $(this).text();
        }).get();

        $('#feedback_id').val(info[0]);
        $('#feedback_status').val(info[4]);

    });

    $('#feedback_form').on('submit',function(e)
    {
        e.preventDefault();
        $.ajax({
            method: $(this).attr('method'),
            url: '/feedback/'+$('#feedback_id').val()+'/edit',
            data: new FormData(this),
            processData: false,
            dataType: 'json',
            contentType: false,
            complete: function(r) {
                var data = r.responseJSON;
                if (data.status == 0) {
                    console.log('error');
                } else {
                    $('#feedback_form')[0].reset();
                    $('#edit_feedback').modal('hide');
                //     location.reload();
                //    alert(data.msg);
                }
            }
        });
    });
});
