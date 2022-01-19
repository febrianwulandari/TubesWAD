@extends('index') 
@section('title','Wools Laundry ||Tambah Pelanggan') 
@section('konten')

<h2 style="text-align: center; margin-top: 30px; color: rgb(8, 109, 109);">Input Data Pelanggan</h2>

<center><div class="col-md-10" style="text-align: left;">
<form action="/pelanggan/add/admin" method="POST" enctype="multipart/form-data">
@csrf
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Pelanggan</label>
  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" id="exampleFormControlInput1" required>
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary"> Submit Data </button>
</form>
</div></center>
@endsection