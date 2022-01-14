<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <link rel="icon" href="{{asset('assets/virtual-reality-glasses.png')}}">
  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  {{-- data table --}}
  <link rel="stylesheet" href="{{ asset('modules/jqvmap/dist/jqvmap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }} ">
  <link rel="stylesheet" href="{{ asset('modules/datatables/datatables.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('modules/chocolat/dist/css/chocolat.css') }} ">

  <!-- Template CSS stila-->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }}">

  {{-- trix editor  --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/trix.css') }}">
  <script type="text/javascript" src="{{ asset('backend/assets/js/trix.js') }}"></script>

  <script src="{{ asset('modules/popper.js') }}"></script>
  <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('modules/sweetalert/sweetalert.min.js') }} "></script>

  <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
          display: none;
        }
        </style>

    </head>
    <body>
        <div id="app">
            <div class="main-wrapper">
                <div class="navbar-bg"></div>
                @include('layout_admin.navbar')

                @include('layout_admin.sidebar')

                <!-- Main Content -->
                <div class="main-content">
                    @yield('content')
                </div>
                <footer class="main-footer">
                    <div class="footer-left">
                        Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://nauval.in/">TMII</a>
                    </div>
                    <div class="footer-right">
                        2.3.0
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

        <!-- General JS Scripts -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        {{-- <script src="{{ asset('backend/assets/js/stisla.js') }}"></script> --}}

        <!-- JS Libraies -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        {{-- Datatables --}}
        <script src="{{ asset('modules/datatables/datatables.min.js') }} "></script>
        <script src="{{ asset('modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }} "></script>
        <script src="{{ asset('modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }} "></script>
        <script src="{{ asset('modules/jquery-ui/jquery-ui.min.js') }} "></script>
        <script src="{{ asset('assets/js/page/modules-datatables.js') }} "></script>

        <script src="{{ asset('modules/chocolat/dist/js/jquery.chocolat.min.js') }} "></script>
        <script src="{{ asset('modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }} "></script>
        <script src="{{ asset('modules/summernote/summernote-bs4.js') }} "></script>

        <script src="{{ asset('modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }} "></script>
        <script src="{{ asset('modules/prism/prism.js') }} "></script>


        <!-- Template JS File -->
        <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
        <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
        {{-- <script src="{{ asset('jsx/footer.js') }}"></script>
        <script src="{{ asset('assets/js/page/index.js') }}"></script> --}}

        <script>
            $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                // Tambah Data Artikel
            $('#buatartikel').click(function () {
                  $('#saveBtn').val("create-product");
                  $('#saveBtn').html("Create Artikel");
                  $('#id').val('');
                  $('#formartikels').trigger("reset");
                  $('#title').html("Tambah Artikel");
                  $('#modalArtikel').modal('show');
              });
              // Edit Data Artikel
              $('body').on('click', '#ubahartikel', function () {
                  $('#formartikels').trigger("reset");
                  let id = $(this).data('id');
                  console.log(id);
                  $.get("{{ url('artikels_edit') }}" + '/' + id, function (data) {
                      $('#title').html("Edit Artikel");
                      $('#saveBtn').val("edit-artikel");
                      $('#saveBtn').html("Edit Data");
                      $('#modalArtikel').modal('show');
                      $('#id').val(data.id);
                      $('#judul_artikel').val(data.judul);
                      $('#konten').val(data.konten);
                      $('#image').val(data.image);
                  })
                  // console.log(data.upload_gambar);
              });
              // Tambah Data Artikel
              $('#saveBtn').click(function (e) {
              e.preventDefault();
                  $(this).html('Sending..');
                  $.ajax({
                      data: new FormData($("#formartikels")[0]),
                      url: "{{url('artikelscreate')}} ",
                      type: "POST",
                      contentType: false,
                      cache: false,
                      processData: false,
                      dataType: 'json',
                      success: function (data) {

                        $('#formartikels').trigger("reset");
                        $('#saveBtn').html('Simpan Data');
                        $('#modalArtikel').modal('hide');
                        $( "#table-1" ).load( "{{url('artikels')}} #table-1" );
                        swal("Success!", "Success Update Data!", "success");
                        location.reload();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                  });
              });
              // Hapus Data Artikel
              $('body').on('click', '#deleteartikel', function () {
               var id = $(this).data("id");
                swal({
                 title: "Data Akan Dihapus?",
                 text: "Anda tidak bisa memulihkannya lagi setelah data dihapus",
                 icon: "warning",
                 buttons: [
                   'Batal',
                   'Hapus Data'
                 ],
                 dangerMode: true,
               }).then(function(isConfirm) {
                 if (isConfirm) {
                    $.ajax({
                         type: "DELETE",
                         url: "{{ url('artikels_hapus') }}"+'/'+id,
                         success: function (data) {
                        //  $("#id_" + id).remove();

                         },
                         error: function (data) {
                             console.log('Error:', data);
                         }
                     });

                   swal({
                     title: 'Berhasil Dihapus!',
                     text: 'Data Artikel Berhasil Dihapus',
                     icon: 'success'
                   });
                  location.reload();
                  //  table.draw();
                  //  window.location = window.location;
                 } else {
                   swal("Gagal Dihapus", "Data Artikel Masih Tersimpan", "error");
                 }
               });
              });
                //   Tambah Data Wisata
              $('#buatwisata').click(function () {
                  $('#saveBtn').val("create-product");
                  $('#saveBtn').html("Create Wisata");
                  $('#id').val('');
                  $('#formwisata').trigger("reset");
                  $('#title').html("Tambah Wisata");
                  $('#modalWisata').modal('show');
              });
              // Edit Data Wisata
              $('body').on('click', '#ubahwisata', function () {
                  $('#formwisata').trigger("reset");
                  let id = $(this).data('id');
                  console.log(id);
                  $.get("{{ url('wisata_edit') }}" + '/' + id, function (data) {
                      $('#title').html("Edit Wisata");
                      $('#saveBtn').val("edit-wisata");
                      $('#saveBtn').html("Edit Data");
                      $('#modalWisata').modal('show');
                      $('#id').val(data.id);
                      $('#nama_tempat').val(data.nama_tempat);
                      $('#image').val(data.image);
                      $('#harga_tiket').val(data.harga_tiket);
                      $('#jam_buka').val(data.jam_buka);
                      $('#konten').val(data.konten);
                  })
                  // console.log(data.upload_gambar);
              });
              // Tambah Data Wisata
              $('#saveBtn').click(function (e) {
              e.preventDefault();
                  $(this).html('Sending..');
                  $.ajax({
                      data: new FormData($("#formwisata")[0]),
                      url: "{{url('wisatacreate')}} ",
                      type: "POST",
                      contentType: false,
                      cache: false,
                      processData: false,
                      dataType: 'json',
                      success: function (data) {

                        $('#formwisata').trigger("reset");
                        $('#saveBtn').html('Simpan Data');
                        $('#modalWisata').modal('hide');
                        $( "#table-1" ).load( "{{url('wisata')}} #table-1" );
                        swal("Success!", "Success Update Data!", "success");
                        location.reload();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                  });
              });
                //   Hapus Data Wisata
              $('body').on('click', '#hapusdata', function () {
               var id = $(this).data("id");
                swal({
                 title: "Data Akan Dihapus?",
                 text: "Anda tidak bisa memulihkannya lagi setelah data dihapus",
                 icon: "warning",
                 buttons: [
                   'Batal',
                   'Hapus Data'
                 ],
                 dangerMode: true,
               }).then(function(isConfirm) {
                 if (isConfirm) {
                    $.ajax({
                         type: "DELETE",
                         url: "{{ url('wisata_hapus') }}"+'/'+id,
                         success: function (data) {
                        //  $("#id_" + id).remove();

                         },
                         error: function (data) {
                             console.log('Error:', data);
                         }
                     });

                   swal({
                     title: 'Berhasil Dihapus!',
                     text: 'Data Artikel Berhasil Dihapus',
                     icon: 'success'
                   });
                  location.reload();
                  //  table.draw();
                  //  window.location = window.location;
                 } else {
                   swal("Gagal Dihapus", "Data Artikel Masih Tersimpan", "error");
                 }
               });
              });
                // Tambah Data virtual
              $('#buatvirtual').click(function () {
                  $('#saveBtn').val("create-product");
                  $('#saveBtn').html("Create Virtual");
                  $('#id').val('');
                  $('#virtualform').trigger("reset");
                  $('#title').html("Tambah Virtual Tour");
                  $('#modalVirtual').modal('show');
              });
              // Edit Data Virtual
              $('body').on('click', '#ubahvirtual', function () {
                  $('#virtualform').trigger("reset");
                  let id = $(this).data('id');
                  console.log(id);
                  $.get("{{ url('virtual_edit') }}" + '/' + id, function (data) {
                      $('#title').html("Edit Virtual");
                      $('#saveBtn').val("edit-virtual");
                      $('#saveBtn').html("Edit Data");
                      $('#modalVirtual').modal('show');
                      $('#id').val(data.id);
                      $('#nama').val(data.nama);
                      $('#image').val(data.image);
                      $('#link').val(data.link);
                  })
                  // console.log(data.upload_gambar);
              });
              // Tambah Data Virtual
              $('#saveBtn').click(function (e) {
              e.preventDefault();
                  $(this).html('Sending..');
                  $.ajax({
                      data: new FormData($("#virtualform")[0]),
                      url: "{{url('virtualcreate')}} ",
                      type: "POST",
                      contentType: false,
                      cache: false,
                      processData: false,
                      dataType: 'json',
                      success: function (data) {

                        $('#virtualform').trigger("reset");
                        $('#saveBtn').html('Simpan Data');
                        $('#modalVirtual').modal('hide');
                        $( "#table-1" ).load( "{{url('virtual')}} #table-1" );
                        swal("Success!", "Success Update Data!", "success");
                        location.reload();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                  });
              });
            //   Hapus Data Virtual
              $('body').on('click', '#hapusvirtual', function () {
               var id = $(this).data("id");
                swal({
                 title: "Data Akan Dihapus?",
                 text: "Anda tidak bisa memulihkannya lagi setelah data dihapus",
                 icon: "warning",
                 buttons: [
                   'Batal',
                   'Hapus Data'
                 ],
                 dangerMode: true,
               }).then(function(isConfirm) {
                 if (isConfirm) {
                    $.ajax({
                         type: "DELETE",
                         url: "{{ url('virtual_hapus') }}"+'/'+id,
                         success: function (data) {
                        //  $("#id_" + id).remove();

                         },
                         error: function (data) {
                             console.log('Error:', data);
                         }
                     });

                   swal({
                     title: 'Berhasil Dihapus!',
                     text: 'Data Artikel Berhasil Dihapus',
                     icon: 'success'
                   });
                  location.reload();
                  //  table.draw();
                  //  window.location = window.location;
                 } else {
                   swal("Gagal Dihapus", "Data Artikel Masih Tersimpan", "error");
                 }
               });
              });

            //   Hapus Data Testimoni
              $('body').on('click', '#deletetestimoni', function () {
               var id = $(this).data("id");
                swal({
                 title: "Data Akan Dihapus?",
                 text: "Anda tidak bisa memulihkannya lagi setelah data dihapus",
                 icon: "warning",
                 buttons: [
                   'Batal',
                   'Hapus Data'
                 ],
                 dangerMode: true,
               }).then(function(isConfirm) {
                 if (isConfirm) {
                    $.ajax({
                         type: "DELETE",
                         url: "{{ url('testimoni_hapus') }}"+'/'+id,
                         success: function (data) {
                        //  $("#id_" + id).remove();

                         },
                         error: function (data) {
                             console.log('Error:', data);
                         }
                     });

                   swal({
                     title: 'Berhasil Dihapus!',
                     text: 'Data Artikel Berhasil Dihapus',
                     icon: 'success'
                   });
                  location.reload();
                  //  table.draw();
                  //  window.location = window.location;
                 } else {
                   swal("Gagal Dihapus", "Data Artikel Masih Tersimpan", "error");
                 }
               });
              });
          });
          $('#customFile').change(function() {
          var i = $(this).prev('label').clone();
          var file = $('#customFile')[0].files[0].name;
          $(this).prev('label').text(file);
            });
        </script>

</body>
</html>
