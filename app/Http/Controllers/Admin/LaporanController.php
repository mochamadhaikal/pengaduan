<?php

namespace App\Http\Controllers\Admin;

// use Barryvdh\DomPDF\PDF;
use PDF;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }

    public function getLaporan(Request $request)
    {
        $from = $request->from . ' ' . '00:00:00';
        $to = $request->to . ' ' . '23:59:59';

        $pengaduan = Pengaduan::whereBetween('tgl_pengaduan', [$from, $to])->get();

        return view('admin.laporan.index', compact('pengaduan', 'from', 'to'));
    }

    public function cetakLaporan($from, $to)
    {
        $pengaduan = Pengaduan::whereBetween('tgl_pengaduan', [$from, $to])->get();
        $pdf = PDF::loadView('admin.laporan.cetak', [
            'pengaduan' => $pengaduan
        ]);

        return $pdf->download('laporan-pengaduan-' . time() .'.pdf');
    }
}
