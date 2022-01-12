@extends('Pelanggan.Index') 
@section('title','Wools Laundry || Layanan Pelanggan') 
@section('konten')
@if (!$layanan->isEmpty())
<section>
  <section id="Layanan">
    <div class="container">
     
        <div class="col">
        <p style="color: #164D74;margin-top:20px; font-size:30px;font-weight:bold; margin-left:-20px">Informasi Layanan</p>
        </div>
      </div>
      <div class="row">
      @foreach($layanan as $layan)
        <div class="col-md-3" style="margin-left:100px; margin-bottom:65px">
          <div class="card">
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
              <a href="/pelanggan/add/{{$layan->id}}" class="btn btn-primary">Pilih Layanan</a>
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