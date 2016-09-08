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
    <div class="container-fluid">
  <div class="row">
  <div class="col-lg-4 .col-lg-offset-4 col-md-4 .col-md-offset-4">
  </div>
    <div class="col-lg-4 col-md-4 col-xs-12">
    <h1><b>Badan Mentoring</b></h1>
    <h3><?php echo $this->session->flashdata('register'); ?></h3>
      <form action="<?php echo base_url()?>index.php/login/do_login" method="post">
        <div class="form-group">
           
          <label for="exampleInputEmail1">
            NIM
          </label>
          <input type="text" class="form-control" name="nim" />
        </div>
        <div class="form-group">
           
          <label for="exampleInputPassword1">
            Password
          </label>
          <input type="password" class="form-control" name="pass" />
        </div>
        <div class="form-group">
          <a href="<?php echo base_url()?>index.php/login/register">Belum punya akun?</a>
        </div>
        <button type="submit" class="btn btn-default">
          Masuk
        </button>
      </form>
    </div>
  </div>
</div>
    <!-- Include jQuery (required) and the JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/dist/toolkit.min.js"></script>
  </body>
</html>