@extends('template')

@section('content')
	<h3>Data Karyawan</h3>

	<br/>

	<table class="table table-striped">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Action</th>
		</tr>
		@foreach($karyawan as $k)
        <tr>
			<td>{{ $k->kodepegawai }}</td>
            <td>{{ strtoupper($k->namalengkap) }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ strtolower($k->departemen) }}</td>
            <td>
                <a href="/karyawan2/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
		</tr>
		@endforeach
	</table>

    	<a href="/karyawan2/tambah" class="btn btn-primary">Tambah Data</a>

{{ $karyawan->links() }}
    @endsection
