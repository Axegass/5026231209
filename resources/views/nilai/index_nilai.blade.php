@extends('template')


@section('content')
	<h3>Data Nilai</h3>

	<a href="/nilai/tambah" class="btn btn-primary"> + Tambah Nilai Baru</a>


	<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilai as $n)
		<tr>
			<td>{{ $n->id }}</td>
			<td>{{ $n->normorinduksiswa }}</td>
			<td>{{ $n->nilaiangka }}</td>
			<td>{{ $n->sks }}</td>
            <td>{{-- Logika ditulis langsung di view menggunakan direktif Blade --}}
            @if($n->nilaiangka >= 80)
                A
            @elseif($n->nilaiangka >= 61)
                B
            @elseif($n->nilaiangka >= 41)
                C
            @else
                D
            @endif
        </td>
            <td>{{ ($n->nilaiangka * $n->sks) }}</td>
		</tr>

        @endforeach
	</table>
{{ $nilai->links() }}
@endsection
