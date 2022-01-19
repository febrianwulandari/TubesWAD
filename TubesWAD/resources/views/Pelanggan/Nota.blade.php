<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Download Laporan Keuangan</title>
  </head>
  <body>
    <div class="container">
       <center> <h5>NOTA PEMBAYARAN</h5></center>
       <br>
       <center><hr width="100%"></center>
       <p style="font-size:12px; font-weight:bold">
       Nota Wools Laundry-{{auth::user()->id}}<br>
       PT.Wools Laundry INDONESIA<br>
       <br>
       Berikut ini kami lampirkan Nota Pembayaran kepada :
       <p style="font-size: 12px;">Nama : {{auth()->user()->name}} </p>
       @foreach($data as $b)
       <p style="font-size: 12px;">ID_Order : {{$b->id}}</p>
       <p style="font-size: 12px;">Layanan : {{$b->layanans->nama_layanan}}</p>
       @endforeach
        <div class="row">
            <table class="table table-striped mt-3">
                <tr>
                <th scope="col" style="color: black; font-size:12px ">No</th>
                <th scope="col" style="color: black; font-size:12px ">Berat Laundry</th>
                <th scope="col" style="color: black; font-size:12px  ">Harga Layanan</th>
                <th scope="col" style="color: black; font-size:12px ">Tanggal Booking</th>
                <th scope="col" style="color: black; font-size:12px ">Tanggal Selesai</th>
                <th scope="col" style="color: black; font-size:12px ">Total Pembayaran</th>
            </tr>
        <tbody>
        <?php $no = 1 ?>
        @foreach($data as $book)
            <tr>
                <th class="table-light   table-striped" scope="row" style="color: black; font-size:12px ">{{$no++}}</th>
                <td class="table-light  table-striped" style="color: black; font-size:12px ">{{$book->berat_laundry}}</td>
                <td class="table-light table-striped" style="color: black; font-size:12px ">{{$book->harga}}</td>
                <td class="table-light  table-striped" style="color: black; font-size:12px ">{{$book->tanggal_booking}}</td>
                <td class="table-light table-striped" style="color: black; font-size:12px ">{{$book->tanggal_pembayaran}}</td>
                <td class="table-light  table-striped" style="color: black; font-size:12px ">{{$book->total_bayar}}</td>
            </tr>
            @endforeach
                </tbody>
              </table>
        </div>
        <p style="font-size:12px;">
        Kami mengucapkan terimakasih atas kepercayaan anda dalam melakukan penyewaan terhadap jasa laundry kami
       </p>
       <br>
       <p style="font-size:12px; text-align:right">
           Hormat Saya 
       </p>
       <br>
       <br>
       <p style="font-size:12px;  text-align:right">
        Admin PT Wools Laundry
       </p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>