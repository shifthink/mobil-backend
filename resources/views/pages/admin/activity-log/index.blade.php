@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 justify-content-between">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h3 class="m-0 font-weight-bold text-primary">Aktivitas User</h3>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table_log" class="table" width="100%">
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
                              <td>{{ $item->users->username }}</td>
                              <td>{{ $item->subject_type }}</td>
                              <td>
                                  <div class="">
                                    <form action="{{ route('activity-log.destroy', $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                  </div>
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
@section('scripts')
   <script>
    $(document).ready(function() {
        $('#table_log').DataTable(

        );
    });
    </script>
@endsection
