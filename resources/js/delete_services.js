$(document).ready(function() {
    $('.deletebtn').on('click', function() {

        $('#deletemodal').modal('show');

        let info = $(this).closest('tr').find("td").map(function() {
            return $(this).text();
        }).get();

        $('#delete_id').val(info[0]);


    });
    $('#delete_form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            method: $(this).attr('method'),
            url:'/services/'+$('#delete_id').val()+'/delete',
            data: new FormData(this),
            processData: false,
            dataType: 'json',
            contentType: false,
            complete: function(r) {
                var data = r.responseJSON;
                if (data.status == 0) {
                    alert("S-a produs o eroare!");
                } else {
                    $('#delete_form')[0].reset();
                    $('#deletemodal').modal('hide');
                     location.reload();
                     alert(data.msg);
                }
            }
        });
    });
});
