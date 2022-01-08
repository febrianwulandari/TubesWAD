@extends('index') 
@section('title','Wools Laundry || Pelanggan') 
@section('konten')
<br>
@if (session('sukses'))

  <div class="alert-success"  style=" width: 83%; height: 50px; margin-left: 110px;">
    <p>{{ session('sukses') }}</p>
</div>
  @endif

  @if (session('gagal'))
  <div class="alert-danger"  style=" width: 83%; height: 50px; margin-left: 110px;">
    <p>{{ session('gagal') }}</p>
  </div>
  @endif

@if (!$pelanggan->isEmpty())

<div class="col-md-10" style="margin-left: 20px;">
    <p style="color: #164D74;margin-top:20px; margin-left:90px; font-size:30px;font-weight:bold;">Data Pelanggan</p>
    <a href="/pelanggan/viewadd"  style="margin-left: 90px; margin-bottom:10px" type="button" class="btn btn-success">+ Tambah Pelanggan</a>
    <table class="table table-striped" style="background-color:#164D74;margin-left: 90px;">
        <thead>
            <tr>
                <th scope="col" style="color: #FFFFFF;">No</th>
                <th scope="col" style="color: #FFFFFF;">Nama Pelanggan</th>
                <th scope="col" style="color: #FFFFFF;">Email</th>
                <th scope="col" style="color: #FFFFFF;">Password</th>
                <th scope="col" style="color: #FFFFFF;">Alamat</th>
                <th scope="col" style="color: #FFFFFF;  text-align:center">Action</th>
            </tr>
        </thead>
        <?php $no = 1 ?>
        @foreach($pelanggan as $pel)
        <tbody>
            <tr>
                <th class="table-light  table-striped" scope="row">{{$no++}}</th>
                <td class="table-light  table-striped">{{ $pel->nama_pelanggan}}</td>
                <td class="table-light table-striped">{{ $pel->email}}</td>
                <td class="table-light  table-striped">{{ $pel->password}}</td>
                <td class="table-light  table-striped">{{ $pel->alamat}}</td>
                <td class="table-light  table-striped">
                    <center>
                    <a href="/pelanggan/delete/{{$pel->id}}" type="button" class="btn btn-danger">Delete</a>
                    <a href="/pelanggan/viewedit/{{$pel->id}}" type="button" class="btn btn-warning">Update</a>
                    </center>
                </td>

            </tr>
            @endforeach
    </table>
</div>

@else()
<div class="col-md-12" style="margin-bottom: 100px;">
    <h6 style="text-align: center; margin-top: 30px; color: rgb(8, 109, 109);">There is no data ....</h6>
<center><a href="/pelanggan/viewadd"><button type="submit" class="btn btn-success">Tambah Pelanggan +</button></a></center>
</div>
@endif


@endsection