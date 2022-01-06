<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
        <div class="col-md-6" style="background-color: #FFFF; height:622px">
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
    <p style="color: #164D74; font-size:30px;font-weight: semibold; margin-top:60px">Login account</p>
    </center>
    <form>
  <div class="mb-3" style="text-align: left;">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3" style="text-align: left;">
    <label for="exampleInputEmail1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 form-check" style="text-align: left;">
  <table>
      <tr>
          <td style="width: 74%;">  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </td>
          <td> <a href><label class="form-check-label" for="exampleCheck1">Forgot Password?</label></a>
        </td>
      </tr>
  </table>
  
  </div>
  <center>
      <br>
  <button type="submit" class="btn btn-primary" style="width: 200px;">Login</button>
  <p style="margin-top: 7px;">Don't have account? <a href="/register">Register</a></p>
  <br>
  </center>
</form>
</div>
    </div>
    
        </div>
    </div>
</body>
</html>