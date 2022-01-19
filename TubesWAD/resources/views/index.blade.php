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
      <li><a href="" class="nav-link px-2 link-secondary {{( $active === "profile" ) ? ' active fw-bold ' : '' }}" style="margin-right: 40px;"  >PROFILE</a></li>
      <li><a href="/logout/admin" type="button" class="btn btn-primary" style="background-color: #01AFD0; margin-left: 20px; width: 150px">Logout</a></li>
      <!-- <li><a href="/logout" type="button" class="btn btn-primary" style="background-color: #01AFD0; margin-left: 20px; width: 150px">Logout</a></li> -->
    </ul>
    </div>
</nav>

<section>

@yield('konten')

</section>
</body>
</html>