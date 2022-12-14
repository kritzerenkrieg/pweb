@extends("kentaro")
<body>
    @section('test 1')
	<a href="/pegawai" class="btn btn-primary"> Kembali</a>
    @endsection

    @section('test 2')
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group row">
            <label for="inputnama" class="col-sm-2 col-form-label">Nama User</label>
            <div class="col-sm-10">
	    <input type="text" required="required" name="nama" placeholder="Nama" value="{{ $p->pegawai_nama }}"> </div></div>
        <div class="form-group row">
            <label for="jabaran" class="col-sm-2 col-form-label">Jabatan User</label>
            <div class="col-sm-10">
        <input type="text" required="required" name="jabatan" placeholder="Jabatan" value="{{ $p->pegawai_jabatan }}"> <br/></div></div>
        <div class="form-group row">
            <label for="inputnama" class="col-sm-2 col-form-label">Umur</label>
            <div class="col-sm-10">
        <input type="number" placeholder="Umur" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/> </div></div>
        <div class="form-group row">
            <label for="inputnama" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
        <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<br> <input type="submit" class="btn btn-primary" value="Simpan Data"></div></div>
	</form>
	@endforeach
    @endsection

</body>
</html>
