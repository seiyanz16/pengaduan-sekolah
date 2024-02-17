@extends('adminlte::page')

@section('title', 'Pengaduan Cibione | Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
  <div class="card">
        <div class="card-body">
            <h3>Selamat datang di Pengaduan Cibione! </h3>
            <p>Silakan adukan keluhanmu :</p>
            <a href="{{ route('pengaduan.create') }}" class="btn btn-primary">Buat Pengaduan</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>0</h3>
                    <p>Total Pengaduan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <a href="{{ route('pengaduan.index') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>0</h3>
                    <p>Pengaduan Selesai</p>
                </div>
                <div class="icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <a href="{{ route('pengaduan.index') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>0</h3>
                    <p>Pengaduan Diproses</p>
                </div>
                <div class="icon">
                    <i class="fas fa-cog"></i>
                </div>
                <a href="{{ route('pengaduan.index') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>0</h3>
                    <p>Pengaduan Dibatalkan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-times-circle"></i>
                </div>
                <a href="{{ route('pengaduan.index') }}" class="small-box-footer">Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@stop
