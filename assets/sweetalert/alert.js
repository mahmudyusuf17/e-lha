function hapus(id) {
    $('.tombol-hapus').on('click', function(e){
        e.preventDefault();
    });
    pesan = Swal.fire({
        title: 'Hapus Data User?',
        text: "Data User Akan Dihapus!!!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus User!'
    }).then((result) => {
        if (result.value) {
        Swal.fire(
            'Berhasil!',
            'Data User Terhapus!!!',
            'success'
        )
        }
    })
    if (pesan) {
        window.location.href = ("user/delete/")+ id;
    } else {
        return true;
    }
}

function hapusdata(){
    Swal.fire({
        title: 'Hapus Data User?',
        text: "Data User Akan Dihapus!!!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus User!'
    }).then((result) => {
        if (result.value) {
        Swal.fire(
            'Berhasil!',
            'Data User Terhapus!!!',
            'success'
        )
        }
    })
}

