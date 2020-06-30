@extends('layouts.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Penduduk</h1>
      <a href="{{ route('export') }}" class="btn btn-sm btn-primary">
        Print PDF
      </a>
      <a href="{{ route('penduduk.create') }}" class="btn-sm btn-primary shadow-sm">
          <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Penduduk
      </a>
    </div>
  
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table-bordered table-hover" width = "100%" collspacing="0">
                  <thead class="thead-dark">
                      <tr>
                       
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>No KK</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->nik }}</td>
                        <td>{{ $user->no_kk_id }}</td>
                        <td>
                            <a href="{{route('penduduk.show', $user->nik)}}">
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

