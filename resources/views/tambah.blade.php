@extends('kentaro')
<body>
    @section('test 1')
	<a href="/pegawai" class="btn btn-primary"> Kembali</a>
    @endsection

@section('test 2')
	<form action="/pegawai/store" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id"> <br/>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Nama User</label>
                <div class="col-sm-10">
            <input type="text" required="required" name="nama" placeholder="Nama"> </div></div>
            <div class="form-group row">
                <label for="jabaran" class="col-sm-2 col-form-label">Jabatan User</label>
                <div class="col-sm-10">
            <input type="text" required="required" name="jabatan" placeholder="Jabatan"> <br/></div></div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
            <input type="number" placeholder="Umur" required="required" name="umur"> <br/> </div></div>
            <div class="form-group row">
                <label for="inputnama" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
            <textarea required="required" name="alamat"></textarea> <br/>
            <br> <input type="submit" class="btn btn-primary" value="Simpan Data"></div></div>
	</form>
@endsection

</body>
