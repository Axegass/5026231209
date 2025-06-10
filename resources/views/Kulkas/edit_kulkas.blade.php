@extends('template')\


@section('content')
	<h3>Edit Kulkas</h3>

	<a href="/kulkas"> Kembali</a>

	<br/>
	<br/>

	@foreach($kulkas as $k)
	<form action="/kulkas/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="kulkas_ID" value="{{$k->kulkas_ID}}">

		<div class="row">
            <div class="col-3">
                Merk Kulkas
            </div>
            <div class="col-8">
                <input type="text" name="merkkulkas" required="required" class="form-control" value="{{$k->merkkulkas}}" required = "required">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Harga Kulkas
            </div>
            <div class="col-8">
                <input type="text" name="hargakulkas" required="required" class="form-control" value="{{$k->hargakulkas}}" required = "required">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-8">
                <input type="number" name="tersedia" required="required" class="form-control" value="{{$k->tersedia}}" required = "required">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
                <input type= "number" name="berat" required="required" class="form-control" value="{{$k->berat}}" required = "required">
            </div>
        </div>
        <br>
        <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
    @endforeach

@endsection

