@extends('template')


@section('content')
	<h3>Data keranjang belanja</h3>


	<table class="table table-striped">
		<tr>
			<th>Kode Pembelian</th>
            <th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga Per Item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
            <td>{{ $k->ID }}</td>
			<td>{{ ($k->KodeBarang) }}</td>
			<td>{{ $k->Jumlah}}</td>
			<td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
            <td>Rp {{ number_format(($k->Harga * $k->Jumlah), 0, ',', '.') }}</td>



			<td>
				<a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>

        @endforeach
	</table>

    <a href="/keranjangbelanja/tambah" class="btn btn-primary mb-3"> + Beli</a>



{{ $keranjangbelanja->links() }}
@endsection
