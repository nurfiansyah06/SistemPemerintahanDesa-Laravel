@extends('layouts.main')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 ml-2 text-gray-800">Detail Penduduk</h1>
    
  <a href="{{ route('penduduk.edit', $user->nik) }}" class="btn btn-primary shadow-sm mr-5">
    <i class="fas fa-plus fa-sm text-white-50"></i> Edit
</a>

<form action="{{ route('penduduk.destroy', $user->nik) }}" method="POST" class="d-inline">
  @csrf
  @method('delete')
  <button class="btn btn-danger">
      <i class="fa fa-trash mr-2"></i>Hapus
  </button>
</form>

<a href="{{ route('penduduk.index') }}" class="btn btn-primary shadow-sm ml-5">
  <i class="fas fa-plus fa-sm text-white-50"></i> Kembali
</a>
  </div>

<div class="card ml-2 " style="width: 700px;font-size:15px">
<table class="table table-borderless">
    <thead>
    </thead>
    <tbody>
      <tr>
        <td>Nama</td>
        <td>{{ $user->name }}</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>{{ $user->email }}</td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>{{ $user->nik }}</td>
      </tr>
      <tr>				
        <td>NO KK</td>
        <td>{{$user->fams->no_kk}}</td>
      </tr>
      <tr>
        <td>No. Akta Kelahiran</td>
        <td>{{ $user->no_aktalahir }}</td>
      </tr>
      <tr>
        <td>No. Akta Kematian</td>
        <td>{{ $user->no_aktakematian }}</td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>{{ $user->tgl_lahir }}</td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td>{{ $user->tmpt_lahir }}</td>
      </tr>
      <tr>
        <td>Agama</td>
        <td>{{ $user->agama }}</td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>{{ $user->jns_kelamin }}</td>
      </tr>
      <tr>
        <td>Jenis Pekerjaan</td>
        <td>{{ $user->jns_pekerjaan }}</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>{{ $user->alamat }}</td>
      </tr>
      <tr>
        <td>Status Kawin</td>
        <td>{{ $user->status_kawin }}</td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>{{ $user->fams->jabatan }}</td>
      </tr>
      <tr>
        <td>Status Migrasi</td>
        <td>
            <button class="btn btn-primary">{{ $user->status_migrasi }}</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

  @endsection