<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-#E7FBFF; fixed-top" style="background-color: #E7FBFF;">
  <div class="container-fluid">
  <a class="navbar-brand" href="/homeAdmin">
      <img src=" {{asset('asset/wools2.png')}}" alt="" width="40" height="45" class="d-inline-block align-text-top" style=" margin-left : 100px">
      <img src=" {{asset('asset/wools.png')}}" alt="" width="150" height="19" class="d-inline-block align-text-top" style="margin-top: 15px;">
    </a>
  
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0" style=" margin-right : 100px">
    <li><a href="/homeAdmin" class="nav-link px-2 link-secondary {{( $active === "home" ) ? ' active fw-bold ' : '' }}" >HOME</a></li>
    <li><a href="/orders" class="nav-link px-2 link-secondary {{( $active === "order" ) ? ' active fw-bold ' : '' }}" >ORDERS</a></li>
      <li><a href="/layanan" class="nav-link px-2 link-secondary {{( $active === "layanan" ) ? ' active fw-bold ' : '' }}">LAYANAN</a></li>
      <li><a href="/pelanggan" class="nav-link px-2 link-secondary {{( $active === "pelanggan" ) ? ' active fw-bold ' : '' }}"  >PELANGGAN</a></li>
      <li><a href="/riwayat" class="nav-link px-2 link-secondary {{( $active === "riwayat" ) ? ' active fw-bold ' : '' }}">RIWAYAT</a></li>
      <img src=" {{asset('asset/1.png')}}" data-bs-toggle="modal" data-bs-target="#exampleModal"  alt="" width="40" height="40" class="d-inline-block align-text-top">
      <li><a href="" class="nav-link px-2 link-dark" style="font-weight: bold;color: #51758E">{{auth::guard('admin')->user()->nama_admin}}</a></li>
      <li><a href="/logout/admin" type="button" class="btn btn-primary" style="background-color: #01AFD0; margin-left: 20px; width: 150px">Logout</a></li>
      <!-- <li><a href="/logout" type="button" class="btn btn-primary" style="background-color: #01AFD0; margin-left: 20px; width: 150px">Logout</a></li> -->
    </ul>
    </div>
</nav>

<section>

@yield('konten')

</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Profile Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      @if (session('sukses'))
            <div class="alert-success"  style=" width: 83%; height: 50px; margin-left: 60px;">
                <p>{{ session('sukses') }}</p>
            </div>
          @endif
          @if (session('gagal'))
          <div class="alert-danger"  style=" width: 83%; height: 50px; margin-left: 60px;">
            <p>{{ session('gagal') }}</p>
          </div>
          @endif
      <form action="/updateAkun/admin" method="POST">
      <div class="modal-body">
          @csrf
          @METHOD('PUT')
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{auth::guard('admin')->user()->email}}" id="exampleFormControlInput1">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password Lama</label>
            <input type="password" name="password_lama" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password Baru</label>
            <input type="password" name="password_baru" class="form-control" id="exampleFormControlInput1">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>