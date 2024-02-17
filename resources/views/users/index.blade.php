@extends('adminlte::page')

@section('title', 'List User')

@section('content_header')
    <h1 class="m-0 text-dark">USERS</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User List</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">
                        Add
                    </a>
                    <table class="table table-hover table-bordered table-striped" id="example2">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIS</th>
                                <th>Name</th>
                                <th>Telepon</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->nis }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->telepon }}</td>
                                    <td>{{ $user->kelas }}</td>
                                    <td>{{ $user->jurusan }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->level }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-primary btn-sm">
                                            Edit
                                        </a>
                                        <a href="{{ route('users.destroy', $user) }}"
                                            onclick="notificationBeforeDelete(event, this)"
                                            class="btn btn-danger btn-sm">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $(document).ready(function () {
            $('#example2').DataTable({
                "responsive": true,
            });
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data?')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush
