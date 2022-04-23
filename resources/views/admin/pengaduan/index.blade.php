@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endsection

@section('header', 'Data Pengaduan')    
@section('title', 'Halaman Pengaduan')

@section('content')
    <table class="table" id="pengaduanTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Isi Laporan</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduan as $key=>$item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->tgl_pengaduan->format('d-M-Y') }}</td>
                    <td>{{ $item->isi_laporan }}</td>
                    <td>
                        @if ($item->status == '0')
                            <a href="#" class="badge badge-danger">Pending</a>
                        @elseif ($item->status == 'proses')
                            <a href="#" class="badge badge-warning">Proses</a>
                        @else
                            <a href="#" class="badge badge-success">Selesai</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('pengaduan.show', $item->id_pengaduan) }}" class="btn btn-sm btn-primary">
                            Lihat
                        </a>
                    </td>
                </tr>  
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#pengaduanTable').DataTable();
        });
    </script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@endsection