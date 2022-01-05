@extends('index')
@section('title','Wools Laundry || Riwayat')
@section('konten')

<div class="col-md-10" style="margin-left: 20px;">
<p style="color: #164D74;margin-top:20px; margin-left:90px; font-size:30px;font-weight:bold;">Riwayat Pendapatan</p>
<table class="table table-striped" style="background-color:#164D74;margin-left: 90px;">
<thead>
    <tr>
      <th scope="col" style="color: #FFFFFF;">ID Booking</th>
      <th scope="col" style="color: #FFFFFF;">Nama Pelanggan</th>
      <th scope="col" style="color: #FFFFFF;">Date</th>
      <th scope="col" style="color: #FFFFFF;">Layanan</th>
      <th scope="col" style="color: #FFFFFF;">Berat</th>
      <th scope="col" style="color: #FFFFFF;">Total Biaya</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="table-light  table-striped" scope="row">1</td>
      <td class="table-light  table-striped"></td>
      <td class="table-light table-striped"></td>
      <td class="table-light  table-striped"></td>
      <td class="table-light table-striped"></td>
      <td class="table-light  table-striped"></td>
    </tr>
    <tr>
    <td colspan="5" style="color: #FFFFFF;">Total Pendapatan</td>
    <td style="color: #FFFFFF;">Rp. </td>
    </tr>
</table>
</div>
@endsection