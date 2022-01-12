@extends('Pelanggan.Index') 
@section('title','Wools Laundry ||Tambah Booking') 
@section('konten')

@foreach($layans as $lay)
<h2 style="text-align: center; margin-top: 30px; color: rgb(8, 109, 109);">Order Layanan {{$lay->nama_layanan}} </h2>
@endforeach
<center><div class="col-md-8" style="text-align: left;">

<form action="/pelanggan/booking/create" method="POST">
@csrf
@foreach($layans as $lay)
  <label for="exampleFormControlInput1" class="form-label">ID Layanan</label>
  <input type="text" name="id_layanan" value="{{$lay->id}}" class="form-control" id="id_layanan" readonly>
  @endforeach

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tanggal Booking</label>
  <input type="date" name="tanggal_booking" class="form-control" id="tanggal_booking" required>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Berat Laundry</label>
  <input type="number" name="berat_laundry" class="form-control" id="berat_laundry" required>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Status</label>
  <input type="text" name="status" value="Waiting" class="form-control" id="status" required readonly>
</div>
@foreach($layans as $lay)
<div class="mb-3">
  <input type="hidden" name="harga" value="{{$lay->harga}}" class="form-control" id="harga" required>
</div>
@endforeach
<div class="mb-3">
  <input type="hidden" name="nama_pelanggan" class="form-control" value="{{Auth::user()->name}}" id="nama_pelanggan" required>
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary"> Order Laundry </button>
</div>
</form>
</div></center>
@endsection