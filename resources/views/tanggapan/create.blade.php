@extends('adminlte::page')

@section('title', 'Beri Tanggapan')

@section('content_header')
    <h1 class="mt-2 mb-2">Beri Tanggapan</h1>
    <h3>Judul Pengaduan: {{ $pengaduan->judul }}</h3>
    <h5>Kategori:</h5>
    <input type="text" name="kategori" class="form-control" readonly value=" {{ $pengaduan->kategori }}">
    <h5>Isi</h5>
    <textarea name="isi" class="form-control" rows="3" readonly>{{ $pengaduan->isi }}</textarea>
@stop


@section('content')
    <div class="container">

        <form action="{{ route('tanggapan.create', ['idpengaduan' => $pengaduan->id]) }}" method="get">
            @csrf
            <input type="hidden" name="id_pengaduan" value="{{ $pengaduan->id }}">

            <div class="form-group">
                <label for="nama_petugas">Nama Petugas</label>
                <input type="text" name="nama_petugas" class="form-control" value="{{ Auth::user()->name }}" readonly>
            </div>

            <div class="form-group">
                <label for="tgl_tanggapan">Tanggal Tanggapan</label>
                <input type="date" name="tgl_tanggapan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="isi_tanggapan">Isi Tanggapan</label>
                <textarea name="isi_tanggapan" class="form-control" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
