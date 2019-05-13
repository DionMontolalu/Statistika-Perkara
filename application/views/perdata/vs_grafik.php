<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<style>
	canvas{}
</style>
<div class="container">
	<br><br><br>
	  <div class="row">
		<!--
		<div class="col-md-4 text-center logo-margin">
			<img src="<?php //echo base_url() ?>/assets/img/pntondano.png" width="40%">
		</div> <!-- End Divisi image -->
		<div class="col-md-12">
		<center>
		<img src="<?php echo base_url() ?>/assets/img/pengadilan.png" width="70%">
		</center>
		<br><br>
		 <div class="login-panel panel panel-success">
		  <div class="panel-heading">
		  	<h3 class="panel-title"><center><b><ins>PERDATA</ins><br><?php echo $title ?></b></center></h3>
		  </div> <!-- Divisi panel heading -->
		  <div class="panel-body">
		 	<div class="row">
		 	<div class="col-md-6">
		 	    Laporan : <a href="<?php echo $link_la ?>" class="btn-warning"><b> <i class="fa fa-calendar"></i> <?php echo $laporan ?></b></a>
                <br>
                Tentang : <a href="<?php echo $link_pe ?>" class="btn-danger"><b> <i class="fa fa-bar-chart"></i> <?php echo $perkara ?></b></a>
		 	</div>
		 	<div class="col-md-2"><br>

		 	</div>
		 	</form>
		 	<div class="col-md-4">
		 		<table>
		 		<tr>
		 		<td>Status</td>
		 		<td>:</td>
		 		<td><a href="<?php echo $link_st ?>" class="btn-success"><b> <i class="fa fa-check-square-o"></i> <?php echo $status ?></b></a></td>
		 		</tr>
		 		<tr>
		 		<td>Bagian</td>
		 		<td>:</td>
		 		<td><a href="<?php echo $link_ba ?>" class="btn-info"><b> <i class="fa fa-university"></i> <?php echo $bagian ?></b></a></td>
		 		</tr>
		 		</table>
		 	</div>
		 	</div>
		 	<hr>


<div class="row">
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-2">
				<?php echo form_open($cari) ?>
		 		Pilih Tahun :
		 		<?php
                    $tahun_atribute = 'class ="form-control select2"';
                    echo form_dropdown('tahun', $tahun, $tahun_selected, $tahun_atribute);
                ?>
			</div>
			<div class="col-md-2"><br>
				<button type="submit" class="btn btn-success" name="search"><b><i class="fa fa-search"></i> Cari Data</b></button></input>
			</div>
			<div class="col-md-2"></div>
			</form>
		</div>
	</div>
	<div class="col-md-3">
		
	</div>
</div><br>

<canvas id="canvas" height="500" width="1000"></canvas>
<script type="text/javascript" src="<?php echo base_url().'assets/chartjs/Chart.min.js'?>"></script>

<script type="text/javascript">
	var data = {
		labels: ["null","null","null","null"],
		datasets: [
			{
				//Masuk perkara
				label: 'Masuk Perkara',
				backgroundColor: 'rgba(54, 162, 235, 0.2)',
				borderColor : 'rgba(54, 162, 235, 1)',
				data : [0,0,0,0]
			},
			{	//Putus perkara
				label: 'Putus Perkara',
				backgroundColor: 'rgba(255, 99, 132, 0.2)',
				borderColor: 'rgba(255,99,132,1)',
				data : [0,0,0,0]
			},
			{	//Sisa Perkara
				label: 'Sisa Perkara',
				backgroundColor: 'rgba(255, 159, 64, 0.2)',
				borderColor: 'rgba(255, 159, 64, 1)',
				data : [0,0,0,0]
			}
		]
	};

	var ctx = document.getElementById("canvas").getContext('2d');
    var chart = new Chart(ctx,{
    	type: 'bar',
    	data: data,
    	options: {
        	scales: {
            	yAxes: [{
                	ticks: {
                    	beginAtZero:true
                	}
            	}]
        	}
    	}
    });
</script>
	
		   	<hr>
		  </div>		
		 </div>
		</div>
			
	  </div>



