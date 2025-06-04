@extends('template')

@section('content')
	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br>
    <br>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}">

        <div class="row mb-3">
            <label class="col-3 col-form-label">Nama</label>
            <div class="col-8">
                <input type="text" name="nama" required="required" class="form-control" value="{{ $p->pegawai_nama }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-3 col-form-label">Jabatan</label>
            <div class="col-8">
                <input type="text" name="jabatan" required="required" class="form-control" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-3 col-form-label">Umur</label>
            <div class="col-8">
                <input type="number" name="umur" required="required" class="form-control" value="{{ $p->pegawai_umur }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-3 col-form-label">Alamat</label>
            <div class="col-8">
                <textarea name="alamat" required="required" class="form-control">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="offset-3 col-8">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>
        </div>
	</form>
	@endforeach

    @endsection
