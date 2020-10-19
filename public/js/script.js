$(function () {
  $('.tampilModalUbah').on('click',function () {
    $('#judulModalLabel').html("Ubah Data Mahasiswa");
    $('.modal-footer button[type=submit]').html('Ubah');
    $('.modal-body form').attr('action','http://localhost/praktikum/Unpas/PHP/MVC/public/mahasiswa/ubah');

    const id=$(this).data('id');
    // console.log(id);
    $.ajax({
      url:'http://localhost/praktikum/Unpas/PHP/MVC/public/mahasiswa/getubah',
      data:{id:id},
      method:'post',
      dataType:'json',
      success:function (data) {
        // console.log(data);
        $('#nama').val(data.nama);
        $('#nrp').val(data.nrp);
        $('#email').val(data.email);
        $('#jurusan').val(data.jurusan);
        $('#id').val(data.id);

      }
    })
  })
  $('.tombolTambahData').on('click',function () {
    $('#judulModalLabel').html("Tambah Data Mahasiswa");
    $('.modal-footer button[type=submit]').html('Tambah');

  })
 });