// function hapus(id) {
//     $('.tombol-hapus').on('click', function(e){
//         e.preventDefault();
//     });
//     pesan = Swal.fire({
//         title: 'Hapus Data User?',
//         text: "Data User Akan Dihapus!!!",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Ya, Hapus User!'
//     }).then((result) => {
//         if (result.value) {
//         Swal.fire(
//             'Berhasil!',
//             'Data User Terhapus!!!',
//             'success'
//         )
//         }
//     })
//     if (pesan) {
//         window.location.href = ("user/delete/")+ id;
//     } else {
//         return false;
//     }
// }

// function hapusdata(){
//     Swal.fire({
//         title: 'Hapus Data User?',
//         text: "Data User Akan Dihapus!!!",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Ya, Hapus User!'
//     }).then((result) => {
//         if (result.value) {
//         Swal.fire(
//             'Berhasil!',
//             'Data User Terhapus!!!',
//             'success'
//         )
//         }
//     })
// }

function hapus_surat(id){
    Swal.fire({
        title: 'Hapus Surat Tugas?',
        text: "Surat Tugas Akan Dihapus!!!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
        if (result.value) {
        window.location.href = ("surattugas/hapus_data/")+ id;
        }else{
            return false;
        }
    });
}

function hapus_team(id){
    Swal.fire({
        title: 'Hapus Data Team?',
        text: "Data Team Akan Dihapus!!!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!'
    }).then((result) => {
        if (result.value) {
        window.location.href = ("../hapus_team/")+ id;
        }else{
            return false;
        }
    });
}

function notif(){
    Swal.fire(
        'PERHATIAN!',
        'Input Data Surat Tugas Terlebih Dahulu',
        'warning'
    )
}

