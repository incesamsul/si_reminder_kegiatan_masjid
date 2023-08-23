<?php

namespace App\Http\Controllers;

use App\Models\JadwalCeramah;
use Illuminate\Http\Request;

class JadwalCeramahController extends Controller
{
    public function index()
    {
        $data['jadwal_ceramah'] = JadwalCeramah::all();
        return view('pages.jadwal_ceramah.index', $data);
    }

    public function create()
    {
        $data['edit'] = [];
        return view('pages.jadwal_ceramah.create', $data);
    }

    public function edit($id)
    {

        $data['edit'] = JadwalCeramah::find($id);
        return view('pages.jadwal_ceramah.create', $data);
    }

    public function store(Request $request)
    {
        JadwalCeramah::create([
            'tanggal' => $request->tanggal,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'tema' => $request->tema
        ]);
        return redirect('/admin/jadwal_ceramah')->with('message', 'kegiatan Berhasil di tambahkan');
    }

    public function update(Request $request)
    {
        $data = JadwalCeramah::where([
            ['id', '=', $request->id]
        ])->first();
        $data->update([
            'tanggal' => $request->tanggal,
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'tema' => $request->tema
        ]);
        return redirect('/admin/jadwal_ceramah')->with('message', 'kegiatan Berhasil di update');
    }

    public function delete($id)
    {
        JadwalCeramah::destroy($id);
        return redirect('/admin/jadwal_ceramah')->with('message', 'kegiatan Berhasil di hapus');
    }

    public function kirim($id)
    {
        JadwalCeramah::where('id', $id)->update([
            'status' => 'terkirim'
        ]);
        return redirect('/admin/jadwal_ceramah')->with('message', 'udpated to terkirim');
    }
}
