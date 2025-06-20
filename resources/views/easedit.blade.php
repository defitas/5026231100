@extends('template')

@section('content')
	<h3>Edit Pegawai</h3>

    <br>
    <br>

	@foreach($my as $s)
	<form action="/eas/update" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="row mb-3">
            <label class="col-3 col-form-label">Kode Pegawai</label>
            <div class="col-8">
                <input type="text" name="kode" required="required" class="form-control" value="{{ $s->kodepegawai }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-3 col-form-label">Nama Lengkap</label>
            <div class="col-8">
                <input type="text" name="nama" required="required" class="form-control" value="{{ $s->namalengkap }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-3 col-form-label">Divisi</label>
            <div class="col-8">
                <input type="text" name="divisi" required="required" class="form-control" value="{{ $s->divisi }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-3 col-form-label">Departemen</label>
           <div class="col-8">
                <input type="text" name="depart" required="required" class="form-control" value="{{ $s->departemen }}">
            </div>
        </div>

        <div class="row">
            <div class="offset-3 col-8">
                <input type="submit" value="Simpan Perubahan" class="btn btn-success">
            </div>
        </div>
	</form>
	@endforeach

    @endsection
