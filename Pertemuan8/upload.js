// $(document).ready(function() {
//     $('#upload-form').submit(function(e) {
//         e.preventDefault();
    
//         var formData = new FormData(this);
    
//         $.ajax( {
//             type: 'POST',
//             url: 'upload_ajax.php',
//             data: formData,
//             cache: false,
//             contentType: false,
//             processData: false,
//             success: function(response) {
//                 $('#status').html(response);
//             },
//             error: function() {
//                 $('#status').html('Terjadi kesalahan saat mengunggah file.');
//             }
//         });
//     });
// });


// Soal No.4.1.
$(document).ready(function() { 
    $('#file').change(function() { // ni adalah event listener yang menangani perubahan pada input file dengan id 'file
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#upload-form').submit(function(e) { // Ini adalah event listener yang menangani pengiriman form dengan id 'upload-form'. Ketika form di-submit, fungsi ini akan dijalankan. 
        e.preventDefault(); // menghentikan perilaku default dari form

        var formData = new FormData(this); // formdata untuk mengumpulkan data form

        $.ajax( {
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response);
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});