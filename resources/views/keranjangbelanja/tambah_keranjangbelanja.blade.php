@extends('template')


@section('content')
	<h3>Data keranjang belanja</h3>

	<a href="/keranjangbelanja" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
         <div class="row">
            <div class="col-3">
                Kode Barang
            </div>
            <div class="col-8">
                <textarea type="number" name="KodeBarang" required="required" class="form-control"></textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Jumlah Pembelian
            </div>
            <div class="col-8">
                <textarea type="number" name="Jumlah" required="required" class="form-control"></textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Harga Per item
            </div>
            <div class="col-8">
                <textarea type="number" name="Harga" required="required" class="form-control"></textarea>
            </div>
        </div>
        <br>
        <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection

