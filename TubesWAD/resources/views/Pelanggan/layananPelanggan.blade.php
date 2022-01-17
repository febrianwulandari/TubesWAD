@extends('Pelanggan.Index') 
@section('title','Wools Laundry || Layanan Pelanggan') 
@section('konten')
@if (!$layanan->isEmpty())

<section>
<div class="col-md-12"  style="background-color: #E7FBFF;  margin-top:70px">
<div class="row">
  <div class="col-md-6">
    <p style="color: #164D74;font-size:40px; margin-left:100px; font-weight:bolder;  margin-top:70px">Best Service
      <br>
     at Wools Laundry
</p>
<p style="color: #164D74;margin-left:100px;font-weight:lighter;">Using modern technology to serve customers in order to provide the best laundry and dry cleaning services since 2021.</p>
<a href="/layananPelanggan"  type="button" class="btn btn-warning" style="background-color: #D16F36; margin-left: 100px; color:#ffff; width: 160px">Make an Orders</a>
</div>
  <div class="col-md-6">
  <img src=" {{asset('asset/icon.png')}}" alt=""  class="d-inline-block align-text-top" style=" margin-left : 100px; margin-bottom:100px">
  </div>
</div>
</div>
</section>

<section id="OurWork">
<div class="col-md-12">
<div class="row">
<div class="col-md-7" >
  <p style="color: #164D74;font-size:32px; margin-left:100px; font-weight:bolder; margin-top:100px">We Have Some of The Best Services
<br>Just For You 🔥</p>
</div>
  <div class="col-md-4">
  <p style="color: #164D74;font-size:18px; margin-left:100px; font-weight:lighter; margin-top:110px">the following are the best services
  <br> that we provide as a solution to your daily needs
</div>
</div>
</div>
</section>


<section>
  <section id="Layanan">
    <div class="container">
      </div>
      <div class="row" style="margin-top:100px">
      @foreach($layanan as $layan)
        <div class="col-md-3" style="margin-left:100px; margin-bottom:65px;">
          <div class="card" style=" background-color:#E7FBFF;">
            <img src="/asset/{{$layan->image}}" width="100%" height="220px" class="card-img-top">
            <div class="card-body">
                <table>
                    <tr>
                        <td>
                        <h5 class="card-title" style="color: rgb(4, 102, 163);width: 200px">{{$layan->nama_layanan}}</h5>
                        </td>
                        <td>
                        <h6 class="card-title" style="color:red">Rp. {{$layan->harga}}</h6>
                        </td>
                    </tr>
                </table>
             <p>
             {{$layan->desc}}
             </p>
              <br>
              <a href="/pelanggan/add/{{$layan->id}}" style="background-color: #01AFD0; width: 150px" class="btn btn-primary">Pilih Layanan</a>
            </div>
          </div>
        </div>

      @endforeach
    </div>
</section>
@else()
<div class="col-md-12" style="margin-bottom: 100px;">
    <h6 style="text-align: center; margin-top: 30px; color: rgb(8, 109, 109);">Tidak ada layanan tersedia / Toko sedang libur</h6>
    <h6 style="text-align: center; margin-top: 30px; color: rgb(8, 109, 109);">Harap kembali di lain waktu 🖤</h6>
</div>
@endif

@endsection