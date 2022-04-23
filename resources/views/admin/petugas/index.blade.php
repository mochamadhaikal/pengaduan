@extends('layouts.admin')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Data Petugas')    
@section('title', 'Petugas')

@section('content')
    <a href="{{ route('petugas.create') }}" class="btn btn-primary btn-sm mb-4">Tambah Petugas</a>
    <table class="table" id="petugasTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Telp</th>
                <th>Level</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petugas as $key=>$item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama_petugas }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->telp }}</td>
                    <td>{{ $item->level }}</td>
                    <td>
                        <a href="{{ route('petugas.edit', $item->id_petugas) }}" class="btn btn-sm btn-info mb-2">Edit</a>
                        <form action="{{ route('petugas.destroy', $item->id_petugas)  }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>                
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#petugasTable').DataTable();
        });
    </script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@endsection