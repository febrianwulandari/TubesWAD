@extends('index') 
@section('title','Wools Laundry ||Tambah Pelanggan') 
@section('konten')

<h2 style="text-align: center; margin-top: 30px; color: rgb(8, 109, 109);">Input Data Layanan</h2>

<center><div class="col-md-10" style="text-align: left;">
<form action="/layanan/add" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Layanan</label>
  <input type="text" name="nama_layanan" class="form-control" id="exampleFormControlInput1" required>
</div>
<div class="mb-3">
    <label for="validationCustomUsername" class="form-label">Harga</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">Rp</span>
      <input type="number" name="harga" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
    </div>
  </div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Image</label>
  <input name="image" class="form-control" type="file" id="formFile" required>
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary"> Submit Data </button>
</form>
</div></center>
@endsection