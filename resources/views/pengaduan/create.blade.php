@extends('adminlte::page')

@section('title', 'Pengaduan')

@section('content')
    <div class="row">
        <div class="col-12">
            <section style="background-color: #2779e2;">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-xl-9">

                            <h1 class="text-white mb-4 mt-5">Sampaikan Pengaduanmu!</h1>

                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body">

                                    <form method="POST" action="{{ route('pengaduan.store') }}">
                                        @csrf

                                        <div class="row align-items-center pt-4 pb-3">
                                            <div class="col-md-3 ps-5">
                                                <h6 class="mb-0">Judul Laporan</h6>
                                            </div>
                                            <div class="col-md-9 pe-5">
                                                <input type="text" name="judul" class="form-control form-control-lg"
                                                    required>
                                            </div>
                                        </div>

                                        <hr class="mx-n3">

                                        <div class="row align-items-center py-3">
                                            <div class="col-md-3 ps-5">
                                                <h6 class="mb-0">Isi</h6>
                                            </div>
                                            <div class="col-md-9 pe-5">
                                                <textarea name="isi" class="form-control" rows="3" placeholder="Tuliskan Pengaduanmu!" required></textarea>
                                            </div>
                                        </div>

                                        <hr class="mx-n3">

                                        <div class="row align-items-center py-3">
                                            <div class="col-md-3 ps-5">
                                                <h6 class="mb-0">Tanggal Pengaduan</h6>
                                            </div>
                                            <div class="col-md-9 pe-5">
                                                <input name="tgl_pengaduan" class="form-control form-control-lg"
                                                    type="date" required>
                                            </div>
                                        </div>

                                        <hr class="mx-n3">

                                        <div class="row align-items-center py-3">
                                            <div class="col-md-3 ps-5">
                                                <h6 class="mb-0">Kategori</h6>
                                            </div>
                                            <div class="col-md-9 pe-5">
                                                <select name="kategori" class="form-control form-control-lg" required>
                                                    <option value="" selected disabled>Pilih Kategori</option>
                                                    <option value="keamanan">Keamanan</option>
                                                    <option value="ekonomi">Ekonomi</option>
                                                    <option value="rasis">Rasis</option>
                                                    <option value="kesehatan">Kesehatan</option>
                                                    <option value="kesejahteraan">Kesejahteraan</option>
                                                    <option value="ketentraman">Ketentraman</option>
                                                    <option value="bencana">Bencana</option>
                                                    <option value="pembelajaran">Pembelajaran</option>
                                                    <option value="bullying">Bullying</option>
                                                    <option value="sosial">Sosial</option>
                                                </select>
                                            </div>
                                        </div>

                                        <hr class="mx-n3">

                                        <div class="px-5 py-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Kirim Pengaduan</button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@stop
