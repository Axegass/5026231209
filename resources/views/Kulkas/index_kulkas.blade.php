@extends('template')


@section('content')
	<h3>Data Kulkas</h3>

	<a href="/kulkas/tambah" class="btn btn-primary"> + Tambah Kulkas Baru</a>

    <p>Cari Data Kulkas :</p>
	<form action="/kulkas/cari" method="GET">
		<input type="text" class="form-control " name="cari" placeholder="Cari Pegawai .." >
		<input type="submit" class="btn btn-info" value="CARI">
	</form>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merk Kulkas</th>
			<th>Harga Kulkas</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($kulkas as $k)
		<tr>
			<td>{{ $k->merkkulkas }}</td>
            <td>Rp {{ number_format($k->hargakulkas, 0, ',', '.') }}</td>
			<td>{{ $k->tersedia ? 'Ya' : 'Tidak' }}</td>
			<td>{{ $k->berat }}</td>
			<td>
				<a href="/kulkas/edit/{{ $k->kulkas_ID }}" class="btn btn-success">Edit</a>
				|
				<a href="/kulkas/hapus/{{ $k->kulkas_ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>

        @endforeach
	</table>
{{ $kulkas->links() }}
@endsection




