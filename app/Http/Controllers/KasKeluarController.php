<?php

namespace App\Http\Controllers;

use App\Models\KasKeluar;
use Illuminate\Http\Request;

class KasKeluarController extends Controller
{
    public function index()
    {
        $data['kas_keluar'] = KasKeluar::all();
        return view('pages.kas_keluar.index', $data);
    }

    public function create()
    {
        $data['edit'] = [];
        return view('pages.kas_keluar.create', $data);
    }

    public function edit($id)
    {

        $data['edit'] = KasKeluar::find($id);
        return view('pages.kas_keluar.create', $data);
    }

    public function store(Request $request)
    {
        KasKeluar::create([
            'tanggal' => $request->tanggal,
            'kas_keluar' => $request->kas_keluar,
            'jenis_kas' => $request->jenis_kas
        ]);
        return redirect('/admin/kas_keluar')->with('message', 'kegiatan Berhasil di tambahkan');
    }

    public function update(Request $request)
    {
        $data = KasKeluar::where([
            ['id', '=', $request->id]
        ])->first();
        $data->update([
            'tanggal' => $request->tanggal,
            'kas_keluar' => $request->kas_keluar,
            'jenis_kas' => $request->jenis_kas
        ]);
        return redirect('/admin/kas_keluar')->with('message', 'kegiatan Berhasil di update');
    }

    public function delete($id)
    {
        KasKeluar::destroy($id);
        return redirect('/admin/kas_keluar')->with('message', 'kegiatan Berhasil di hapus');
    }
}
