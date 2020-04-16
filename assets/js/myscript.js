// tombol hapus
$('.tombol-hapus').on('click', function (e) {
  // Matikan aksi default(href)
  e.preventDefault();
  
  // Buat tombol hapus ($(this) untuk yang sedang ditekan)
  const href = $(this).attr('href');

  Swal.fire({
    title: 'Apakah anda yakin?',
    text: "Tindakan ini akan menghapus data",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus'
  }).then((result) => {
    //   Setelah itu lakukan ini
    if (result.value) {
      document.location.href = href;
    }
    // Swal.fire(
    //     'Deleted!',
    //     'Your file has been deleted.',
    //     'success'
    //   )
  })
});

// tombol batal
$('.tombol-batal').on('click', function (e) {
  // Matikan aksi default(href)
  e.preventDefault();
  // Buat tombol batal ($(this) untuk yang sedang ditekan)
  const href = $(this).attr('href');

  Swal.fire({
    title: 'Konfirmasi',
    text: "Apakah anda yakin membatalkan pesanan?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#E74A3B',
    cancelButtonColor: '#858796',
    confirmButtonText: 'Batalkan'
  }).then((result) => {
    //   Setelah itu lakukan ini
    if (result.value) {
      document.location.href = href;
    }
    // Swal.fire(
    //     'Deleted!',
    //     'Your file has been deleted.',
    //     'success'
    //   )
  })
});