@extends('layout_admin.main')
@section('title', 'Admin - Testimoni')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Testimoni</h1>
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
                          <th>Nama</th>
                          <th>Rating</th>
                          <th>Komentar</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    @foreach ( $feedbacks as $fd)
                    <tr>

                      <td class="text-center">{{ $loop->iteration }}</td>
                      <td class="text-center">{{ $fd->nama }}</td>
                      <td class="text-center">{{ $fd->rating }}</td>
                      <td>{{ $fd->komentar }}</td>
                      <td>
                          <a href="javascript:void(0)" id="deletetestimoni" data-id="{{ $fd->id }}" data-toggle="tooltip" class="btn btn-danger " style="text-align: center; border: 1px solid">Hapus</a>
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
@endsection
