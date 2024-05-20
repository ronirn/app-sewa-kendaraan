<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kwitansi;

class KwitansiController extends Controller
{
    public function index()
    {
        $kwitanis = Kwitansi::all();
        return view('kwitansi.index', compact('kwitanis'));
    }

    public function create()
    {
        return view('kwitansi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_transaksi' => 'required|date',
        ]);

        Kwitansi::create($request->all());
        return redirect()->route('kwitansi.index')->with('success', 'Kwitansi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kwitansi = Kwitansi::findOrFail($id);
        return view('kwitansi.edit', compact('kwitansi'));
    }

    public function show($id)
{
    $kwitansi = Kwitansi::findOrFail($id);
    return view('kwitansi.show', compact('kwitansi'));
}


    public function update(Request $request, $id)
    {
        $request->validate([
            'tgl_transaksi' => 'required|date',
        ]);

        $kwitansi = Kwitansi::findOrFail($id);
        $kwitansi->update($request->all());
        return redirect()->route('kwitansi.index')->with('success', 'Kwitansi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kwitansi = Kwitansi::findOrFail($id);
        $kwitansi->delete();
        return redirect()->route('kwitansi.index')->with('success', 'Kwitansi berhasil dihapus.');
    }
}
