@extends('layouts.main')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 ml-2 text-gray-800">Detail Kartu Keluarga</h1>
    

<a href="{{ route('penduduk.index') }}" class="btn btn-primary shadow-sm ml-5">
  <i class="fas fa-plus fa-sm text-white-50"></i> Kembali
</a>
  </div>

  <div class="row">
    <div class="card-body">
      <h2 class="text-center">Kartu Keluarga {{ $fam->no_kk }}</h2>
      <br>

        <div class="card">
          <div class="table-responsive">
              <table class="table-bordered" width = "100%" collspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>@foreach ($fam->users as $item)
                            {{ $item->name }} <br>
                        @endforeach</td>
                        <td>@foreach ($fam->users as $item)
                          {{ $item->nik }}  <br>
                          @endforeach</td>
                        <td>@foreach ($fam->users as $item)
                            {{ $item->jabatan }} <br>
                        @endforeach</td>    
                    </tr>    
                </tbody>
              </table>
          </div>
        </div>

    </div>
</div>


  @endsection