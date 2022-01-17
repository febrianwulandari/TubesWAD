@extends('Pelanggan.Index') 
@section('title','Wools Laundry ||Riwayat Pesanan') 
@section('konten')

<section>
            <div class="col-md-11" style="margin-left: 20px; margin-top:70px">
                <div class="row">
                <div class="col-md-6">
                <p style="color: #164D74;margin-top:20px; margin-left:90px; font-size:30px;font-weight:bold;">Riwayat Order</p>
                </div>
                @foreach($booking as $bo)
                <div class="col-md-10" style=" border: 2px solid grey; border-radius:10px; padding:20px; margin-left:100px; margin-top:10px; margin-bottom:10px">
                <p  style="font-weight: bold; color: #395569">Nama Pelanggan : {{ auth()->user()->name }}</p>
                <p  style="font-weight: bold; color: #395569">Tanggal Cucian : {{ $bo->berat_laundry }}</p>
                <p  style="font-weight: bold; color: #395569">Jenis Layanan  : {{ $bo->layanans->nama_layanan }}</p>
                <table>
                    <tr>
                        <td>
                        <a class="btn btn-warning" href="" role="button" style="margin-left: 50rem; width:200px; height:45px" >Cetak Nota</a>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            @endforeach
            </div>
            </div>               
</section>

@endsection