<?php

namespace App\Http\Controllers;

use App\Models\KasKeluar;
use App\Models\KasMasuk;
use Illuminate\Http\Request;

class RekapKasController extends Controller
{
    public function index()
    {
        $data['kas_keluar'] = KasKeluar::all();
        $data['kas_masuk'] = KasMasuk::all();
        return view('pages.rekap_kas.index', $data);
    }
}
