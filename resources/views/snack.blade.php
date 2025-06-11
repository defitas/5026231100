@extends('template')

@section('content')
	<h3>Data Snack</h3>

	<a href="/snack/tambah" class="btn btn-primary"> + Tambah Snack Baru</a>

	<p>Cari Data Snack :</p>
<form action="/snack/cari" method="GET">
	<input type="text" class="form-control" name="cari" placeholder="Cari Snack ..">
	<input type="submit" value="CARI" class="btn btn-info">
</form>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Merek</th>
			<th>Harga</th>
			<th>Tersedia?</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($snack as $s)
        <tr>
			<td>{{ $s->snack_merek }}</td>
			<td>Rp{{ number_format($s->snack_harga, 0, ',', '.') }}</td>
			<td>
		        @if($s->snack_tersedia)
			        <p class="text-success">Tersedia</p>
		        @else
			        <p class="text-danger">Tidak Tersedia</p>
		        @endif
	        </td>
            <td>{{ $s->snack_berat }} gram</td>
			<td>
				<a href="/snack/edit/{{ $s->snack_id }}" class="btn btn-success">Edit</a>
				|
				<a href="/snack/hapus/{{ $s->snack_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
{{ $snack->links() }}
    @endsection
