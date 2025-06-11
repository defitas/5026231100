@extends('template')

@section('content')
<h3>Keranjang Belanja</h3>

	<a href="/kb" class="btn btn-info"> Kembali</a>

    <br>
    <br>

	<form action="/kb/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Kode Barang
            </div>
            <div class="col-8">
                <input type="text" name="kode" required="required" class="form-control"><br />
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Jumlah Pembelian
            </div>
            <div class="col-8">
                <input type="text" name="jumlah" required class="form-control"><br />
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Harga per item
            </div>
            <div class="col-8">
                <input type="text" name="harga" required class="form-control"><br />
            </div>
        </div>

        <input type="submit" value="Simpan Pembelian" class="btn btn-success">
    </form>
@endsection
