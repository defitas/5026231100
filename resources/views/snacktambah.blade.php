@extends('template')

@section('content')
<h3>Data Snack</h3>

	<a href="/snack" class="btn btn-info"> Kembali</a>

    <br>
    <br>

	<form action="/snack/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Merek
            </div>
            <div class="col-8">
                <input type="text" name="merek" required="required" class="form-control"><br />
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Harga
            </div>
            <div class="col-8">
                <input type="number" name="harga" required class="form-control" min="0"><br />
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Tersedia?
            </div>
            <div class="col-8">
                <input type="hidden" name="tersedia" value="0">
                <input type="checkbox" name="tersedia" value="1" id="tersedia">
                <label for="tersedia" class="form-check-label ms-2">Centang jika tersedia</label><br />
            </div>
        </div>
<br />
        <div class="row">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
                <input type="number" name="berat" required class="form-control" step="0.01" min="0"><br />
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
