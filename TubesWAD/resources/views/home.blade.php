<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-#E7FBFF;" style="background-color: #E7FBFF;">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src=" {{asset('asset/wools2.png')}}" alt="" width="40" height="45" class="d-inline-block align-text-top" style=" margin-left : 100px">
      <img src=" {{asset('asset/wools.png')}}" alt="" width="150" height="19" class="d-inline-block align-text-top" style="margin-top: 15px;">
    </a>
  
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0" style=" margin-right : 100px">
      <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Layanan</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Riwayat</a></li>
      <li><a href="#" class="nav-link px-2 link-dark">Profile</a></li>
    </ul>
    </div>
</nav>
<div class="col-md-10" style="margin-left: 20px;">
<p style="color: #164D74;margin-top:20px; margin-left:90px; font-size:30px;font-weight:bold;">Data Pemesanan</p>
<table class="table table-info table-striped" style="margin-left: 90px;">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
</table>
</body>
</html>