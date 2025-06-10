@extends('template')


@section('content')
	<h3>Data Kulkas</h3>

	<a href="/kulkas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/kulkas/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Merk Kulkas
            </div>
            <div class="col-8">
                <input type="text" name="merkkulkas" required="required" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Harga Kulkas
            </div>
            <div class="col-8">
                <input type="text" name="hargakulkas" required="required" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-8">
                <input type="number" name="tersedia" required="required" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
                <input type= "number" name="berat" required="required" class="form-control">
            </div>
        </div>
        <br>
        <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection

