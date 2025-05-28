<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Barang;
Use App\Models\Laporan;
use App\Http\Requests\LaporanRequest;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporan = Laporan::with('barang')->get();
        $barang = Barang::all();
        return view('laporan.laporan', [
            'laporans' => $laporan,
            'barangs' => $barang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        return view('laporan.create', [
            'barangs' => $barang
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LaporanRequest $request)
    {
        $barang = Barang::findOrFail($request->barang_id);

        $jumlah = $request->jumlah_terjual;
        $total = $barang->harga_jual * $jumlah;
        $modal_total = $barang->modal * $jumlah;
        $simpanan = $total * 0.05;
        $keuntungan = $total - $modal_total - $simpanan;

        Laporan::create([
            'barang_id' => $barang->id,
            'tanggal' => now(),
            'jumlah_terjual' => $jumlah,
            'total_harga' => $total,
            'modal' => $modal_total,
            'keuntungan' => $keuntungan,
            'simpanan' => $simpanan,
        ]);

        return redirect()->back()->with('success', 'Laporan ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();
        return redirect('/laporan')->with('delete', 'Barang berhasil dihapus!');
    }
}
