
let link = document.querySelectorAll('.nav-link');
let tables = document.querySelectorAll('.tabel');


link.forEach(element => {
    element.addEventListener('click',function()
    {
        tables.forEach(table =>
            {
                table.classList.add('d-none');
            });
            link.forEach(l =>
                {
                    l.classList.remove('active');
                });
                element.classList.add('active');
        let id = $(this).attr('href');
        $(id).removeClass('d-none');

    });
});
