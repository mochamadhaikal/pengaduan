@extends('layouts.admin')

@section('title', 'Form Edit Petugas')

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
    <a href="#" class="text-grey">Form Edit Petugas</a>
@endsection 

@section('content')
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card">
                <div class="card-header">Form Edit Petugas</div>
                <div class="card-body">
                    <form action="{{ route('petugas.update', $petugas->id_petugas) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="nama_petugas">Nama Petugas</label>
                            <input 
                                type="text" 
                                name="nama_petugas" 
                                id="nama_petugas" 
                                class="form-control"
                                value="{{ $petugas->nama_petugas }}" 
                                required
                            >
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input 
                                type="text" 
                                name="username" 
                                id="username" 
                                class="form-control" 
                                value="{{ $petugas->username }}" 
                                required
                            >
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input 
                                type="password" 
                                name="password" 
                                id="password" 
                                class="form-control" 
                            >
                        </div>
                        <div class="form-group">
                            <label for="telp">No. Telpon</label>
                            <input 
                                type="number" 
                                name="telp" 
                                id="telp" 
                                class="form-control" 
                                value="{{ $petugas->telp }}" 
                                required
                            >
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <div class="input-group">
                                <select name="level" id="level" class="form-control">
                                    @if ($petugas->level == 'petugas')
                                        <option value="petugas" selected>Petugas</option>
                                        <option value="admin">Admin</option>
                                    @else
                                        <option value="petugas" selected>Petugas</option>
                                        <option value="admin" selected>Admin</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn-block btn btn-primary">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection