@extends('index') 
@section('title','Wools Laundry || Data Order Admin') 
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

@if (!$bookings->isEmpty())
<div class="col-md-10" style="margin-left: 20px; margin-top:80px">
    <p style="color: #164D74;margin-top:20px; margin-left:90px; font-size:30px;font-weight:bold;">Data Orders</p>
    <table>
        <tr>
            <td style="width: 1500px;">
            <form action="" method="GET">
        	</form>
            </td>
        </tr>
    </table>

    <table class="table table-striped" style="background-color:#164D74;margin-left: 90px;margin-bottom:100px">
        <thead>
            <tr>
                <th scope="col" style="color: #FFFFFF;">No</th>
                <th scope="col" style="color: #FFFFFF; ">Nama Layanan</th>
                <th scope="col" style="color: #FFFFFF; ">Tanggal Booking</th>
                <th scope="col" style="color: #FFFFFF; ">Berat Laundry</th>
                <th scope="col" style="color: #FFFFFF; ">Status</th>
                <th scope="col" style="color: #FFFFFF; text-align:center ">Detail</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1 ?>
        @foreach($bookings as $book)
            <tr>
                <th class="table-light  table-striped" scope="row">{{$no++}}</th>
                <td class="table-light  table-striped">{{$book->layanans->nama_layanan}}</td>
                <td class="table-light  table-striped">{{$book->tanggal_booking}}</td>
                <td class="table-light table-striped">{{$book->berat_laundry}}</td>
                <td class="table-light  table-striped">{{$book->status}}</td>
                <td class="table-light  table-striped" style="text-align:center ; color: #ffff">
                    <div class="d-flex">
                    <form action="/orders/update" method="POST">
                    @csrf
                    @METHOD('PUT')
                    <input type="hidden" name="id" value="{{$book->id}}" class="form-control" id="id" required>
                    <input type="hidden" name="status" value="Done" class="form-control" id="status" required>
                    <input type="submit" class="btn btn-warning" value="Acc Order"></a>
                    <a href="/orders/hapus/{{$book->id}}" class="btn btn-danger">Delete</a>      
                    </form>
                    </div>       
                </td>
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

