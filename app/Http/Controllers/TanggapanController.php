<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    public function index()
    {
        $tanggapan = Tanggapan::all();
        return view('tanggapan.index', [
            'tanggapan' => $tanggapan
        ]);
    }
    public function create($idpengaduan)
    {
        $pengaduan = Pengaduan::find($idpengaduan);

        return view('tanggapan.create', compact('pengaduan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'idpengaduan' => 'required',
            'nama_petugas' => 'required',
            'tgl_tanggapan' => 'required|date',
            'isi_tanggapan' => 'required',
        ]);

        $tanggapan = new Tanggapan();
        $tanggapan->idpengaduan = $request->idpengaduan;
        $tanggapan->nama_petugas = $request->nama_petugas;
        $tanggapan->tgl_tanggapan = $request->tgl_tanggapan;
        $tanggapan->isi_tanggapan = $request->isi_tanggapan;
        $tanggapan->save();

        return redirect()->route('pengaduan.index')->with('success', 'Tanggapan berhasil ditambahkan!');
    }
}