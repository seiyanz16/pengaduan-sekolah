@extends('adminlte::page')
@section('title', 'Edit User')
@section('content_header')
    <h1 class="m-0 text-dark">Edit User</h1>
@stop
@section('content')
    <form action="{{ route('users.update', $user) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="NIS">NIS</label>
                            <input type="text" class="form-control @error('nis') is-invalid @enderror" id="NIS"
                                placeholder="Input Your NIS" name="nis" value="{{$user->nis ?? old('nis')}}">
                            @error('nis')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                placeholder="Input Your Full Name" name="name" value="{{ $user->name ?? old('name') }}">
                            @error('name')
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
                            <label for="email">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="Input Your Email" name="email" value="{{ $user->email ?? old('email')}}">
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
                            <input type="password" class="form-control" id="password" placeholder="Confirm Your Password"
                                name="password_confirmation">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <select class="form-control @error('level') is-invalid @enderror" id="level" name="level">
                                <option value="admin"@if($user->level ==
'admin' || old('level') == 'admin')selected @endif>Admin</option>
                                <option value="siswa"@if($user->level ==
'siswa' || old('level') == 'siswa')selected @endif>Student</option>
                            </select>
                            @error('level')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-right">
                        <a href="{{ route('users.index') }}" class="btn btn-default">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop
