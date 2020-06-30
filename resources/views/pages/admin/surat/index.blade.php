@extends('layouts.main')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 ml-2 text-gray-800">Buat Surat</h1>
    <a href="{{ route('pdfsurat') }}" class="btn-sm btn-primary shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Print PDF
  </a>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mr-4" data-toggle="modal" data-target="#exampleModalLong">
  Buat Surat
</button>

</div>

    <div class="card" >
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No. Surat</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">Jenis Surat</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($mails as $surat)
              <tr>
                <td scope="row">{{ $surat->id }}</td>
                <td>{{ $surat->name }}</td>
                <td>{{ $surat->nik }}</td>
                <td>{{ $surat->jns_surat }}</td>
                <td>
                    <a href="" class="btn-warning btn-sm">
                        {{ $surat->status }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('surat.show', $surat->id) }}">
                        <button class="btn btn-primary"><i class="fas fa-eye fa-sm text-white-50"></i></button>
                    </a>
                    <form action="{{ route('surat.destroy',$surat->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger"><i class="fas fa-trash fa-sm text-white-50"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Buat Surat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('suratwarga.store') }}" method="post">
            @csrf
            <div class="form-group mt-3">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" name="name" id="">
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik" id="">
            </div>
            <div class="form-group">
                <label for="Surat">Jenis Surat</label>
                <select name="jns_surat" id="" class="form-control">
                    <option value="Akta Kelahiran">Akta Kelahiran</option>
                    <option value="Akta Kematian">Akta Kematian</option>
                    <option value="Keterangan Penduduk">Keterangan Penduduk</option>
                    <option value="Migrasi">Migrasi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="keperluan">Keperluan</label>
                <textarea name="keperluan" class="form-control" id="" cols="10" rows="5"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
  </div>
</div>

  @endsection