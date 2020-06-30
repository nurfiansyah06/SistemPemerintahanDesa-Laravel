@extends('layouts.main')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 ml-2 text-gray-800">Tambah Migrasi Penduduk</h1>
    <a href="" class="btn-sm btn-primary shadow-sm mr-4">
      <i class="fas fa-plus fa-sm text-white-50"></i> Kembali
  </a>
  </div>

<div class="card ml-2 " style="width: 600px;font-size:15px">
<table class="table table-borderless">
    <thead>
    </thead>
    <tbody>
        <form action="{{ route('migrasi.store') }}" method="post">
            @csrf
      <tr>
        <td>Nama</td>
        <td>
            <input type="text" class="form-control" name="name" >
        </td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>
            <input type="text" class="form-control" name="nik">
        </td>
      </tr>
      <tr>
        <td>NO KK</td>
        <td>
            <input type="text" class="form-control" name="no_kk">
        </td>
      </tr>
      <tr>
        <td>Tanggal Pindah</td>
        <td>
            <input type="date" class="form-control" name="tgl_pindah">
        </td>
      </tr>
      <tr>
        <td>Alamat Asli</td>
        <td>
            <textarea type="text" class="form-control" name="alamat_asli"></textarea>
        </td>
      </tr>
      <tr>
        <td>Alamat Pindah</td>
        <td>
            <textarea type="text" class="form-control" name="alamat_pindah"></textarea>
        </td>
      </tr>
      <tr>
        <td>Status Migrasi</td>
        <td>
            <select class="form-control" name="status" id="">
              <option value="Tetap">Tetap</option>
              <option value="Migrasi">Migrasi</option>
            </select>
        </td>
      </tr>
    </tbody>
  </table>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
  @endsection