<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Badan Mentoring</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/docs/assets/css/toolkit-light.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/docs/assets/css/application.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>
  </head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-3 sidebar">
        <nav class="sidebar-nav">
          <div class="sidebar-header">
            <button class="nav-toggler nav-toggler-sm sidebar-toggler" type="button" data-toggle="collapse" data-target="#nav-toggleable-sm">
              <span class="sr-only">Toggle nav</span>
            </button>
            <a class="sidebar-brand img-responsive" href="<?php echo base_url()?>index.php/dashboard">
              <span class="icon icon-air sidebar-brand-icon"></span>
            </a>
          </div>

          <div class="collapse nav-toggleable-sm" id="nav-toggleable-sm">
            <ul class="nav nav-pills nav-stacked">
              <li class="nav-header"><?php echo $this->session->userdata('status'); ?> - Dashboards</li>
              <li >
                <a href="<?php echo base_url() ?>index.php/dashboard/daftar_anggota">Daftar Anggota</a>
              </li>
              <li >
                <a href="<?php echo base_url().'index.php/dashboard/daftar_kelompok_'.$this->session->userdata('status').'/'.$this->session->userdata('nim') ?>">Daftar Kelompok</a>
              </li>
              <li >
                <a href="<?php echo base_url() ?>index.php/dashboard/edit_profile/<?php echo $this->session->userdata('nim'); ?>">Edit Profile</a>
              </li>
            </ul>
            <hr class="visible-xs m-t">
          </div>
        </nav>
      </div>
      <div class="col-sm-9 content">
        <div class="dashhead">
  <div class="dashhead-titles">
    <h6 class="dashhead-subtitle"><?php echo $this->session->userdata('status'); ?> - Dashboards</h6>
    <h2 class="dashhead-title">Selamat Datang <?php echo $this->session->userdata('nama'); ?></h2>
  </div>

  <div class="btn-toolbar dashhead-toolbar">
    <h5><?php echo date("l, d F Y"); ?></h5> <br>
    <a href="<?php echo base_url() ?>index.php/login/logout">Logout</a>
  </div>
</div>

<hr class="m-t">

<div class="row m-t-lg">
  <div class="col-sm-12 m-b-md">
    <?php $content = $this->uri->segment(2);
      switch ($content) {
        case 'daftar_anggota':
          include('daftar_anggota.php');
          break;
        case 'daftar_kelompok_Mentor':
          include('daftar_kelompok_Mentor.php');
          break;
        case 'daftar_kelompok_Menti':
          include('daftar_kelompok_Menti.php');
          break;
        case 'edit_profile':
          include('edit_profile.php');
          break;      
        default:
           echo "<h1>Timeline</h1>";
          break;
      }
     ?>
  </div>
</div>

<!-- <div class="hr-divider m-t-md m-b">
  <h3 class="hr-divider-content hr-divider-heading">Quick stats</h3>
</div> -->

<hr class="m-t">

      </div>
    </div>
  </div>

</div>


    <script src="<?php echo base_url()?>assets/docs/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/docs/assets/js/chart.js"></script>
    <script src="<?php echo base_url()?>assets/docs/assets/js/tablesorter.min.js"></script>
    <script src="<?php echo base_url()?>assets/docs/assets/js/toolkit.js"></script>
    <script src="<?php echo base_url()?>assets/docs/assets/js/application.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <script>
      // execute/clear BS loaders for docs
      $(function(){while(window.BS&&window.BS.loader&&window.BS.loader.length){(window.BS.loader.pop())()}})
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#daftar_anggota').DataTable();
      } );
    </script>
  </body>
</html>

