<!DOCTYPE html>
<html lang="en">
<head>
    <!-- These meta tags come first. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Badan Mentoring</title>

    <!-- Include the CSS -->
    <link href="<?php echo base_url()?>assets/dist/toolkit-light.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-2 .col-lg-offset-2 .col-md-2 .col-md-offset-2">
          
        </div>
        <div class="col-lg-8 .col-md-8 .col-xs-12">
        <h2>Pendaftaran</h2>
          <form action="<?php echo base_url() ?>index.php/login/do_register" method="post" enctype="multipart/form-data">
          <div class="col-lg-6">
            <div class="form-group has-feedback">
        <label>NIM</label>
        <input type="text" class="form-control" placeholder="NIM" name="nim" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Nama</label>
        <input type="text" class="form-control" placeholder="Nama" name="nama" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Password" name="pass" id="pass" pattern=".{8,}"   required title="8 characters minimum" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Re-Password</label>
        <input type="password" class="form-control" placeholder="Retype password" name="repass" id="repass" pattern=".{8,}"   required title="8 characters minimum" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Jenis Kelamin : </label>
        <input type="radio" name="jk" value="Laki-Laki"> Laki - Laki
        <input type="radio" name="jk" value="Perempuan"> Perempuan
      </div>
      <div class="form-group has-feedback">
      <label>Tanggal Lahir</label>
      <div class="input-group">
        <span class="input-group-addon">
          <span class="icon icon-calendar"></span>
        </span>
        <input type="text" name="ttl" class="form-control" data-provide="datepicker" placeholder="Tanggal Lahir" data-date-format="yyyy-mm-dd" required>
      </div>
      </div>
          </div>
      <div class="col-lg-6">
        <div class="form-group has-feedback">
        <label>Fakultas  </label>
        <select name="fakultas" class="form-control">
          <option value="FRI">FRI</option>
          <option value="FIF">FIF</option>
        </select><br>
        <label>Prodi  </label>
        <select name="prodi"  class="form-control">
          <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
          <option value="FIF">FIF</option>
        </select><br>
        <label>Tahun Masuk  </label>
        <select name="tahun_masuk"  class="form-control">
          <option value="2012">2012</option>
          <option value="2013">2013</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <label>Nomor Handphone</label>
        <input type="text" class="form-control" placeholder="Nomor Handphone" name="hp" required>
        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
      </div>
      <div class="form-group">
                  <label for="exampleInputFile">Foto</label>
                  <input type="file" id="exampleInputFile" name="foto" required>
                </div>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary">Daftar</button>
        </div>
      </form>
        </div>
      </div>
    </div>
    <!-- Include jQuery (required) and the JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/toolkit.min.js"></script>
    <script type="text/javascript">
      var password = document.getElementById("pass")
  , confirm_password = document.getElementById("repass");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
    </script>
  </body>
</body>
</html>
