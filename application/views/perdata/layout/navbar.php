<style type="text/css">
  /* Background navbar */
  .navbar-inverse {
    background-color: <?php echo $warna; ?>;
  }
  /* Aplikasi style */
  .navbar-inverse .navbar-brand {
    color: #fff;
  }
  .navbar-inverse .navbar-brand:hover,
  .navbar-inverse .navbar-brand:focus {
    color: #fff;
    background-color: transparent;
  }
  
  /* Navigasi style */
  .navbar-inverse .navbar-nav > li > a {
    color: #fff;
  }
  .navbar-inverse .navbar-nav > li > a:hover,
  .navbar-inverse .navbar-nav > li > a:focus {
    color: #fff;
    background-color: #3d3d5c;
  }
</style>
<nav class="navbar navbar-inverse navbar-fixed-top" style="z-index: 9999">
  <center><img src="<?php echo base_url(); ?>assets/img/pengadilan.png" class="img-responsive" width="40%"></center>

      <div class="container-fluid">
        <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <strong style="font-family: verdana;"><?php echo $head; ?> </strong>
      </a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url(); ?>index.php/navigasi"><i class="fa fa-university"></i> Bagian</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/navigasi"><i class="fa fa-file-text-o"></i> Laporan</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#"><b><?php echo $jenis ?></b></a>
      </li>
    </ul>
  </div>
</nav>
<br><br><br>