@extends('index')
@section('title','Wools Laundry || Profile')
@section('konten')

<div class="col-md-11" style="margin-left: 20px;">
    <div class="row">
    <div class="col-md-6">
    <p style="color: #164D74;margin-top:20px; margin-left:90px; font-size:30px;font-weight:bold;">Profile Pelanggan</p>
    </div>
    <div class="col-md-10" style=" border: 2px solid grey; border-radius:10px; padding:20px; margin-left:100px;">
    <p  style="font-weight: bold;">Username :</p>
    <p  style="font-weight: bold;">Email :</p>
    <table>
        <tr>
            <td>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                <button style="margin-top:25px;" type= "submit" name="submit" class="btn btn-primary">logout</button>
            </form>
            </td>
            <td>
            <button style=" margin-left: 20px;margin-top:25px;" type= "submit" name="submit" class="btn btn-warning">Ubah Profile</button>
            </td>
        </tr>
    </table>
    

</div>
</div>
</div>
<br>

@endsection