@extends('Pelanggan.IndexPelanggan') 
@section('title','Wools Laundry || Home Pelanggan') 
@section('konten')

<section>
<div class="col-md-12"  style="background-color: #E7FBFF; margin-top:70px">
<div class="row">
  <div class="col-md-6">
    <p style="color: #164D74;font-size:40px; margin-left:100px; font-weight:bolder; margin-top:70px">Indonesia 
      <br>
      First Choice in 
      <br>
      Dry Cleaning
</p>
<p style="color: #164D74;margin-left:100px;font-weight:lighter;">Using modern technology to serve customers in order to provide the best laundry and dry cleaning services since 2021.</p>
<a href="/homePelanggan"  type="button" class="btn btn-warning" style="background-color: #D16F36; margin-left: 100px; color:#ffff; width: 160px">LEARN MORE</a>
</div>
  <div class="col-md-6">
  <img src=" {{asset('asset/icon.png')}}" alt=""  class="d-inline-block align-text-top" style=" margin-left : 100px; margin-bottom:100px">
  </div>
</div>
</div>
</section>



<section id="fitur">
  <div class="col-md-10" style="background-color:FAFAFA; margin-left:100px">
    <div class="row">
    <div class="col-md-3">
    <img src=" {{asset('asset/d.png')}}" alt=""  class="d-inline-block align-text-top" style=" margin-left : 100px; margin-top:35px;">
    <p style=" margin-left : 115px; margin-top:10px; color:#72A4A5; font-size: 20px; font-weight:bold"> Laundry  </p>
  </div>
  <div class="col-md-3">
    <img src=" {{asset('asset/a.png')}}" alt="" width="70" height="70" class="d-inline-block align-text-top" style=" margin-left : 80px; margin-top:35px;">
    <p style=" margin-left : 65px; margin-top:15px; color:#72A4A5; font-size: 20px; font-weight:bold"> Iron Clothes   </p>
  </div>
  <div class="col-md-3">
    <img src=" {{asset('asset/b.png')}}" alt=""  width="70" height="70" class="d-inline-block align-text-top" style=" margin-left : 80px; margin-top:35px;">
    <p style=" margin-left : 60px; margin-top:15px; color:#72A4A5; font-size: 20px; font-weight:bold"> Wet Cleaning  </p> </p>
  </div>
  <div class="col-md-3">
    <img src=" {{asset('asset/c.png')}}" alt=""  width="70" height="70" class="d-inline-block align-text-top" style="margin-left : 90px; margin-top:35px;">
    <p style=" margin-left : 75px; margin-top:15px; color:#72A4A5; font-size: 20px; font-weight:bold"> Dry Cleaning  </p>
  </div>
    </div>
    <br>
  </div>
  <br>
  <br>
</section>

<section id="OurWork">
<div class="col-md-12">
<div class="row">
  <p style="color: #164D74;font-size:40px; font-weight:bolder; text-align:center;margin-top:20px">How washted works🔥</p>
  <p style="color: #164D74; font-size:18px; margin-bottom:80px;  text-align:center; font-weight:lighter;">The following is a laundry workflow</p>
</div>
</div>
</section>

<section id="howorder">
<div class="col-md-12">
<div class="row">
  <div class="col-md-5">
  <img src=" {{asset('asset/capture.png')}}" alt=""  class="d-inline-block align-text-top" style=" margin-left : 100px; margin-bottom:100px">
</div>
  <div class="col-md-6">
 
  <p style="color: #164D74;font-size:40px; margin-left:100px; font-weight:bolder; margin-top:30px">How to Order's ?
</p>
<p style="color: #164D74;margin-left:100px;font-weight:lighter;">Here are the steps to order Wools Laundry services :</p>
<table>
  <tr>
    <td>
    <img src=" {{asset('asset/Vector.png')}}" alt="" width="25" class="d-inline-block align-text-top" style=" margin-left : 100px; ">
    </td>
    <td>
    <p style="margin-top: 10px; color: #164D74; margin-left:20px">Enter your laundry data and select a service</p>
    </td>
  </tr>
  <tr>
    <td>
    <img src=" {{asset('asset/2.png')}}" alt="" width="25" class="d-inline-block align-text-top" style=" margin-left : 100px; ">
    </td>
    <td>
    <p style="margin-top: 10px; color: #164D74;margin-left:20px">Wait until the laundry is finished processing</p>
    </td>
  </tr>
  <tr>
    <td>
    <img src=" {{asset('asset/3.png')}}" alt="" width="25" class="d-inline-block align-text-top" style=" margin-left : 100px; ">
    </td>
    <td>
    <p style="margin-top: 10px; color: #164D74; margin-left:20px">make a laundry payment</p>
    </td>
  </tr>
  <tr>
    <td>
    <img src=" {{asset('asset/4.png')}}" alt="" width="25" class="d-inline-block align-text-top" style=" margin-left : 100px; ">
    </td>
    <td>
    <p style="margin-top: 10px;color: #164D74; margin-left:20px">laundry is complete and ready to be delivered</p>
    </td>
  </tr>
</table>
<br>
<a href="/login"  type="button" class="btn btn-primary" style="background-color:#72A4A5; margin-left: 100px; color:#ffff; width: 160px">Make an Order</a>
</div>
</div>
</div>
</section>
<section id="OurWork">
<div class="col-md-12">
<div class="row">
  <p style="color: #164D74;font-size:40px; margin-left:100px; font-weight:bolder; margin-top:10px">We Pickup & Delivery !</p>
  <div class="col-md-7">
    <p style="color: #164D74; margin-left:100px; font-weight:lighter; margin-top:10px">
    We have one feature that we really like, namely the Pickup and Delivery feature.
    <br>
    This feature will make it easier for you to order laundry because you
    <br>
    don't need to leave the house to deliver the laundry to the place.
    <br>
     the price of this service starts from Rp. 2000 / KM,
     <br> depending on the distance from the laundry 
     <br>
     pick-up house to where the laundry is located
    </p>
    <a href="/login"  type="button" class="btn btn-warning" style="background-color:#D16F36; margin-top:10px; margin-left: 100px; color:#ffff; width: 160px">Make an Order</a>
  </div>
  <div class="col-md-4">
  <img src=" {{asset('asset/delivery.jpg')}}" alt="" width="90%"  class="d-inline-block align-text-top" style=" margin-bottom:100px">
</div>
</div>
</div>
</section>

<section id="OurServices">
<div class="col-md-12" style="background-color: #E7FBFF;">
<div class="row">
<center>  <p style="color: #164D74;font-size:40px; font-weight:bolder; margin-top:20px">Our Services</p></center>
<img src=" {{asset('asset/testi2.png')}}" alt=""class="d-inline-block align-text-top" style=" margin-bottom:30px">

</div>
</div>
</section>

@endsection