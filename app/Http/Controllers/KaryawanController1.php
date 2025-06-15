<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController1 extends Controller
{
    // Menampilkan semua data karyawan
    public function index()
    {
        $karyawans = Karyawan::all();
        return view('karyawan.index', compact('karyawans'));
    }

    // Tampilkan form tambah karyawan
    public function create()
    {
        return view('karyawan.create');
    }

    // Simpan data karyawan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kodepegawai' => 'required|unique:karyawans,kodepegawai|max:5',
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|max:5',
            'departemen' => 'required|max:10',
        ]);

        Karyawan::create($validated);
        return redirect()->route('karyawan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // Tampilkan form edit berdasarkan kodepegawai (PK)
    public function edit($kodepegawai)
    {
        $karyawan = Karyawan::where('kodepegawai', $kodepegawai)->firstOrFail();
        return view('karyawan.edit', compact('karyawan'));
    }

    // Update data karyawan
    public function update(Request $request, $kodepegawai)
    {
        $validated = $request->validate([
            'kodepegawai' => 'required|max:5',
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|max:5',
            'departemen' => 'required|max:10',
        ]);

        $karyawan = Karyawan::where('kodepegawai', $kodepegawai)->firstOrFail();
        $karyawan->update($validated);

        return redirect()->route('karyawan.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Hapus data karyawan
    public function destroy($kodepegawai)
    {
        Karyawan::where('kodepegawai', $kodepegawai)->delete();
        return redirect()->route('karyawan.index')->with('success', 'Data berhasil dihapus.');
    }
}
