@extends('index') 
@section('title','Wools Laundry || Dashboar Admin') 
@section('konten')
<br>
<div class="col-md-12" style="margin-left: 20px; margin-top:60px">
<p style="color: #164D74; font-size:28px; font-weight:bolder; margin-left:90px;">Dashboard Admin </p>
<p style="color: #164D74; font-size:18px; font-weight:lighter; margin-left:90px;">Hello selamat datang ... sebagai admin</p>
<div class="row">
<div class="col-md-3" style="background-color:#68deda;height:140px;margin-left:100px; border-radius:5px">
<table>
<tr>
    <td>
        <img src="{{asset('asset/pen1.png')}}" alt=... width="110px" height="110px" style="padding: 10px;">
    </td>
    <td>
       
        <p style="font-size:24px; margin-top:15px">
            PENDAPATAN
        </p>
        <p style="font-size:30px; font-weight:bolder; margin-top:-20px">
           Rp. {{$total}}
        </p>
        <p style="font-size:16px;">
            Jumlah pendapatan terkini
        </p>
    </td>
</tr>
</table>

</div>
<div class="col-md-3" style="background-color: #dec068; height:140px;margin-left:60px;  border-radius:5px">
<table>
<tr>
    <td>
        <img src="{{asset('asset/pen2.png')}}" alt=... width="110px" height="110px" style="padding: 10px;">
    </td>
    <td>
       
    <p style="font-size:24px; margin-top:15px">
        ORDERS
        </p>
        <p style="font-size:30px; font-weight:bolder; margin-top:-20px">
        {{$totalOr}}
        </p>
        <p style="font-size:16px;">
            Jumlah Order terkini
        </p>
    </td>
</tr>
</table>
</div>
<div class="col-md-3" style="background-color: #8c7ee6; height:140px;margin-left:60px;  border-radius:5px">
<table>
<tr>
    <td>
        <img src="{{asset('asset/pen3.png')}}" alt=... width="110px" height="110px" style="padding: 10px;">
    </td>
    <td>
       
    <p style="font-size:24px; margin-top:15px">
            PELANGGAN
        </p>
        <p style="font-size:30px; font-weight:bolder; margin-top:-20px">
        {{$totalPel}}
        </p>
        <p style="font-size:16px;">
            Jumlah pelanggan active
        </p>
    </td>
</tr>
</table>
</div>
</div>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-5">
            <div id="layananChart" style="margin-left: 80px; margin-top:20px">
                <script src='https://cdn.plot.ly/plotly-2.8.3.min.js'></script>
                  <script>
                        const layananData = @json($nama_layanan);
                        const TotallayananData = @json($total_layanan);
                        console.log(layananData)
                        console.log(TotallayananData)
                        var data = [{
                            type: "pie",
                            values: [...TotallayananData],
                            labels: [...layananData],
                            textinfo: "label+percent",
                            textposition: "outside",
                            automargin: true
                        }]

                        var layout = {
                            height: 400,
                            width: 400,
                            margin: {"t": 0, "b": 0, "l": 0, "r": 0},
                            showlegend: false
                        }

                        Plotly.newPlot('layananChart', data, layout)
                    </script>
                </div>  
        </div>
        <div class="col-md-6">
            <div class="Halaman" style="height: 320px; margin-top:50px;background-color:#d9d9d9; border-radius:5px">
        </div>
        </div>
    </div>

<!-- @foreach($layanan as $layan)
    <p style="margin-left: 90px;"> Tampil Jumlah Layanan : {{$layan->nama_layanan}} = {{$total_layanan[$loop->index]}}</p>
    @endforeach
    <p style="margin-left: 90px;"> Tampil Jumlah Pendapatan : {{$total}}</p>
</div>
-->

@endsection 

