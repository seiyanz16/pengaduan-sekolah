<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class PengaduanController extends Controller
{
    //
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('pengaduan.index', [
            'pengaduan' => $pengaduan
        ]);
    }
    public function create()
    {
        return view('pengaduan.create');
    }
    public function store(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'tgl_pengaduan' => 'required|date',
            'kategori' => 'required|in:keamanan,ekonomi,rasis,kesehatan,kesejahteraan,ketentraman,bencana,pembelajaran,bullying,sosial',
        ]);

        // Buat objek pengaduan baru
        $pengaduan = new Pengaduan();
        $pengaduan->iduser = auth()->user()->id;
        $pengaduan->judul = $validatedData['judul'];
        $pengaduan->isi = $validatedData['isi'];
        $pengaduan->tgl_pengaduan = $validatedData['tgl_pengaduan'];
        $pengaduan->kategori = $validatedData['kategori'];
        $pengaduan->status = 'proses'; // Set status awal menjadi 'proses'

        // Simpan pengaduan ke database
        $pengaduan->save();

        // Redirect ke halaman sukses atau halaman lain yang diinginkan
        // return redirect()->route('home')
        //     ->with('success', 'Pengaduan berhasil dikirim!');

        return redirect()->route('pengaduan.index')
            ->with('success', 'Pengaduan berhasil dikirim!')
            ->with('idpengaduan', $pengaduan->id);
    }
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);

        if (!$pengaduan) {
            abort(404); // or handle the case when the pengaduan is not found
        }

        $pengaduan->delete();

        return redirect()->route('pengaduan.index')
            ->with('success', 'Pengaduan berhasil dihapus');
    }

}