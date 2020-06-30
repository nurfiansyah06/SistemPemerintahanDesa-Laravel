@extends('layouts.main')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 ml-2 text-gray-800">Detail Surat</h1>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mr-4"  data-toggle="modal" data-target="#exampleModalLong">
  Ubah Permohonan Surat
</button>

</div>

    <div class="card col-lg-7 ml-2" >
      <table class="table table-borderless">
        <thead>

        </thead>
        <tbody>
          <tr>
            <td>No. Surat</td>
            <td>: {{ $surat->id }}</td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>: {{ $surat->name }}</td>
          </tr>
          <tr>
            <td>NIK</td>
            <td>: {{ $surat->nik }}</td>
          </tr>
          <tr>
            <td>Jenis Surat</td>
            <td>: {{ $surat->jns_surat }}</td>
          </tr>
          <tr>
            <td>Keperluan</td>
            <td>: {{ $surat->keperluan }}</td>
          </tr>
          <tr>
            <td>Alamat Rumah</td>
            <td>: {{ $surat->alamatrumah }}</td>
          </tr>
          <tr>
            <td>Tanggal Permohonan</td>
            <td>: {{ $surat->created_at->translatedFormat('l, d F Y') }}</td>
          </tr>
          <tr>
            <td>Perkiraan Surat Jadi</td>
            <td>: {{ $surat->created_at->addDay(1)->translatedFormat('l, d F Y') }}</td>
          </tr>
          <tr>
            <td>Status</td>
            <td>: 
              <a href="" class="btn btn-warning btn-sm">{{ $surat->status }}</a>
            </td>
          </tr>
          <tr>
            <td>File</td>
            <td>: 
              @if (!$surat->file)
                  <a href="" class="btn btn-primary btn-sm">BELUM ADA</a>
              @else
              <a href="{{ route('downloadfile', $surat->id) }}" class="btn btn-primary btn-sm">UNDUH SURAT</a>
              @endif
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('surat.update', $surat->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mt-3">
                <label for="name">Nama Lengkap</label>
                <input type="text" class="form-control" name="name" id="" value="{{ $surat->name }}">
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik" id="" value="{{ $surat->nik }}">
            </div>
            <div class="form-group">
                <label for="Surat">Jenis Surat</label>
                <select name="jns_surat" id="" class="form-control">
                    <option value="Akta Kelahiran" @if ($surat->jns_surat == 'Akta Kelahiran')
                        selected
                    @endif>Akta Kelahiran</option>
                    <option value="Akta Kematian" @if ($surat->jns_surat == "Akta Kematian")
                        selected
                    @endif>Akta Kematian</option>
                    <option value="Keterangan Penduduk" @if ($surat->jns_surat == "Keterangan Penduduk")
                        selected
                    @endif>Keterangan Penduduk</option>
                    <option value="Migrasi" @if ($surat->jns_surat == "Migrasi")
                        selected
                    @endif>Migrasi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="keperluan">Keperluan</label>
                <textarea name="keperluan" class="form-control" id="" cols="10" rows="5">{{ $surat->keperluan }}</textarea>
            </div>
            <div class="form-group">
              <label for="Surat">Status</label>
              <select name="status" id="" class="form-control">
                  <option value="DIPROSES" @if ($surat->status == 'DIPROSES')
                      selected
                  @endif>DIPROSES</option>
                  <option value="SELESAI" @if ($surat->status == "SELESAI")
                      selected
                  @endif>SELESAI</option>
              </select>
          </div>
            <div class="form-group">
              <label for="surat">Surat</label>
              <input type="file" class="form-control" name="file" id="" value="{{ $surat->file }}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
    </form>
    </div>
  </div>
</div>

  @endsection