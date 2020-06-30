@extends('layouts.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Migrasi Penduduk</h1>
      <a href="{{ route('pdfmove') }}" class="btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Print PDF
      </a>
      <a href="{{ route('migrasi.create') }}" class="btn-sm btn-primary shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Penduduk Migrasi
      </a>
    </div>
  
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered" width = "100%" collspacing="0">
                  <thead class="thead-light">
                      <tr>
                        <th>No Migrasi</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>No KK</th>
                        <th>Detail</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach ($moves as $m)
                    <tr>
                        <td>{{ $m->no_migrasi }}</td>
                        <td>{{ $m->name }}</td>
                        <td>{{ $m->nik }}</td>
                        <td>{{ $m->no_kk }}</td>
                        <td>
                            <a class="btn-sm btn-warning" href="">{{ $m->status }}</a>
                        </td>
                        <td>
                            <a href="{{ route('migrasi.edit',$m->id) }}">
                                <button class="btn btn-primary"><i class="fas fa-pencil-alt fa-sm text-white-50"></i></button>
                            </a>
                            <a href="{{ route('migrasi.destroy',$m->id) }}">
                                <button class="btn btn-danger"><i class="fas fa-trash fa-sm text-white-50"></i></button>
                            </a>
                        </td>
                    </tr>    
                </tbody>
                      @endforeach
                </table>
            </div>
        </div>
    </div>
  

</div>
<!-- /.container-fluid -->    
@endsection

