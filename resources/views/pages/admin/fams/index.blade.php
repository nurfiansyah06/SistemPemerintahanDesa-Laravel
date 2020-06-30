@extends('layouts.main')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kartu Keluarga</h1>
    <a href="{{ route('excelfam') }}" class="btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Print Excel
    </a>
    <a href="{{ route('pdffam') }}" class="btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Print PDF
    </a>
  </div>

  <div class="row">
      <div class="card-body">
          <div class="table-responsive">
              <table class="table-bordered" width = "100%" collspacing="0">
                <thead>
                    <tr>
                        <th>No. KK</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>Nama Anggota</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($fams as $u)
                    <tr>
                        <td>{{ $u->no_kk }}</td>  
                        <td>{{ $u->kepala_keluarga }}</td>  
                        
                        <td>
                            @foreach ($u->users as $item)
                            {{ $item->name }},
                            @endforeach</td>
                        <td>
                            <a href="{{route('fam.show', $u->no_kk)}}">
                                <button class="btn btn-primary">Detail</button>
                            </a>
                        </td>
                    </tr>    
                    
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                    @endforelse
                </tbody>
              </table>
          </div>
      </div>
  </div>

</div>
<!-- /.container-fluid -->

@endsection