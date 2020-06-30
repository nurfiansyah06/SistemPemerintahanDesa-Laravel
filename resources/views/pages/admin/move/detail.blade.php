@extends('layouts.main')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 ml-2 text-gray-800">Edit Migrasi Penduduk</h1>
    <a href="" class="btn-sm btn-primary shadow-sm mr-4">
      <i class="fas fa-plus fa-sm text-white-50"></i> Kembali
  </a>
  </div>

<div class="card ml-2 " style="width: 600px;font-size:15px">
<table class="table table-borderless">
    <thead>
    </thead>
    <tbody>
        <form action="{{ route('migrasi.update', $move->id) }}" method="post">
            @csrf
            @method('PUT')
      <tr>
        <td>No Migrasi</td>
        <td>
            <input type="text" class="form-control" value="{{ $move->no_migrasi }}"name="name" >
        </td>
      </tr>
        <td>Nama</td>
        <td>
            <input type="text" class="form-control" value="{{ $move->name }}"name="name" >
        </td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>
            <input type="text" class="form-control" value="{{ $move->nik }}"name="nik">
        </td>
      </tr>
      <tr>
        <td>NO KK</td>
        <td>
            <input type="text" class="form-control" value="{{ $move->no_kk }}"name="no_kk">
        </td>
      </tr>
      <tr>
        <td>Tanggal Pindah</td>
        <td>
            <input type="date" class="form-control" value="{{ $move->tgl_pindah }}"name="tgl_pindah">
        </td>
      </tr>
      <tr>
        <td>Alamat Asli</td>
        <td>
            <textarea type="text" class="form-control" value="{{ $move->alamat_asli }}"name="alamat_asli"></textarea>
        </td>
      </tr>
      <tr>
        <td>Alamat Pindah</td>
        <td>
            <textarea type="text" class="form-control" value="{{ $move->alamat_pindah }}"name="alamat_pindah"></textarea>
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
  <button type="submit" class="btn btn-primary">Ubah</button>
</form>
</div>
  @endsection