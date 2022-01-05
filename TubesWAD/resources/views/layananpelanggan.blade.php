@extends('index')
@section('title','Wools Laundry || Layanan')
@section('konten')

<div class="col-md-11" style="margin-left: 20px;">
    <div class="row">
    <div class="col-md-6">
    <p style="color: #164D74;margin-top:20px; margin-left:90px; font-size:30px;font-weight:bold;">Layanan Tersedia</p>
    </div>
    <div class="col-md-5">
        <button style=" margin-left: 340px;margin-top:25px;" type= "submit" name="submit" class="btn btn-success">Tambah Data</button>
    </div>
</div>
</div>
<div class="col-md-11" style="margin-left: 20px;">
<div class="row">
<div class="card" style="width: 18rem; margin-left: 100px;">
  <img src="" class="card-img-top" alt="...">
  <div class="card-body">
      <table>
          <tr>
              <td> <h5 class="card-title">Judul</h5></td>
              <td><h6 class="card-title">Harga</h6> </td>
          </tr>
          <tr><td><p class="card-text">Deskripsi</p><td></tr>
          <tr><td><a href="#" class="btn btn-primary">Edit Layanan</a></td></tr>
      </table>
   


  </div>
</div>
</div>
</div>
</div>

@endsection