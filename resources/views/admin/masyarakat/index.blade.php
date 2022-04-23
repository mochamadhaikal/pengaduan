@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('title', 'Halaman Masyarakat')
@section('header', 'Data Masyarakat')  

@section('content')
    <table class="table" id="masyarakatTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Telp.</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($masyarakat as $key=>$item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->telp }}</td>
                    <td>
                        <a href="{{ route('masyarakat.show', $item->nik) }}" class="btn btn-sm btn-primary">Lihat</a>
                    </td>
                </tr>                
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#masyarakatTable').DataTable();
        });
    </script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@endsection