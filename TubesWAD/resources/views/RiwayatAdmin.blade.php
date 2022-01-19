@extends('index') 
@section('title','Wools Laundry || Pelanggan') 
@section('konten')
@if (session('sukses'))
<br>
  <div class="alert-success"  style=" width: 85%; height: 50px; margin-top: 70px ; margin-left: 100px;">
    <p>{{ session('sukses') }}</p>
</div>
  @endif

  @if (session('gagal'))
  <div class="alert-danger"  style=" width: 75%; height: 50px; margin-left: 200px; margin-top: 70px ; ">
    <p>{{ session('gagal') }}</p>
  </div>
  @endif

@if (!$booking->isEmpty())
<div class="col-md-10" style="margin-left: 20px; margin-top:80px">
    <p style="color: #164D74;margin-top:20px; margin-left:90px; font-size:30px;font-weight:bold;">Data Riwayat</p>
    <table class="table table-striped" style="background-color:#164D74;margin-left: 90px;margin-bottom:100px">
        <thead>
            <tr>
                <th scope="col" style="color: #FFFFFF;">No</th>
                <th scope="col" style="color: #FFFFFF; ">Nama User</th>
                <th scope="col" style="color: #FFFFFF; ">Tanggal Booking</th>
                <th scope="col" style="color: #FFFFFF; ">Tanggal Selesai</th>
                <th scope="col" style="color: #FFFFFF; ">Total Pembayaran</th>
                <th scope="col" style="color: #FFFFFF; ">Bukti Pembayaran</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1 ?>
        @foreach($booking as $book)
            <tr>
                <th class="table-light  table-striped" scope="row">{{$no++}}</th>
                <td class="table-light  table-striped">{{$book->id_user}}</td>
                <td class="table-light  table-striped">{{$book->tanggal_booking}}</td>
                <td class="table-light table-striped">{{$book->tanggal_pembayaran}}</td>
                <td class="table-light  table-striped">{{$book->total_bayar}}</td>
                <td class="table-light  table-striped"><img src="/asset/{{$book->image}}" class="card-img-top" height="70px" width="60px" alt="..."></td>
                <td class="table-light  table-striped" style="text-align:center ; color: #ffff">
            </tr>
            @endforeach
    </table>

</div>

@else()
<div class="col-md-12" style="margin-bottom: 100px; margin-top:100px">
    <h6 style="text-align: center; margin-top: 30px; color: rgb(8, 109, 109);">There is no data ....</h6>
</div>
@endif
@endsection