@extends('template')

@section('content')
<h3>Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-info"> Kembali</a>

    <br>
    <br>

	<form action="/karyawan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Kode Pegawai </label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="kode" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Nama Lengkap</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="namalengkap" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Divisi</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="divisi" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Departemen</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="departemen" required>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
