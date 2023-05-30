        $(document).on('click', '#btn-hapus-tanaman', function(e) {
            e.preventDefault();

            var data = $(this).attr('data-id-tanaman');

            Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = '/tanaman/delete/' + data + ''
                }
            });
        });

$(document).on('click', '#btn-hapus-habitat', function(e) {
e.preventDefault();

var data = $(this).attr('data-id-habitat');

Swal.fire({
     title: 'Apakah kamu yakin?',
    text: "Data yang dihapus tidak dapat dikembalikan!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya, hapus!'
}).then((result) => {
        if (result.isConfirmed) {
        window.location = '/habitat/delete/' + data + ''
        }
    });
});

