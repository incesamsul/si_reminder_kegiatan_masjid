<?php

namespace App\Http\Controllers;

use App\Models\KasKeluar;
use App\Models\KasMasuk;
use Illuminate\Http\Request;

class RekapKasController extends Controller
{
    public function index()
    {
        $tgl_mulai = isset($_GET['tgl_mulai']) ? $_GET['tgl_mulai'] : '';
        $tgl_akhir = isset($_GET['tgl_akhir']) ? $_GET['tgl_akhir'] : '';
        $data['kas_keluar'] = KasKeluar::whereBetween('tanggal', [$tgl_mulai, $tgl_akhir])->get();
        $data['kas_masuk'] = KasMasuk::whereBetween('tanggal', [$tgl_mulai, $tgl_akhir])->get();
        return view('pages.rekap_kas.index', $data);
    }
}
