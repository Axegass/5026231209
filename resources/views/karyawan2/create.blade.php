@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Tambah Data Karyawan</h2>

    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kodepegawai" class="form-label">Kode Pegawai</label>
            <input type="text" name="kodepegawai" id="kodepegawai" class="form-control" required maxlength="5">
        </div>

        <div class="mb-3">
            <label for="namalengkap" class="form-label">Nama Lengkap</label>
            <input type="text" name="namalengkap" id="namalengkap" class="form-control" required maxlength="50">
        </div>

        <div class="mb-3">
            <label for="divisi" class="form-label">Divisi</label>
            <input type="text" name="divisi" id="divisi" class="form-control" required maxlength="5">
        </div>

        <div class="mb-3">
            <label for="departemen" class="form-label">Departemen</label>
            <input type="text" name="departemen" id="departemen" class="form-control" required maxlength="10">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
