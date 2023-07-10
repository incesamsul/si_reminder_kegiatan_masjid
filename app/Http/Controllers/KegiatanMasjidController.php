<?php

namespace App\Http\Controllers;

use App\Models\KegiatanMasjid;
use Illuminate\Http\Request;

class KegiatanMasjidController extends Controller
{
    public function index()
    {
        $data['kegiatan_masjid'] = KegiatanMasjid::all();
        return view('pages.kegiatan_masjid.index', $data);
    }

    public function create()
    {
        $data['edit'] = [];
        return view('pages.kegiatan_masjid.create', $data);
    }

    public function edit($id)
    {
        $data['edit'] = KegiatanMasjid::find($id);
        return view('pages.kegiatan_masjid.create', $data);
    }

    public function store(Request $request)
    {
        KegiatanMasjid::create([
            'tgl_kegiatan' => $request->tgl_kegiatan,
            'jenis_kegiatan' => $request->jenis_kegiatan,
        ]);
        return redirect('/admin/kegiatan_masjid')->with('message', 'kegiatan Berhasil di tambahkan');
    }

    public function update(Request $request)
    {
        $data = KegiatanMasjid::where([
            ['id', '=', $request->id]
        ])->first();
        $data->update([
            'tgl_kegiatan' => $request->tgl_kegiatan,
            'jenis_kegiatan' => $request->jenis_kegiatan,
        ]);
        return redirect('/admin/kegiatan_masjid')->with('message', 'kegiatan Berhasil di update');
    }

    public function delete($id)
    {
        KegiatanMasjid::destroy($id);
        return redirect('/admin/kegiatan_masjid')->with('message', 'kegiatan Berhasil di hapus');
    }
}
