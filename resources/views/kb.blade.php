@extends('template')

@section('content')
	<h3>Keranjang Belanja</h3>

	<a href="/kb/tambah" class="btn btn-primary">Beli</a>

	<p>Cari Kode Barang :</p>
<form action="/kb/cari" method="GET">
	<input type="text" class="form-control" name="cari" placeholder="Cari Kode Barang ..">
	<input type="submit" value="CARI" class="btn btn-info">
</form>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
            <th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($kb as $k)
        <tr>
			<td>{{ $k->kb_id }}</td>
            <td>{{ $k->kb_kode }}</td>
            <td>{{ $k->kb_jumlah }}</td>
            <td>{{ number_format($k->kb_harga, 0, ',', '.') }}</td>
            <td>{{ number_format($k->kb_jumlah * $k->kb_harga, 0, ',', '.') }}</td>
            <td>
                <a href="/kb/hapus/{{ $k->kb_id }}" class="btn btn-danger">Batal</a>
		</tr>
		@endforeach
	</table>
{{ $kb->links() }}
    @endsection
