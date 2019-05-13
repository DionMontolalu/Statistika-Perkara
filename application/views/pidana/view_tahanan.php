
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
		 <div class="login-panel panel panel-warning">
		  <div class="panel-heading">
		  	<h3 class="panel-title"><center><b><ins>PIDANA</ins><br><?php echo $title ?></b></center></h3>
		  </div> <!-- Divisi panel heading -->
		  <div class="panel-body">
		 	<div class="row">
		 	<div class="col-md-6">
		 	    Laporan : <a href="<?php echo $link_la ?>" class="btn-warning"><b> <i class="fa fa-calendar"></i> <?php echo $laporan ?></b></a>
                <br>
                Tentang : <a href="<?php echo $link_pe ?>" class="btn-danger"><b> <i class="fa fa-legal"></i> <?php echo $perkara ?></b></a>
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
		 	<div class="table-responsive">
  				<table id="table" class="table table-bordered table">
    			 <thead>
    				<tr>
                        <th><center>No</center></th>
    					<th><center>Nama Tahanan</center></th>
    					<th><center>Jenis Tahanan</center></th>
    					<th><center>Tahun Tahanan</center></th>
    				</tr>
    			 </thead>
 				 </table>
			</div>
		   	<!-- Button -->
		   	<hr>

		  </div>		
		 </div>
		</div>
		<div class="col-md-2">&nbsp</div>	
	  </div>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datatables/media/js/jquery.dataTables.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datatables/media/js/dataTables.bootstrap.min.js')?>"></script>

<script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
    var dataTable = $('#table').DataTable({  
      "processing":true,  
      "serverSide":true,  
      "order":[],  
      "ajax":{  
        url:"<?php echo base_url().'index.php/pidana/tahanan/data_tahanan'; ?>",  
        type:"POST"  
      },  
      "columnDefs":[  
        {  
          "targets":[0, 1, 2, 3],  
          "orderable":false,  
        },  
      ],  
    });    
 });  
 </script>