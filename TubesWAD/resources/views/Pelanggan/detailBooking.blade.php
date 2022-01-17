@extends('Pelanggan.Index') 
@section('title','Wools Laundry ||Detail Pesanan') 
@section('konten')

@foreach($book as $b)
<h2 style="text-align: center; font-size:26px; margin-top:90px; color: rgb(8, 109, 109);">Detail Invoice-{{$b->id}}</h2>
<center><div class="col-md-5" style="border-radius:10px;text-align:left; border: 2px solid #E7FBFF;margin-top: 20px; margin-bottom :100px; padding:20px  " >
<p style="font-size:12px;">
Tanggal dan Waktu :
</p>
<h5>{{$b->tanggal_booking}}</h5>
<p  style="font-size:12px;">
Nama Customer:
</p>
<h5>{{auth()->user()->name}}</h5>
<p  style="font-size:12px;">
Layanan :
</p>
<h5>{{$b->layanans->nama_layanan}}</h5>
<p  style="font-size:12px;">
Berat Laundry :
</p>
<h5>{{$b->berat_laundry}} KG</h5>
<p  style="font-size:12px;">
Total Biaya :
</p>
<h5>{{$b->berat_laundry*$b->harga}}</h5>
<table style="margin-top: 30px;">
    <tr>
        <td><a href="/home" style="background-color: #01AFD0; width: 250px; margin-right:20px;" class="btn btn-primary" >Selesai</a></td>
        <td><a href="/pelanggan/booking/pembayaran/{{$b->id}}" style=" width: 250px" class="btn btn-success">Pembayaran</a></td>
    </tr>
</table>
</div>

@endforeach

@endsection