@extends('layouts.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Penduduk</h1>
      <a href="{{ route('pdfbirth') }}" class="btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Print PDF
    </a>
      <a href="{{ route('penduduk.create') }}" class="btn-sm btn-primary shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Akta Kelahiran
      </a>
    </div>
  
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered" width = "100%" collspacing="0">
                  <thead>
                      <tr>
                       
                          <th>NIK</th>
                        <th>No Akta Lahir</th>
                        <th>Nama</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach ($births as $birth)
                    <tr>
                        <td>{{  $birth->user->nik }}</td>
                        <td>{{ $birth->no_aktalahir }}</td>
                        <td>{{ $birth->user->name }}</td>
                        <td>
                            <a href="">
                                <button class="btn btn-primary">Detail</button>
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

