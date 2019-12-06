// nama variabel= carikan nama clas flas-data yang datanya flasdata
const flashData = $('.flash-data').data('flashdata');
if(flashData){
    Swal.fire({
        title: 'Selamat',
        text: 'Data Berhasil ' + flashData,
        type: 'success'
    });
}

// tombol hapus
$('.tombol-hapus').on('click',function(e){
  //mematikan href
    e.preventDefault();
    //akhir mati href
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin ?',
        text: "data akan dihapus",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus  data!'
      }).then((result) => {
        if (result.value) {
          document.location.href = href;
        }
      })
})