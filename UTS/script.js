$(document).ready(function(){
  $('#register').submit(function(event){
      event.preventDefault(); // ini untuk mencegah perilaku default formulir

      // mengambil nilai dari input formulir
      var email = $('#email').val();
      var nama_panjang = $('#nama_panjang').val();
      var nama_panggilan = $('#nama_panggilan').val();
      var nomor = $('#nomor').val();
      var tempat_lahir = $('#tempat_lahir').val();
      var tanggal_lahir = $('#tanggal_lahir').val();
      var asal = $('#asal').val();
      var jenis_kelamin = $('#jenis_kelamin').val();
      var alasan = $('#alasan').val();

      // validasi sederhana, cek apakah ada data yang kosong
      if(email && nama_panjang && nama_panggilan && nomor && tempat_lahir && tanggal_lahir && jenis_kelamin && asal && alasan) {
          // melakukan proses submit form dengan AJAX
          var formData = new FormData(this);

          $.ajax({
              type: 'POST',
              url: 'registrasiForm.php',
              data: formData,
              contentType: false,
              processData: false,
              success: function(response){
                  alert(response); // tampilkan pesan sukses atau error
              },
              error: function(xhr, status, error) {
                  console.error(xhr.responseText); // log pesan error jika terjadi
              }
          });
      } else {
          $('#errorMessage').text("Please fill in all fields"); // akan menampilkan pesan kesalahan seperti disamping jika ada data yang kosong
      }
  });
});
