@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
          <a href="{{ route('gallery.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
              <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Gallery
          </a>
      </div>

      <!-- Content Row -->
      <div class="row">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>Log Name</th>
                          <th>Deskripsi</th>
                          <th>User</th>
                          <th>Subject</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @php $no = 1; @endphp
                      @forelse($items as $item)
                          <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $item->log_name }}</td>
                              <td>User {{$item->causer_id}} {{ $item->description }}</td>
                              <td>{{ $item->users->name }}</td>
                              <td>{{ $item->subject_type }}</td>
                              <td>
                                  <form action="{{ route('activity-log.destroy', $item->id) }}" method="post" class="d-inline">
                                      @csrf
                                      @method('delete')
                                      <button class="btn btn-danger">
                                          <i class="fa fa-trash"></i>
                                      </button>
                                  </form>

                              </td>
                          </tr>
                      @empty
                          <td colspan="7" class="text-center">
                              Data Kosong
                          </td>
                      @endforelse
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
    </div>
    <!-- /.container-fluid -->
@endsection