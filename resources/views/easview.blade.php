@extends('template')

@section('content')
	<h3>View Pegawai</h3>

	<a href="/eas" class="btn btn-info"> Kembali</a>

    <br>
    <br>

	@foreach($my as $s)
	<form action="/eas/view" method="get" class="form-horizontal">
		{{ csrf_field() }}

        <div class="row mb-3">
            <label class="col-3 col-form-label">Kode Pegawai</label>
            <div class="col-8">
                <input type="text" name="kode" readonly class="form-control" value="{{ $s->kodepegawai }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-3 col-form-label">Nama Lengkap</label>
            <div class="col-8">
                <input type="text" name="kode" readonly class="form-control" value="{{ $s->namalengkap }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-3 col-form-label">Divisi</label>
            <div class="col-8">
                <input type="text" name="kode" readonly class="form-control" value="{{ $s->divisi }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-3 col-form-label">Departemen</label>
           <div class="col-8">
                <input type="text" name="kode" readonly class="form-control" value="{{ $s->departemen }}">
            </div>
        </div>
	</form>
	@endforeach

    @endsection
