@extends('index') 
@section('title','Wools Laundry || Home Admin') 
@section('konten')
@if (session('sukses'))
<br>
  <div class="alert-success"  style=" width: 85%; height: 50px; margin-left: 100px;">
    <p>{{ session('sukses') }}</p>
</div>
  @endif

  @if (session('gagal'))
  <div class="alert-danger"  style=" width: 75%; height: 50px; margin-left: 200px;">
    <p>{{ session('gagal') }}</p>
  </div>
  @endif

@if (!$layanan->isEmpty())
<div class="col-md-10" style="margin-left: 20px;">
    <p style="color: #164D74;margin-top:20px; margin-left:90px; font-size:30px;font-weight:bold;">Data Order</p>
    <table>
        <tr>
            <td style="width: 1500px;">
            <a href="/layanan/viewadd"  style="margin-left: 90px; margin-bottom:10px" type="button" class="btn btn-success">+ Tambah Order</a>

            </td>
            <td style="width: 320px;">
            <form action="" method="GET">
                <input type="text" name="cari" placeholder="Cari Layanan .." value="">
                <input class="btn btn-primary" type="submit" value="CARI">
            </div>
            </td>
        </tr>
    </table>
    <table class="table table-striped" style="background-color:#164D74;margin-left: 90px;">
        <thead>
            <tr>
                <th scope="col" style="color: #FFFFFF;">No</th>
                <th scope="col" style="color: #FFFFFF; ">Nama Pelanggan</th>
                <th scope="col" style="color: #FFFFFF; ">Tanggal Order</th>
                <th scope="col" style="color: #FFFFFF; ">Berat Laundry</th>
                <th scope="col" style="color: #FFFFFF; ">Status</th>
                <th scope="col" style="color: #FFFFFF; ">Harga</th>
                <th scope="col" style="color: #FFFFFF; text-align:center">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1 ?>
        @foreach($order as $orders)
            <tr>
                <th class="table-light  table-striped" scope="row">{{$no++}}</th>
                <td class="table-light  table-striped">{{$orders->nama_pelanggan}}</td>
                <td class="table-light  table-striped">{{$orders->id_layanan}}</td>
                <td class="table-light  table-striped">{{$orders->berat_laundry}}</td>
                <td class="table-light  table-striped">{{$orders->status}}</td>
                <td class="table-light  table-striped">{{$orders->harga}}</td>
                <td class="table-light  table-striped">
                    <center>
                    <a href="/layanan/delete/{{$layan->id}}" type="button" class="btn btn-danger">Delete</a>
                    <a href="/layanan/viewedit/{{$layan->id}}" type="button" class="btn btn-warning">Update</a>
                    </center>
                </td>

            </tr>
            @endforeach
    </table>

</div>

@else()
<div class="col-md-12" style="margin-bottom: 100px;">
    <h6 style="text-align: center; margin-top: 30px; color: rgb(8, 109, 109);">There is no data ....</h6>
<center><a href="/layanan/viewadd"><button type="submit" class="btn btn-success">Tambah Layanan +</button></a></center>
</div>
@endif

@endsection