<?php

namespace App\Http\Controllers;

use App\Models\KasMasuk;
use Illuminate\Http\Request;

class KasMasukController extends Controller
{
    public function index()
    {
        $data['kas_masuk'] = KasMasuk::all();
        return view('pages.kas_masuk.index', $data);
    }

    public function create()
    {
        $data['edit'] = [];
        return view('pages.kas_masuk.create', $data);
    }

    public function edit($id)
    {

        $data['edit'] = KasMasuk::find($id);
        return view('pages.kas_masuk.create', $data);
    }

    public function store(Request $request)
    {
        KasMasuk::create([
            'tanggal' => $request->tanggal,
            'kas_masuk' => $request->kas_masuk,
            'jenis_kas' => $request->jenis_kas
        ]);
        return redirect('/admin/kas_masuk')->with('message', 'kegiatan Berhasil di tambahkan');
    }

    public function update(Request $request)
    {
        $data = KasMasuk::where([
            ['id', '=', $request->id]
        ])->first();
        $data->update([
            'tanggal' => $request->tanggal,
            'kas_masuk' => $request->kas_masuk,
            'jenis_kas' => $request->jenis_kas
        ]);
        return redirect('/admin/kas_masuk')->with('message', 'kegiatan Berhasil di update');
    }

    public function delete($id)
    {
        KasMasuk::destroy($id);
        return redirect('/admin/kas_masuk')->with('message', 'kegiatan Berhasil di hapus');
    }
}
