<?php

namespace App\Http\Controllers;

use App\Models\KasKeluar;
use App\Models\KasMasuk;
use Dompdf\Dompdf;
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

    public function cetak()
    {
        $tgl_mulai = isset($_GET['tgl_mulai']) ? $_GET['tgl_mulai'] : '';
        $tgl_akhir = isset($_GET['tgl_akhir']) ? $_GET['tgl_akhir'] : '';
        $data['kas_keluar'] = KasKeluar::whereBetween('tanggal', [$tgl_mulai, $tgl_akhir])->get();
        $data['kas_masuk'] = KasMasuk::whereBetween('tanggal', [$tgl_mulai, $tgl_akhir])->get();
        $html = view('pages.rekap_kas.cetak', $data);

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('Legal', 'potrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream("masjd.pdf", array("Attachment" => false));
        exit(0);
    }
}
