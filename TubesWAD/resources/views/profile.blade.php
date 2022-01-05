@extends('index')
@section('title','Wools Laundry || Profile')
@section('konten')

<div class="col-md-11" style="margin-left: 20px;">
    <div class="row">
    <div class="col-md-6">
    <p style="color: #164D74;margin-top:20px; margin-left:90px; font-size:30px;font-weight:bold;">Profile Admin</p>
    </div>
    <div class="col-md-10" style=" border: 2px solid grey; border-radius:10px; padding:20px; margin-left:100px;">
    <p  style="font-weight: bold;">ID Admin :</p>
    <p  style="font-weight: bold;">Nama Admin :</p>
    <p  style="font-weight: bold;">Username :</p>
    <p  style="font-weight: bold;">Email :</p>
    <p  style="font-weight: bold;">Password :</p>
    <table>
        <tr>
            <td>
            <button style="margin-top:25px;" type= "submit" name="submit" class="btn btn-primary">+ Tambah Admin Baru</button>
            </td>
            <td>
            <button style=" margin-left: 20px;margin-top:25px;" type= "submit" name="submit" class="btn btn-warning">Ubah Profile</button>
            </td>
        </tr>
    </table>

</div>
</div>
</div>
@endsection