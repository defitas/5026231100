@extends('template')

@section('content')
	<h3>Edit Snack</h3>

	<a href="/snack" class="btn btn-info"> Kembali</a>

    <br>
    <br>

	@foreach($snack as $s)
	<form action="/snack/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $s->snack_id }}">

        <div class="row mb-3">
            <label class="col-3 col-form-label">Merek</label>
            <div class="col-8">
                <input type="text" name="merek" required="required" class="form-control" value="{{ $s->snack_merek }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-3 col-form-label">Harga</label>
            <div class="col-8">
                <input type="number" name="harga" required="required" class="form-control" value="{{ $s->snack_harga }}" min=0>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-3 col-form-label">Tersedia?</label>
            <div class="col-8">
                <input type="hidden" name="tersedia" value="0">
                <input type="checkbox" name="tersedia" value="1" {{ $s->snack_tersedia ? 'checked' : '' }}>
                <label class="form-check-label ms-2">Centang jika tersedia</label>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-3 col-form-label">Berat</label>
            <div class="col-8">
                <input type="number" name="berat" required class="form-control" value="{{ $s->snack_berat }}" step="0.01" min="0">
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
