@extends('adminlte::page')

@section('title', 'Tanggapan')
@section('content_header')
    <h1>Daftar Tanggapan</h1>
@stop
@section('content')
    <div class="card">
        
        <div class="card-header">
            <h3 class="card-title">Daftar Tanggapan</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('tanggapan.create') }}" class="btn btn-primary mb-3">
                Add
            </a>
            <table id="tanggapan-table" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Pengaduan</th>
                        <th>Nama Petugas</th>
                        <th>Tanggal Tanggapan</th>
                        <th>Isi Tanggapan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tanggapan as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->pengaduan->judul }}</td>
                            <td>{{ $item->nama_petugas }}</td>
                            <td>{{ $item->tgl_tanggapan }}</td>
                            <td>{{ $item->isi_tanggapan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
@stop

@section('js')
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#tanggapan-table').DataTable();
        });
    </script>
@stop
