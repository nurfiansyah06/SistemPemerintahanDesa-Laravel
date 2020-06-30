@extends('layouts.main')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 ml-2 text-gray-800">Detail Penduduk</h1>
    <a href="" class="btn-sm btn-primary shadow-sm mr-4">
      <i class="fas fa-plus fa-sm text-white-50"></i> Kembali
  </a>
  </div>

<div class="card ml-2 " style="width: 600px;font-size:15px">
<table class="table table-borderless">
    <thead>
    </thead>
    <tbody>
        <form action="{{ route('penduduk.store') }}" method="post">
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
        <td>Email</td>
        <td>
            <input type="email" class="form-control" name="email">
        </td>
      </tr>
      <tr>
        <td>Password</td>
        <td>
          <input type="password" class="form-control" name="password" required>
        </td>
      </tr>
      <tr>
        <td>No. Akta Kelahiran</td>
        <td>
            <input type="text" class="form-control" name="no_aktalahir">
        </td>
      </tr>
      <tr>
        <td>No. Akta Kematian</td>
        <td>
            <input type="text" class="form-control" name="no_aktakematian">
        </td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>
            <input type="date" class="form-control" name="tgl_lahir">
        </td>
      </tr>
      <tr>
        <td>Tempat Lahir</td>
        <td>
            <input type="text" class="form-control" name="tmpt_lahir">
        </td>
      </tr>
      <tr>
        <td>Agama</td>
        <td>
            <input type="text" class="form-control" name="agama">
        </td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>
            <textarea type="text" class="form-control" name="alamat"></textarea>
        </td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>
            <select name="jns_kelamin" class="form-control">
                <option value="Pria">Pria</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>Jenis Pekerjaan</td>
        <td>
            <input type="text" class="form-control" name="jns_pekerjaan">
        </td>
      </tr>
      <tr>
        <td>Status Kawin</td>
        <td>
            <select name="status_kawin" class="form-control">
                <option value="Menikah">Menikah</option>
                <option value="Belum Menikah">Belum Menikah</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>Jabatan dalam Kartu Keluarga</td>
        <td>
            <select name="jabatan" class="form-control" >
              <option value="Kepala Keluarga">Kepala Keluarga</option>
              <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
              <option value="Anak">Anak</option>
              <option value="Famili Lain">Famili Lain</option>
          </select>
        </td>
      </tr>
    </tbody>
  </table>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
  @endsection