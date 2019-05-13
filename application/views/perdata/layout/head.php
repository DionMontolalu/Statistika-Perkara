<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title; ?></title>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/icon2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name = "viewport" content = "initial-scale = 1, user-scalable = no">
	<style type="text/css">
	@font-face {
	  font-family: 'Cabin';
	  font-style: normal;
	  font-weight: 400;
	  src: local('Cabin Regular'), local('Cabin-Regular'), url(<?php echo base_url(); ?>assets/font/satu.woff) format('woff');
	}
	@font-face {
	  font-family: 'Cabin';
	  font-style: normal;
	  font-weight: 700;
	  src: local('Cabin Bold'), local('Cabin-Bold'), url(<?php echo base_url(); ?>assets/font/dua.woff) format('woff');
	}
	@font-face {
	  font-family: 'Lobster';
	  font-style: normal;
	  font-weight: 400;
	  src: local('Lobster'), url(<?php echo base_url(); ?>assets/font/tiga.woff) format('woff');
	}
	th,td{
		/*use this property to disbale soft wrap*/
		/*To make extra certain,add this css property*/
		word-break: keep-all;

	}
	.bglatar{
	  background-color:white;
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	}
	</style>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
      <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/sweetalert/dist/sweetalert.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" />
	<script type="text/javascript" src="<?php echo base_url()?>assets/sweetalert/dist/sweetalert.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/datetimepicker/moment.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/datetimepicker/bootstrap-datetimepicker.min.js"></script>

    
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootswatch.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery/jquery-ui.js"></script>
</head>
<body class="bglatar" style="height:1000px">
