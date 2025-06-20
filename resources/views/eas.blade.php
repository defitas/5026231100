@extends('template')

@section('content')
	<h3>Data Pegawai</h3>

	<br/>

	<table class="table table-striped">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Action</th>
		</tr>
		@foreach($my as $k)
        <tr>
			<td>{{ $k->kodepegawai }}</td>
            <td>{{ ucwords($k->namalengkap) }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ $k->departemen }}</td>
            <td>
                <a href="/eas/edit/{{ $k->kodepegawai }}" class="btn btn-warning">Edit</a>
                <a href="/eas/view/{{ $k->kodepegawai }}" class="btn btn-info">View</a></td>
		</tr>
		@endforeach
	</table>

    @endsection
