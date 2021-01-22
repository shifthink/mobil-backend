@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 justify-content-between">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="m-0 font-weight-bold text-primary">Role</h3>
                  <a href="{{ route('role.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Role
                  </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="table_role" class="table" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1; 
                            @endphp
                            @forelse($items as $item )
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->role }}</td>
                                    <td>
                                        <a href="{{ route('role.edit', $item->id) }}"
                                            class="btn btn-info">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('role.destroy', $item->id) }}"
                                            method="post" class="d-inline">
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
@section('scripts')
   <script>
    $(document).ready(function() {
        $('#table_role').DataTable(

        );
    });
    </script>
@endsection
