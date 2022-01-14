@extends('layout_admin.main')
@section('title', 'Admin - Virtual Tour')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Virtual Tour</h1>

        <div class="section-header-breadcrumb">
            <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#modalVirtual" id="buatvirtual"> <i class="fas fa-plus"></i> Tambah Virtual</a>
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
                        <th>Nama Tempat</th>
                        <th>Gambar</th>
                        <th>Link</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    @foreach ( $virtual as $v)
                    <tr>

                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $v->nama }}</td>
                      <td><img src="{{asset('file/'.$v->image)  }}" width="150" height="100"/></td>
                      <td>{{ $v->link }}</td>
                      <td>
                          <a href="javascript:void(0)" class="btn btn-warning" data-toggle="modal" data-id="{{ $v->id }}" id="ubahvirtual">Ubah</a>
                          <a href="javascript:void(0)" id="hapusvirtual" data-id="{{ $v->id }}" data-toggle="tooltip" class="btn btn-danger">Hapus</a>
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
<div class="modal fade" id="modalVirtual" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="title">Tambah Virtual Tour</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="virtualform" name="virtualform" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group ">
                    <input type="hidden" name="id" id="id">
                    <label class="form-label" style="font-size: 1rem;">Nama Tempat</label>
                    <input type="text" class="form-control" placeholder="Nama Tempat" name="nama" id="nama">
                </div>
                <div class="form-group ">
                    <label for="upload_gambar" class="form-label" style="font-size: 1rem;">Upload Gambar</label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="customFile">Choose Image</label>
                        <input type="file" class="custom-file-input" id="customFile" name="image" id="image">
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="link" class="form-label" style="font-size: 1rem;">Link</label>
                    <input type="text" class="form-control" name="link" id="link">
                  </div>
                </form>
            </div>
                <div class="modal-footer ">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="saveBtn" class="btn btn-primary">Save changes</button>
                </div>
      </div>
    </div>
</div>
@endsection
