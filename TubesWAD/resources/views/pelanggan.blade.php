@extends('index') 
@section('title','Wools Laundry || Pelanggan') 
@section('konten')

<div class="col-md-10" style="margin-left: 20px;">
    <p style="color: #164D74;margin-top:20px; margin-left:90px; font-size:30px;font-weight:bold;">Data Pelanggan</p>
    <a href=""  style="margin-left: 90px; margin-bottom:10px" type="button" class="btn btn-success">+ Tambah Data</a>
    <table class="table table-striped" style="background-color:#164D74;margin-left: 90px;">
        <thead>
            <tr>
                <th scope="col" style="color: #FFFFFF;">No</th>
                <th scope="col" style="color: #FFFFFF;">Nama Pelanggan</th>
                <th scope="col" style="color: #FFFFFF;">Email</th>
                <th scope="col" style="color: #FFFFFF;">Password</th>
                <th scope="col" style="color: #FFFFFF;">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="table-light  table-striped" scope="row">1</th>
                <td class="table-light  table-striped"></td>
                <td class="table-light table-striped"></td>
                <td class="table-light  table-striped"></td>
                <td class="table-light  table-striped">
                    <a href="" type="button" class="btn btn-danger">Delete</a>
                    <a href="" type="button" class="btn btn-warning">Update</a>
                </td>

            </tr>
    </table>
</div>

@endsection