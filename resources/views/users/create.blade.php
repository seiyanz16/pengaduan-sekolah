@extends('adminlte::page')

@section('title', 'Add User')

@section('content_header')
    <h1 class="m-0 text-dark">Add User</h1>
@stop

@section('content')
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="NIS">NIS</label>
                            <input type="text" class="form-control @error('nis') is-invalid @enderror" id="NIS"
                                placeholder="Input Your NIS" name="nis" value="{{ old('nis') }}">
                            @error('nis')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                placeholder="Input Your Full nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" class="form-control @error('telepon') is-invalid @enderror"
                                id="telepon" placeholder="Input Your Telepon" name="telepon" value="{{ old('telepon') }}">
                            @error('telepon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas">
                                <option value="X" {{ old('kelas') == 'X' ? 'selected' : '' }}>X</option>
                                <option value="XI" {{ old('kelas') == 'XI' ? 'selected' : '' }}>XI</option>
                                <option value="XII" {{ old('kelas') == 'XII' ? 'selected' : '' }}>XII</option>
                                <option value="XIII" {{ old('kelas') == 'XIII' ? 'selected' : '' }}>XIII</option>
                            </select>
                            @error('kelas')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                                name="jurusan">
                                <option value="SIJA" {{ old('jurusan') == 'SIJA' ? 'selected' : '' }}>SIJA</option>
                                <option value="TKJ" {{ old('jurusan') == 'TKJ' ? 'selected' : '' }}>TKJ</option>
                                <option value="RPL" {{ old('jurusan') == 'RPL' ? 'selected' : '' }}>RPL</option>
                                <option value="DKV" {{ old('jurusan') == 'DKV' ? 'selected' : '' }}>DKV</option>
                                <option value="DPIB" {{ old('jurusan') == 'DPIB' ? 'selected' : '' }}>DPIB</option>
                                <option value="TKP" {{ old('jurusan') == 'TKP' ? 'selected' : '' }}>TKP</option>
                                <option value="TFLM" {{ old('jurusan') == 'TFLM' ? 'selected' : '' }}>TFLM</option>
                                <option value="TKRO" {{ old('jurusan') == 'TKRO' ? 'selected' : '' }}>TKRO</option>
                                <option value="TOI" {{ old('jurusan') == 'TOI' ? 'selected' : '' }}>TOI</option>
                                <option value="TP" {{ old('jurusan') == 'TP' ? 'selected' : '' }}>TP</option>
                            </select>
                            @error('jurusan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="Input Your Email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" placeholder="Input Your Password" name="password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                id="password_confirmation" placeholder="Confirm Your Password" name="password_confirmation">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select class="form-control @error('level') is-invalid @enderror" id="level" name="level">
                                <option value="admin" @if (old('level') == 'admin') selected @endif>Admin</option>
                                <option value="siswa" @if (old('level') == 'user') selected @endif>User</option>
                            </select>
                            @error('level')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-right">
                        <a href="{{ route('users.index') }}" class="btn btn-default">Batal</a>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
