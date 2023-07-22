<?php

namespace App\Http\Controllers;

use App\Models\JadwalCeramah;
use App\Models\KasKeluar;
use App\Models\KasMasuk;
use App\Models\KegiatanMasjid;

class Home extends Controller
{

    public function index()
    {
        $data['jadwal_ceramah'] = JadwalCeramah::all();
        $data['kas_keluar'] = KasKeluar::all();
        $data['kas_masuk'] = KasMasuk::all();
        $data['kegiatan_masjid'] = KegiatanMasjid::all();
        return view('v_home', $data);
    }
}
