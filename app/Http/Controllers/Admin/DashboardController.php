<?php

namespace App\Http\Controllers\Admin;

use App\Models\Petugas;
use App\Models\Pengaduan;
use App\Models\Masyarakat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $petugas = Petugas::all()->count();
        $masyarakat = Masyarakat::all()->count();
        $pengaduanProses = Pengaduan::where('status', 'proses')->get()->count();
        $pengaduanSelesai = Pengaduan::where('status', 'selesai')->get()->count();

        return view('admin.dashboard.index', compact('petugas', 'masyarakat', 'pengaduanProses', 'pengaduanSelesai'));
    }
}
