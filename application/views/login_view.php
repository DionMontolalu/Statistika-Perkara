<!DOCTYPE html>
<html lang="id" xml:lang="id" xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Aplikasi Statistika</title>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

	<style type="text/css">
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
  .bglatar{
	  background-color:#84B899;
	}
	</style>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" />
  <body class="bglatar">
  	<div class="container">
  	<br><br><br>
  	 <div class="row">
  	  <div class="col-md-4 col-md-offset-4 text-center logo-margin">
  	  	<img src="<?php echo base_url() ?>/assets/img/pntondano.png" width="40%">
  	  </div> <!-- End Divisi image -->
  	  <div class="col-md-4 col-md-offset-4"><br><br>
  	  	<div class="login-panel panel panel-default">
  	  		<div class="panel-heading">
  	  			<h3 class="panel-title"><center><b>Silahkan Login</b></center></h3>
  	  		</div> <!-- Divisi panel heading -->
  	  		<div class="panel-body">
  	  			<?php echo form_open('login/login_proses'); ?>
  	  				<fieldset>
  	  				  <div class="form-group">
  	  				   <label>Username</label>
  	  					<input class="form-control" placeholder="Username" name="username" type="text" autofocus required autocomplete="off">
                <i><?php echo form_error('username'); ?></i>
  	  				  </div>
  	  				</fieldset>
  	  				<fieldset>
  	  				  <div class="form-group">
  	  				   <label>Password</label>
  	  					<input class="form-control" placeholder="Password" name="password" type="password" required>
                <i><?php echo form_error('password'); ?></i>
  	  				  </div>
  	  				</fieldset>
  	  				<button type="submit" class="btn btn-lg btn-success btn-block" name="save"><b><i class="fa fa-lock"></i> Login</b></button>
  	  			</form>
            <br>
            <div id="notifications"><?php echo $this->session->flashdata('pesan');?></div>
  	  		</div> <!-- End divisi panel body -->
  	  	</div>
  	  </div> <!-- End divisi col-md-4 offset -->
  	 </div>
  	</div>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script>
     $('#notifications').slideDown('slow').delay(3500).slideUp('slow');
    </script>
  </body>
</html>
