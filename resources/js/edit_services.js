$(document).ready(function() {
    let url = $('#gotoservice').attr('href');
    console.log(url);
    $('.editbtn').on('click', function() {

        $('#editmodal').modal('show');

        let info = $(this).closest('tr').find("td").map(function() {
            return $(this).text();
        }).get();
        $('#update_id').val(info[0]);
        $('#slug').val(info[1]);
        $('#title').val(info[2]);
        $('#description').val(info[3]);
        $('#image_path').val(info[4]);
        $('#gotoservice').attr('href',url+'/'+info[1]);

    });
    $('#edit_form').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            method: $(this).attr('method'),
            url: '/services/'+$('#update_id').val()+'/edit',
            data: new FormData(this),
            processData: false,
            dataType: 'json',
            contentType: false,
            complete: function(r) {
                var data = r.responseJSON;
                if (data.status == 0) {
                    console.log('error');
                } else {
                    $('#edit_form')[0].reset();
                    $('#editmodal').modal('hide');
                    location.reload();
                    alert(data.msg);
                }
            }
        });
    });
});
