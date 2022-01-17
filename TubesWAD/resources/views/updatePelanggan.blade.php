@extends('index') 
@section('title','Wools Laundry ||Update Pelanggan') 
@section('konten')

<h2 style="text-align: center; margin-top: 30px; color: rgb(8, 109, 109);">Update Data Layanan</h2>
<center><div class="col-md-10" style="text-align: left;">

<form action="/pelanggan/update" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
<input type="hidden" name="id" value="{{ $pel->id }}"> <br/>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Pelanggan</label>
  <input type="text" name="name" id="name" value="{{ $pel->name}}" class="form-control" id="exampleFormControlInput1" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" name="email" id="email" value="{{ $pel->email}}" class="form-control" id="exampleFormControlInput1" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" name="password" id="password" value="{{ $pel->password}}" class="form-control" id="exampleFormControlInput1" required>
</div>
<div class="mb-3">
<button type="submit" class="btn btn-warning"> Update Data </button>
</form>
@endforeach
</div></center>
@endsection