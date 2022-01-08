<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- css -->
<style>
    .kotak{
        width: 40%;
        height: auto;
        background-color: #E7FBFF;
        margin-top: 50px;
        border-radius: 10px;
    }
</style>
</head>
<body  style="background-color: #E7FBFF;">
    <div class="col-md-11">
        <div class="row">
        <div class="col-md-6" style="background-color: #FFFF; height:750px">
        <a class="navbar-brand" href="#">
        <img src=" {{asset('asset/wools2.png')}}" alt="" width="40" height="45" class="d-inline-block align-text-top" style=" margin-top:20px; margin-left : 50px">
        <img src=" {{asset('asset/wools.png')}}" alt="" width="150" height="19" class="d-inline-block align-text-top" style="margin-top: 30px;">
        <table>
            <tr>
                <td><center>
                <img src=" {{asset('asset/lau.png')}}" alt="" width="80%" class="d-inline-block align-text-top" style="margin-top: 30px;">
               </center> </td>
            </tr>
            <tr>
                <td>
                <center><p style="color:#164D74; font-size: 25px; font-weight:bold; margin-left:100px">
                    WELCOME TO OUR WEBSITE
                </p>
            <p style="color:#164D74; font-size: 20px;margin-left:100px">Trust your laundry at Wools Laundry</p></center>
                </td>
            </tr>
        </table>
    </a>
    </div>
    <div class="col-md-6" style="background-color: #E7FBFF; height:max-content">
    <div class="col-md-" style="margin-left: 100px" >
    <br>
    <center>
    <br>
    <p style="color: #164D74; font-size:30px;font-weight: semibold;">Create your free account</p>
    </center>
    <form method="post" enctype="multipart/form-data" action="/register/add">
      @csrf
  <div class="mb-3" style="text-align: left;">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" >
  </div>
  <div class="mb-3" style="text-align: left;">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" >
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
    <textarea class="form-control @error('alamat') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
</div>
  <div class="mb-3" style="text-align: left;">
    <label for="exampleInputEmail1" class="form-label ">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1" name="password" aria-describedby="emailHelp" >
  </div>
  <div class="mb-3" style="text-align: left;">
    <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="password_confirmation" >
  </div>
  <div class="mb-3 form-check" style="text-align: left;">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <center>
  <button type="submit" class="btn btn-primary">Register Now</button>
  <p style="margin-top: 7px;"> Already have an account? <a href="/login">Login</a></p>
  <br>
  </center>
</form>
</div>
    </div>
    
        </div>
    </div>
</body>
</html>