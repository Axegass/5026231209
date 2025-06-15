@extends('template')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Karyawan</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">Tambah Karyawan</a>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
            <tr>
                <td>{{ $karyawan->kodepegawai }}</td>
                <td>{{ $karyawan->namalengkap }}</td>
                <td>{{ $karyawan->divisi }}</td>
                <td>{{ $karyawan->departemen }}</td>
                <td>
                    <a href="{{ route('karyawan.edit', $karyawan->kodepegawai) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('karyawan.destroy', $karyawan->kodepegawai) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
