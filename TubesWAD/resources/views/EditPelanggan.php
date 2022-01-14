<!DOCTYPE html>
<html>
<head>
    <title>WOOL'S LAUNDRY</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  <style>
      div.isi{
          position: fixed;
          background-color: lightblue;
          width: 80%;
          border: 5px solid rgb(4, 102, 163);
          padding-top: 10px;
          padding-bottom: 10px;
          padding-left: 3%;
          padding-right: 3%
      }
      p{
          margin-top:3%;
          display:inline-block;
          width:100%;
          line-height:100%;
          text-align: left;
          display: table-cell;
      }
      img{
          float: left; 
          margin-right: 15px;
      }
  </style>
</head>

<body>
    <title>Profil Pelanggan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: lightblue;">
      <div class="container">
        <a class="navbar-brand" href="#" style="color: blue">Wool's Laundry</a>
        <img src="..." height="50px" width="100px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="LayananLaundry.html">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Riwayat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Profil</a>
            </ul>
        </div>
      </div>
    </nav>

    <section>
        <section id="Reguler">
          <div class="container" style="margin-top:20px">
                <h2>Profil Pelanggan</h2>
                <br>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Pelanggan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No.Telp</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="no_hp">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Alamat">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password Confirm</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="confirm_password">
                    </div>
                </div>
                <br>
                <br>
                <br>
                
                <div class="form-group row">
                    <button type="submit" class="btn btn-success" name="update">Submit</button>
                </div>

                <div class="form-group row">
                    <button type="submit" class="btn btn-danger" name="update">Cancel</button>
                </div>
                
          </div>
        </section>
      </section> 
      
          
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
          
        
        
        </body>
      </body>
      </html>