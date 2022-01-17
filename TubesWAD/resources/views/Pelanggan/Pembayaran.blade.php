@extends('Pelanggan.Index') 
@section('title','Wools Laundry ||Pembayaran') 
@section('konten')

@foreach($pembayaran  as $pem)
<h2 style="text-align: center; margin-top: 30px; color: rgb(8, 109, 109);">Pembayaran {{$pem->id}}</h2>
@endforeach
<center><div class="col-md-8" style="text-align: left;">
<form action="/pelanggan/booking/updatepembayaran" enctype="multipart/form-data" method="POST">
@csrf
@foreach($pembayaran  as $pem)
<input type="hidden" name="id" value="{{$pem->id}}" class="form-control" id="id" required>
<input type="hidden" name="status" value="Acc" class="form-control" id="status" required>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Total Bayar</label>
  <input type="number" name="total_bayar" value="{{$pem->berat_laundry*$pem->harga}}" class="form-control" id="total_bayar" required readonly>
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Bukti Pembayaran</label>
  <input name="image" class="form-control" value="{{$pem->image}}" type="file" id="formFile" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tanggal Pembayaran</label>
  <input type="date" name="tanggal_pembayaran" value="{{$pem->tanggal_pembayaran}}" class="form-control" id="tanggal_pembayaran" required>
</div>
@endforeach
<div class="mb-3">
<button type="submit" class="btn btn-primary">Pembayaran</button>
</div>
</form>
</div></center>
@endsection