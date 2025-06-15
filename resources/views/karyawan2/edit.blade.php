@extends('template')

@section('content')
<div class="card">
    <div class="card-header bg-warning">
        <h4>Edit Data Karyawan</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('karyawan.update', $karyawan->kodepegawai) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" value="{{ $karyawan->kodepegawai }}" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namalengkap" name="namalengkap" value="{{ $karyawan->namalengkap }}" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="divisi" name="divisi" value="{{ $karyawan->divisi }}" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="departemen" name="departemen" value="{{ $karyawan->departemen }}" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
