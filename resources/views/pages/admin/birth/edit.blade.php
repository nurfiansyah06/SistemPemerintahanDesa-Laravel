@extends('layouts.main')

@section ('content')
<div class="container">

    <div class="card mx-auto mt-4 mb-4" style="width: 700px;font-size:15px">
      <h1 class="text-center text-dark p-2">Edit Penduduk {{ $user->name }}</h1>
      <table class="table table-borderless mr-3">
          <thead>
          </thead>
          <tbody>
              <form action="{{ route('penduduk.update', $user->nik) }}" method="post">
                  @csrf
                  @method('PUT')
            <tr>
              <td>Nama</td>
              <td>
                  <input type="text" class="form-control"  value="{{ $user->name }}" name="name" >
              </td>
            </tr>
            <tr>
              <td>NIK</td>
              <td>
                  <input type="text" class="form-control" value="{{ $user->nik }}" name="nik">
              </td>
            </tr>
            <tr>
              <td>NO KK</td>
              <td>
                  <input type="text" class="form-control" value="{{ $user->fams->no_kk }}" name="no_kk">
              </td>
            </tr>
            <td>Email</td>
            <td>
                <input type="email" class="form-control" value="{{ $user->email }}" name="email">
            </td>
          </tr>
            <tr>
              <td>No. Akta Kelahiran</td>
              <td>
                  <input type="text" class="form-control" value="{{ $user->no_aktalahir }}" name="no_aktalahir" placeholder="Boleh dikosongkan...">
              </td>
            </tr>
            <tr>
              <td>No. Akta Kematian</td>
              <td>
                  <input type="text" class="form-control" value="{{ $user->no_aktakematian }}" name="no_aktakematian" placeholder="Boleh dikosongkan...">
              </td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td>
                  <input type="date" class="form-control" value="{{ $user->tgl_lahir }}" name="tgl_lahir">
              </td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td>
                  <input type="text" class="form-control" value="{{ $user->tmpt_lahir }}" name="tmpt_lahir">
              </td>
            </tr>
            <tr>
              <td>Agama</td>
              <td>
                  <input type="text" class="form-control" value="{{ $user->agama }}" name="agama">
              </td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>
                  <textarea type="text" class="form-control" value="" name="alamat">{{ $user->alamat }}</textarea>
              </td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td>
                  <select name="jns_kelamin" class="form-control" id="">
                      <option value="">Silahkan Pilih</option>
                      <option value="Pria">Pria</option>
                      <option value="Perempuan">Perempuan</option>
                  </select>
                  
              </td>
            </tr>
            <tr>
              <td>Jenis Pekerjaan</td>
              <td>
                  <input type="text" class="form-control" value="{{ $user->jns_pekerjaan }}" name="jns_pekerjaan">
              </td>
            </tr>
            <tr>
              <td>Jabatan dalam Kartu Keluarga</td>
              <td>
                  <select name="status_kawin" class="form-control" id="">
                      <option value="{{ $user->fams->jabatan }}">{{ $user->fams->jabatan }}</option>
                      <option value="Kepala Keluarga">Kepala Keluarga</option>
                      <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                      <option value="Anak">Anak</option>
                      <option value="Famili Lain">Famili Lain</option>
                  </select>
              </td>
            </tr>
            <tr>
              <td>Status Kawin</td>
              <td>
                  <select name="status_kawin" class="form-control" id="">
                      <option value="{{ $user->status_kawin }}">{{ $user->status_kawin }}</option>
                      <option value="Menikah">Menikah</option>
                      <option value="Belum Menikah">Belum Menikah</option>
                  </select>
              </td>
            </tr>
            <tr>
              <td>Status Migrasi</td>
              <td>
                <select name="status_migrasi" class="form-control" id="">
                  <option value="Tetap">Tetap</option>
                  <option value="Migrasi">Migrasi</option>
              </select>
            </tr>
          </tbody>
        </table>
        <button type="submit" class="btn btn-primary mx-auto mb-4" style="width: 50%">Simpan</button>
      </form>
      </div>

  </div>

@endsection