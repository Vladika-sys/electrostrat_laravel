$(document).ready(function(){

    $('.edit_orders').on('click',function()
    {
        $('#edit_order').modal('show');
        let info = $(this).closest('tr').find("td").map(function() {
            return $(this).text();
        }).get();

        $('#order_id').val(info[0]);
        $('#status').val(info[6]);

    });

    $('#order_form').on('submit',function(e)
    {
        e.preventDefault();
        $.ajax({
            method: $(this).attr('method'),
            url: '/orders/'+$('#order_id').val()+'/edit',
            data: new FormData(this),
            processData: false,
            dataType: 'json',
            contentType: false,
            complete: function(r) {
                var data = r.responseJSON;
                if (data.status == 0) {
                    console.log('error');
                } else {
                    $('#order_form')[0].reset();
                    $('#edit_order').modal('hide');
                    location.reload();
                   alert(data.msg);
                }
            }
        });
    });
});
