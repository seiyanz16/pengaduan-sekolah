@extends('adminlte::page')

@section('title', 'Daftar Pengaduan')

@section('content_header')
    <h1>Daftar Pengaduan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pengaduan</h3>
                </div>
                <div class="card-body">
                    <a href="{{ route('pengaduan.create') }}" class="btn btn-primary mb-3">
                        Add
                    </a>
                    <table id="pengaduan-table" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID Pengaduan</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Tanggal Pengaduan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengaduan as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->isi }}</td>
                        <td>{{ $item->tgl_pengaduan }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{ route('pengaduan.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('pengaduan.destroy', $item->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengaduan ini?')">Hapus</button>
                                <a href="{{ route('tanggapan.create', ['idpengaduan' => $item->id]) }}
" class="btn btn-sm btn-success">Beri Tanggapan</a>

                            </form>
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

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#pengaduan-table').DataTable();
        });
    </script>
@stop