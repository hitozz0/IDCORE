$(function () {
  $('.tampilModalTambah').on('click', function () {
    $('#judulModal').html('Tambah Item Baru');
    $('.modal-footer button[type=submit]').html('Tambah');
  });

    // const Kode_Barang = $(this).data('kode_barang');
    $('.tampilModalUbah').on('click', function () {
      $('#judulModal').html('Edit Item');
      $('.modal-footer button[type=submit]').html('Edit');
      $('.modal-body form').attr('action','http://localhost/idcore/public/home/ubah');
      $('#Kode_Barang').attr('type','hidden');
      const id = $(this).data('id');

      $.ajax({
        url: "http://localhost/idcore/public/home/getubah",
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function (data) {
          $('#Nama_Barang').val(data.Nama_Barang);
          $('#Stok').val(data.Stok);
          $('#Kode_Barang').val(data.Kode_Barang);
          $('#Harga').val(data.Harga);
          $('#Kategori').val(data.Kategori);
          $('#desk').val(data.desk);
          $('#img').val(data.img);
        }
      });

    });
  })

