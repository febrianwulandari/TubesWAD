@extends('index') 
@section('title','Wools Laundry || Dashboar Admin') 
@section('konten')
<br>
<div class="col-md-12" style="margin-left: 20px; margin-top:50px">
<p style="color: #164D74; font-size:20px; font-weight:bolder; margin-left:90px;">Dashboard Admin </p>
<div class="row">
<div class="col-md-3" style="background-color: white; height:150px;margin-left:100px; border-radius:5px">
<table>
<tr>
    <td>
        <img src="{{asset('asset/wools2.png')}}" alt=... width="110px" height="110px" style="padding: 10px;">
    </td>
    <td>
       
        <p style="font-size:24px;">
            PENDAPATAN
        </p>
        <p style="font-size:40px; font-weight:bolder; margin-top:-20px">
            100000
        </p>
    </td>
</tr>
</table>

</div>
<div class="col-md-3" style="background-color: white; height:150px;margin-left:60px;  border-radius:5px">
<table>
<tr>
    <td>
        <img src="{{asset('asset/wools2.png')}}" alt=... width="110px" height="110px" style="padding: 10px;">
    </td>
    <td>
       
        <p style="font-size:24px;">
        ORDERS
        </p>
        <p style="font-size:40px; font-weight:bolder; margin-top:-20px">
            100
        </p>
    </td>
</tr>
</table>
</div>
<div class="col-md-3" style="background-color: white; height:150px;margin-left:60px;  border-radius:5px">
<table>
<tr>
    <td>
        <img src="{{asset('asset/wools2.png')}}" alt=... width="110px" height="110px" style="padding: 10px;">
    </td>
    <td>
       
        <p style="font-size:24px;">
            PELANGGAN
        </p>
        <p style="font-size:40px; font-weight:bolder; margin-top:-20px">
            100
        </p>
    </td>
</tr>
</table>
</div>
</div>
<!-- @foreach($layanan as $layan)
    <p style="margin-left: 90px;"> Tampil Jumlah Layanan : {{$layan->nama_layanan}} = {{$total_layanan[$loop->index]}}</p>
    @endforeach
    <p style="margin-left: 90px;"> Tampil Jumlah Pendapatan : {{$total}}</p>
</div>
@endsection -->

