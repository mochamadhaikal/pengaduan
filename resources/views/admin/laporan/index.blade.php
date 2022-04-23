@extends('layouts.admin')
@section('title', 'Laporan')
@section('header', 'Laporan Pengaduan')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-12">
            <div class="card">
                <div class="card-header">Cari Berdasarkan Tanggal</div>
                <div class="card-body">
                    <form action="{{ route('laporan.getlaporan') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input 
                                type="text" 
                                name="from" 
                                id="from" 
                                class="form-control"
                                placeholder="Tanggal Awal"
                                onfocusin="(this.type='date')"
                                onfocusout="(this.type='text')"
                            >
                        </div>
                        <div class="form-group">
                            <input 
                                type="text" 
                                name="to" 
                                id="to" 
                                class="form-control"
                                placeholder="Tanggal Akhir"
                                onfocusin="(this.type='date')"
                                onfocusout="(this.type='text')"
                            >
                        </div>
                        <button type="submit" class="w-100 btn btn-primary btn-sm">CARI LAPORAN</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-12">
            <div class="card">
                <div class="card-header">
                    Data Berdasarkan Tanggal {{ $from ?? ' '}} - {{ $to ?? '' }}
                    <div class="float-right">
                        @if ($pengaduan ?? '')
                            <a href="{{ route('laporan.cetakLaporan', ['from' => $from, 'to' => $to]) }}" class="mt-3 btn btn-sm btn-primary">
                                Download PDF
                            </a>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    @if ($pengaduan ?? '')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Isi Laporan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengaduan as $key=>$item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->tgl_pengaduan }}</td>
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="text-center">Tidak Ada Data</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection