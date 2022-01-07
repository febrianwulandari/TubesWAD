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
<nav class="navbar navbar-expand-lg navbar-light bg-#E7FBFF;" style="background-color: #E7FBFF;">
  <div class="container-fluid">
  <a class="navbar-brand" href="/home">
      <img src=" {{asset('asset/wools2.png')}}" alt="" width="40" height="45" class="d-inline-block align-text-top" style=" margin-left : 100px">
      <img src=" {{asset('asset/wools.png')}}" alt="" width="150" height="19" class="d-inline-block align-text-top" style="margin-top: 15px;">
    </a>
  
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0" style=" margin-right : 100px">
      <li><a href="/home" class="nav-link px-2 link-secondary">Home</a></li>
      <li><a href="/layanan" class="nav-link px-2 link-dark">Layanan</a></li>
      <li><a href="/pelanggan" class="nav-link px-2 link-dark">Pelanggan</a></li>
      <li><a href="/riwayat" class="nav-link px-2 link-dark">Riwayat</a></li>
      <li><a href="/profile" class="nav-link px-2 link-dark">Profile</a></li>
      <li><a href="/profile" type="button" class="btn btn-primary" style="background-color: #01AFD0; margin-left: 20px; width: 150px">Logout</a></li>
    </ul>
    </div>
</nav>
<section>

@yield('konten')

</section>
<div class="footer" style="background-color: #038DA7;">
  <div class="col-md-12">
    <center>
<br>
    <h3 style="color:#E7FBFF">  Follow Our Social Media </h3>
    <a class="navbar-brand" href="/home">
      <a href ="https://www.instagram.com/"><img src=" {{asset('asset/ic1.png')}}" alt="" width="45" height="45" class="d-inline-block align-text-top"></a>
      <a href ="https://www.linkedin.com/feed/"> <img src=" {{asset('asset/ic2.png')}}" alt="" width="45" height="45" class="d-inline-block align-text-top"  style="margin-left: 10px;"></a>
      <a href ="https://www.facebook.com/home.php"><img src=" {{asset('asset/ic3.png')}}" alt="" width="45" height="45" class="d-inline-block align-text-top"  style="margin-left: 10px;"></a>
      <a href ="https://web.whatsapp.com/"> <img src=" {{asset('asset/ic4.png')}}" alt="" width="45" height="45" class="d-inline-block align-text-top"  style="margin-left: 10px;"></a>
    </a>
    <br>
    <hr style="background-color: #E7FBFF; width: 85%; height:2px">
    </center>

    <div class="row">
      <div class="col-md-4">
      <a class="navbar-brand" href="/home">
      <img src=" {{asset('asset/wools2.png')}}" alt="" width="40" height="45" class="d-inline-block align-text-top" style=" margin-left : 100px">
      <img src=" {{asset('asset/wools.png')}}" alt="" width="150" height="19" class="d-inline-block align-text-top" style="margin-top: 15px;">
    </a>
    <br>
    <br>
    <p style=" margin-left : 100px; color:#ffff"> 
      Jln. Temuguruh, RT/ RW 03/02<br>
      Karanganyar, Karangsari, Sempu
      Banyuwangi, Jawa Timur
    </p>
    <br>
      </div>
      <div class="col-md-3" style="margin-left: 20px;">
     
   <h5 style="color: #ffff;">Contact Person</h5>
    <br>
    <p style=" color:#ffff"><span class="glyphicon glyphicon-envelope"></span>
    No. Telp : 0823 3718 7118
    </p>
    <p style=" color:#ffff"> 
    Email : woolslaundry@gmail.com
    </p>
    <br>
      </div>
      <div class="col-md-3">
     <h5 style="color: #ffff;">Menu</h5>
      <br>
      <table>
        <tr>
          <td>
          <p style=" color:#ffff">Home</p>
          <p style=" color:#ffff">Riwayat</p>
          <p style=" color:#ffff">Profile</p>
          </td>
          <td>
          </td>
        </tr>
      </table>
        </div>
    </div>
  </div>
</div>
</body>
</html>