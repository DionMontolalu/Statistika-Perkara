<!DOCTYPE html>
<html lang="id" xml:lang="id" xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
   
	<style type="text/css">
	.addSuccess {
    padding: 20px;
    background-color: #4db8ff;
    color: white;
    margin-bottom: 15px;
  }
  .updateSuccess {
    padding: 20px;
    background-color: #4dd2ff;
    color: white;
    margin-bottom: 15px;
  }
  .deleteSuccess {
    padding: 20px;
    background-color: #ff3333;
    color: white;
    margin-bottom: 15px;
  }

  /* The close button */
  .closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 27px;
    line-height: 20px;
    cursor: pointer;
  }

  .closebtn:hover {
    color: black;
  }
	.Kesalahan {
   		padding: 20px;
    	background-color: #ff4d4d;
    	color: white;
    	margin-bottom: 15px;
  	}
	@font-face {
	  font-family: 'Cabin';
	  font-style: normal;
	  font-weight: 400;
	  src: local('Cabin Regular'), local('Cabin-Regular'), url(<?php echo base_url(); ?>asset/font/satu.woff) format('woff');
	}
	@font-face {
	  font-family: 'Cabin';
	  font-style: normal;
	  font-weight: 700;
	  src: local('Cabin Bold'), local('Cabin-Bold'), url(<?php echo base_url(); ?>asset/font/dua.woff) format('woff');
	}
	@font-face {
	  font-family: 'Lobster';
	  font-style: normal;
	  font-weight: 400;
	  src: local('Lobster'), url(<?php echo base_url(); ?>assets/font/tiga.woff) format('woff');
	}
  .bglatar{
	  background-color:#84B899;
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	}
	</style>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" />
    
  <body class="bglatar">
	<div class="container">
	<br><br><br>
	  <div class="row">
		<!--
		<div class="col-md-4 text-center logo-margin">
			<img src="<?php //echo base_url() ?>/assets/img/pntondano.png" width="40%">
		</div> <!-- End Divisi image -->
		<div class="col-md-2">&nbsp</div>
		<div class="col-md-8">
		<center>
		<img src="<?php echo base_url() ?>/assets/img/pengadilan.png" width="100%">
		</center>
		<br><br>
		 <div class="login-panel panel panel-success">
		  <div class="panel-heading">
		  	<h3 class="panel-title"><center><b><ins>PERDATA</ins><br><?php echo $title ?></b></center></h3>
		  </div> <!-- Divisi panel heading -->
		  <div class="panel-body">
		   <div class="row">
		    <div class="col-md-6">
		  	<a href="laporan/bulanan"><span class="btn btn-default btn-block" title="Lihat Bulanan"><h4><i class="fa fa-calendar"></i> BULANAN</h4></span></a>
		  	</div>
		  	<div class="col-md-6">
		  	<a href="laporan/triwulan"><span class="btn btn-default btn-block" title="Lihat Pemeriksaan"><h4><i class="fa fa-calendar-o"></i> TRIWULAN</h4></span></a>
		  	</div>
		   </div>
		   <br>
		   <div class="row">
		    <div class="col-md-6">
		  	<a href="laporan/semester"><span class="btn btn-default btn-block" title="Lihat Pemeriksaan"><h4><i class="fa fa-random"></i> SEMESTER</h4></span></a>
		  	</div>
		  	<div class="col-md-6">
		  	<a href="laporan/tahunan"><span class="btn btn-default btn-block" title="Lihat Pemeriksaan"><h4><i class="fa fa-list"></i> TAHUNAN</h4></span></a>
		  	</div>
		   </div>
		   <br>
		   <div class="row">
		   	<div class="col-md-6">
		   	  <a href="laporan/minutasi"><span class="btn btn-default btn-block" title="Lihat Pemeriksaan"><h4><i class="fa fa-legal"></i> MINUTASI PERKARA</h4></span></a>
		  	</div>
		  	<div class="col-md-6">
		  		<a href="laporan/grafik"><span class="btn btn-default btn-block" title="Lihat Pemeriksaan"><h4><i class="fa fa-bar-chart"></i> GRAFIK PERKARA PERDATA</h4></span></a>
		  	</div>
		   	</div>
		   </div> <!-- End panel body -->

		  </div>
		  <label><a href="<?php echo base_url() ?>index.php/bagian" style="color: white;"><i class="fa fa-rotate-left"></i> Kembali ke Bagian Navigasi</a></label>		
		 </div>
		</div>
		<div class="col-md-2">&nbsp</div>	
	  </div>
	</div>		
  </body>
</html>
