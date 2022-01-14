@extends('layout_admin.main')
@section('title', 'Admin - Article')

@section('content')
{{-- <div class="main-content"> --}}
    <section class="section">
        <div class="section-header">
            <h1>Artikel</h1>

            <div class="section-header-breadcrumb">
                <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#modalArtikel" id="buatartikel"> <i class="fas fa-plus"></i> Tambah Artikel</a>
            </div>
        </div>

        {{-- table --}}
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="table-1">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Judul Artikel</th>
                            <th>Gambar</th>
                            <th>Content</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; ?>
                        @foreach ( $artikels as $a)
                        <tr>

                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $a->judul }}</td>
                          <td><img src="{{asset('file/'.$a->image)  }}" width="150" height="100"/></td>
                          <td>{!! $a->konten !!}</td>
                          {{-- <td>{{ $a->published_at }}</td> --}}
                          <td>
                              <a href="javascript:void(0)" class="btn btn-warning" data-toggle="modal" data-id="{{ $a->id }}" id="ubahartikel">Ubah</a>
                              <a href="javascript:void(0)" id="deleteartikel" data-id="{{ $a->id }}" data-toggle="tooltip" class="btn btn-danger">Hapus</a>
                          </td>
                      </tr>
                        @endforeach
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>

{{-- Create Modal Artikels --}}

<!-- Modal -->
<div class="modal fade" id="modalArtikel" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="title">Tambah Artikel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="formartikels" name="formartikels" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
              <input type="hidden" name="id" id="id">
              <label class="form-label" style="font-size: 1rem;">Judul Artikel</label>
                <input type="text" class="form-control" placeholder="Judul Artikel" name="judul_artikel" id="judul_artikel">
            </div>

            <div class="form-group">
                <label for="upload_gambar" class="form-label" style="font-size: 1rem;">Upload Gambar</label>
                <div class="custom-file">
                    <label class="custom-file-label" for="customFile">Choose Image</label>
                    <input type="file" class="custom-file-input" id="customFile" name="image" id="image">
                </div>
            </div>
            <div class="form-group">
              <label for="konten" class="form-label" style="font-size: 1rem;">Isi Artikel</label>
                <input id="konten" type="hidden" name="konten">
                <trix-editor input="konten" name="konten"></trix-editor>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="saveBtn" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
{{-- </div> --}}
<script>
document.addEventListener('trix-file-accept', function(e){
  e.preventDefault();
});
</script>

{{-- <script>
    $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });


    });
            $('#customFile').change(function() {
        var i = $(this).prev('label').clone();
        var file = $('#customFile')[0].files[0].name;
        $(this).prev('label').text(file);
        });
</script> --}}
@endsection
