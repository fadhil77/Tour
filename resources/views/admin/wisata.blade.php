@extends('layout_admin.main')
@section('title', 'Admin - Wisata')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Daftar Wisata</h1>

        <div class="section-header-breadcrumb">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalWisata" id="buatwisata"><i class="fas fa-plus"></i> Tambah Wisata</a>
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
                    <tr>
                        <th>No</th>
                        <th>Tempat Wisata</th>
                        <th>Gambar</th>
                        <th>Harga Tiket</th>
                        <th>Jam Buka</th>
                        <th>Content</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    @foreach ( $wisata as $w)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $w->nama_tempat }}</td>
                        <td><img src="{{asset('file/'.$w->image)  }}" width="150" height="100"/></td>
                        <td>{{ $w->harga_tiket }}</td>
                        <td>{{ $w->jam_buka }}</td>
                        <td>{!! $w->konten !!}</td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-warning" data-toggle="modal" data-target="#modalWisata" data-id="{{ $w->id }}" id="ubahwisata">Ubah</a>
                            <a href="javascript:void(0)" class="btn btn-danger" id="hapusdata" data-id="{{ $w->id }}" data-toggle="tooltip">Hapus</a>
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

{{-- modal --}}
<div class="modal fade" id="modalWisata" tabindex="-1" role="dialog" aria-labelledby="title"aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="title">Tambah Wisata</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="formwisata" name="formwisata" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="hidden" name="id" id="id">
              <label class="form-label" style="font-size: 1rem;">Nama Tempat</label>
                <input type="text" class="form-control" placeholder="Nama Tempat" name="nama_tempat" id="nama_tempat">
            </div>

            <div class="form-group">
                <label for="upload_gambar" class="form-label" style="font-size: 1rem;">Upload Gambar</label>
                <div class="custom-file">
                    <label class="custom-file-label" for="customFile">Choose Image</label>
                    <input type="file" class="custom-file-input" id="customFile" name="image" id="image">
                </div>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" id="id">
                <label class="form-label" style="font-size: 1rem;">Harga Tiket</label>
                  <input type="text" class="form-control" placeholder="Harga Tiket" name="harga_tiket" id="harga_tiket">
            </div>
            <div class="form-group">
                <input type="hidden" name="id" id="id">
                <label class="form-label" style="font-size: 1rem;">Jam Buka</label>
                  <input type="text" class="form-control" placeholder="Jam Buka" name="jam_buka" id="jam_buka">
            </div>
            <div class="form-group">
              <label for="konten" class="form-label" style="font-size: 1rem;">Konten</label>
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

  <script>
    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    });
    </script>
@endsection
