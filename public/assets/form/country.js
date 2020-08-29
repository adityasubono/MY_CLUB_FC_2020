$(document).ready(function() {
    // var a = 0;
    $("#add_country").click(function () {
        var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
        var b = jumlah + 1; // Tambah 1 untuk jumlah form nya
        var continent_id = $('#continent_id').val();

        $("#country_form").append(
            '<div id="data_inventaris_append" class="mt-3 rounded">'
            + '<h5><b>Country:' + b + '</b></h5>'
            + '<div class="form-group row">' +
            '<label for="country" class="col-sm-2 col-lg-3 col-form-label">Name Country</label>\n                        ' +
            '<div class="col-sm-10 col-lg-6">' +

            '<input type="hidden" class="form-control" id="country" name="country[' + b + '][continent_id]" value="'+ continent_id +'">' +

            '<input type="text" class="form-control" id="country" name="country[' + b + '][name]">' +
            '</div><div class="col-sm-10 col-lg-3">' +

            '<button type="button" class="btn btn-warning btn-icon-split float-right"' +
            'id="remove-data-inventaris"><span class="icon text-white">' +
            '<i class="fa fa-minus-circle"></i></span>' +
            '<span class="text text-white"></span></button>' +
            '</div>' +
            '</div>' +
            '</div>');

        $("#jumlah-form").val(b); // Ubah value textbox jumlah-form dengan
        // variabel nextfor
    });
    $(document).on('click', '#remove-data-inventaris', function () {
        $(this).parents('#data_inventaris_append').remove();
    });

    $("#btn-reset-form").click(function(){
        $("#country_form").html(""); // Kita kosongkan isi dari div
        // insert-form
        $("#jumlah-form").val("0"); // Ubah kembali value jumlah form menjadi 1
    });
});


