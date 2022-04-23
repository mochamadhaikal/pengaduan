@extends('layouts.admin')

@section('title', 'Form Tambah Petugas')

@section('css')
    <style>
        .text-primary:hover {
            text-decoration: underline;
        }

        .text-grey {
            color: #5c757d;
        }

        .text-grey:hover {
            color: #5c757d;
        }
    </style>
@endsection

@section('header')
    <a href="{{ route('petugas.index') }}" class="text-primary">Data Petugas</a>
    <a href="#" class="text-grey">/</a>
    <a href="#" class="text-grey">Form Tambah Petugas</a>
@endsection 

@section('content')
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">Form Tambah Petugas</div>
                <div class="card-body">
                    <form action="{{ route('petugas.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama_petugas">Nama Petugas</label>
                            <input 
                                type="text" 
                                name="nama_petugas" 
                                id="nama_petugas" 
                                class="form-control @error('nama_petugas') is-invalid @enderror" 
                                value="{{ old('nama_petugas') }}"
                                required
                            >
                            @error('nama_petugas')
                                <div class="text-danger text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input 
                                type="text" 
                                name="username" 
                                id="username" 
                                class="form-control @error('username') is-invalid @enderror" 
                                value="{{ old('username') }}"
                                required
                            >
                            @error('username')
                                <div class="text-danger text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input 
                                type="password" 
                                name="password" 
                                id="password" 
                                class="form-control @error('password') is-invalid @enderror"
                                required
                            >
                            @error('password')
                                <div class="text-danger text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telp">No. Telpon</label>
                            <input 
                                type="number" 
                                name="telp" 
                                id="telp" 
                                class="form-control @error('telp') is-invalid @enderror" 
                                value="{{ old('telp') }}"
                                required
                            >
                            @error('telp')
                                <div class="text-danger text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <div class="input-group">
                                <select name="level" id="level" class="form-control @error('level') is-invalid @enderror">
                                    <option value="petugas">Petugas</option>
                                    <option value="admin">Admin</option>
                                </select>
                                @error('level')
                                    <div class="text-danger text-sm mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn-block btn btn-primary">SIMPAN</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            @if (Session::has('username'))
                <div class="alert alert-danger">{{ Session::get('username') }}</div>
            @endif
        </div>
    </div>
@endsection