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
       <center> <h5>Laporan Keuangan PT Wools Laundry Indonesia</h5></center>
       <br>
       <p style="font-size:12px; font-weight:bold">Kepada Yth:
        Direktur PT.Wools Laundry
        <br>
        Gedung PT Wools Laundry<br>
        Jl.Sudirman Raya No.19, Sempu<br>
        Jakarta Selatan
       </p>
       <p style="font-size:12px;">
       Assalamualaikum Wr.Wb.<br>
       Saya yang beridentitas dibawah ini :<br>
       Nama     : {{auth::guard('admin')->user()->nama_admin}}<br>
       Status   : Admin 1 PT Wools Laundry<br>
       No.HP    : 082337187118<br>
       <br>
       Berikut ini kami lampirkan laporan keuangan PT Wools Laundry Indonesia, dimana dengan rincian pendapatan sebagai berikut ini :
       </p>
        <div class="row">
            <table class="table table-striped mt-3">
                <tr>
                <th scope="col" style="color: black;">No</th>
                <th scope="col" style="color: black; ">Tanggal Booking</th>
                <th scope="col" style="color: black; ">Tanggal Selesai</th>
                <th scope="col" style="color: black; ">Total Pembayaran</th>
            </tr>
        <tbody>
        <?php $no = 1 ?>
        @foreach($data as $book)
            <tr>
                <th class="table-light  table-striped" scope="row">{{$no++}}</th>
                <td class="table-light  table-striped">{{$book->tanggal_booking}}</td>
                <td class="table-light table-striped">{{$book->tanggal_pembayaran}}</td>
                <td class="table-light  table-striped">{{$book->total_bayar}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3" style="color: black; font-weight:bold">Total Pendapatan</td>
                <td colspan="2">{{$total}}</td>}
            </tr>
                </tbody>
              </table>
        </div>
        <p style="font-size:12px;">
        Dengan dilampirkannya surat ini sebagai bahan evaluasi semoga dapat bermanfaat dan membuat Wools Laundry semakin berkembang
       </p>
       <br>
       <p style="font-size:12px; text-align:right">
           Hormat Saya 
       </p>
       <br>
       <br>
       <p style="font-size:12px;  text-align:right">
       {{auth::guard('admin')->user()->nama_admin}}
       </p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>