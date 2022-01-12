@extends('index') 
@section('title','Wools Laundry || Layanan') 
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
    <p style="color: #164D74;margin-top:20px; margin-left:90px; font-size:30px;font-weight:bold;">Data Layanan</p>
    <table>
        <tr>
            <td style="width: 1500px;">
            <a href="/layanan/viewadd"  style="margin-left: 90px; margin-bottom:10px" type="button" class="btn btn-success">+ Tambah Layanan</a>
            </td>
        </tr>
    </table>
    <table class="table table-striped" style="background-color:#164D74;margin-left: 90px;">
        <thead>
            <tr>
                <th scope="col" style="color: #FFFFFF;">No</th>
                <th scope="col" style="color: #FFFFFF; ">Nama Layanan</th>
                <th scope="col" style="color: #FFFFFF; ">Harga</th>
                <th scope="col" style="color: #FFFFFF; ">Deskripsi</th>
                <th scope="col" style="color: #FFFFFF; text-align:center">Gambar</th>
                <th scope="col" style="color: #FFFFFF; text-align:center">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1 ?>
        @foreach($layanan as $layan)
            <tr>
                <th class="table-light  table-striped" scope="row">{{$no++}}</th>
                <td class="table-light  table-striped">{{$layan->nama_layanan}}</td>
                <td class="table-light table-striped">RP. {{$layan->harga}}</td>
                <td class="table-light  table-striped">{{$layan->desc}}</td>
                <td class="table-light  table-striped"><img src="/asset/{{$layan->image}}" class="card-img-top" height="100px" alt="..."></td>
                <td class="table-light  table-striped">
                    <center>
                    <a href="/layanan/viewedit/{{$layan->id}}" type="button" class="btn btn-warning">Update</a>
                    <a href="/layanan/delete/{{$layan->id}}" type="button" class="btn btn-danger">Delete</a>
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