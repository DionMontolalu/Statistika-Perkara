<div class="container">
	<br><br><br>
	  <div class="row">
		<!--
		<div class="col-md-4 text-center logo-margin">
			<img src="<?php //echo base_url() ?>/assets/img/pntondano.png" width="40%">
		</div> <!-- End Divisi image -->
		<div class="col-md-3">&nbsp</div>
		<div class="col-md-6">
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
		 	<div class="col-md-3">
		 	<?php echo form_open($cari) ?>
		 		Pilih Tahun :
		 		<?php
                    $tahun_atribute = 'class ="form-control select2"';
                    echo form_dropdown('tahun', $tahun, $tahun_selected, $tahun_atribute);
                ?>
		 	</div>
		 	<div class="col-md-5"><br>
		 		<button type="submit" class="btn btn-success" name="search"><b><i class="fa fa-search"></i> Cari Data</b></button></input>
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
		 		<tr>
		 		<td>Laporan</td>
		 		<td>:</td>
		 		<td><a href="<?php echo $link_la ?>" class="btn-warning"><b> <i class="fa fa-calendar"></i> <?php echo $laporan ?></b></a></td>
		 		</tr>
		 		<tr>
		 		<td>Perkara</td>
		 		<td>:</td>
		 		<td><a href="<?php echo $link_pe ?>" class="btn-danger"><b> <i class="fa fa-legal"></i> <?php echo $perkara ?></b></a></td>
		 		</tr>
		 		</table>
		 	</div>
		 	</div>
		 	<hr>
		 	<div class="table-responsive">
  				<table class="table table-bordered">
    				<tr>
    					<th><center>BULAN</center></th>
    					<td><center>Perkara Masuk</center></td>
    					<td><center>Perkara Putus</center></td>
    					<td><center>Sisa Perkara</center></td>
    				</tr>
    				<?php
    			if(is_array($tampil) && count($tampil) >0) {
    				foreach ($tampil as $data) {
    				 echo '
    				  <tr>
    					<td><center>Januari</center></td>
    					<td><center>'.$data->jan_masuk.'</center></td>
    					<td><center>'.$data->jan_putus.'</center></td>
    					<td><center>'.$data->jan_sisa.'</center></td>
    				  </tr>
    				  <tr>
    					<td><center>Februari</center></td>
    					<td><center>'.$data->feb_masuk.'</center></td>
    					<td><center>'.$data->feb_putus.'</center></td>
    					<td><center>'.$data->feb_sisa.'</center></td>
    				  </tr>
    				  <tr>
    					<td><center>Maret</center></td>
    					<td><center>'.$data->mar_masuk.'</center></td>
    					<td><center>'.$data->mar_putus.'</center></td>
    					<td><center>'.$data->mar_sisa.'</center></td>
    				  </tr>
    				  <tr>
    					<td><center>April</center></td>
    					<td><center>'.$data->apr_masuk.'</center></td>
    					<td><center>'.$data->apr_putus.'</center></td>
    					<td><center>'.$data->apr_sisa.'</center></td>
    				  </tr>
    				  <tr>
    					<td><center>Mei</center></td>
    					<td><center>'.$data->mei_masuk.'</center></td>
    					<td><center>'.$data->mei_putus.'</center></td>
    					<td><center>'.$data->mei_sisa.'</center></td>
    				  </tr>
    				  <tr>
    					<td><center>Juni</center></td>
    					<td><center>'.$data->jun_masuk.'</center></td>
    					<td><center>'.$data->jun_putus.'</center></td>
    					<td><center>'.$data->jun_sisa.'</center></td>
    				  </tr>
    				  <tr>
    					<td><center>Juli</center></td>
    					<td><center>'.$data->jul_masuk.'</center></td>
    					<td><center>'.$data->jul_putus.'</center></td>
    					<td><center>'.$data->jul_sisa.'</center></td>
    				  </tr>
    				  <tr>
    					<td><center>Agustus</center></td>
    					<td><center>'.$data->agt_masuk.'</center></td>
    					<td><center>'.$data->agt_putus.'</center></td>
    					<td><center>'.$data->agt_sisa.'</center></td>
    				  </tr>
    				  <tr>
    					<td><center>September</center></td>
    					<td><center>'.$data->sep_masuk.'</center></td>
    					<td><center>'.$data->sep_putus.'</center></td>
    					<td><center>'.$data->sep_sisa.'</center></td>
    				  </tr>
    				  <tr>
    					<td><center>Oktober</center></td>
    					<td><center>'.$data->okt_masuk.'</center></td>
    					<td><center>'.$data->okt_putus.'</center></td>
    					<td><center>'.$data->okt_sisa.'</center></td>
    				  </tr>
    				  <tr>
    					<td><center>November</center></td>
    					<td><center>'.$data->nov_masuk.'</center></td>
    					<td><center>'.$data->nov_putus.'</center></td>
    					<td><center>'.$data->nov_sisa.'</center></td>
    				  </tr>
    				  <tr>
    					<td><center>Desember</center></td>
    					<td><center>'.$data->des_masuk.'</center></td>
    					<td><center>'.$data->des_putus.'</center></td>
    					<td><center>'.$data->des_sisa.'</center></td>
    				  </tr>';
    				}
    				
    			}else{
    				echo '
    				<tr>
    					<td colspan=4>Data tidak ada atau belum dimasukan</td>
    				</tr>';
    			}
    				?>
 				 </table>
			</div>
		   	<!-- Button -->
		   	<hr>

		  </div>		
		 </div>
		</div>
		<div class="col-md-3">&nbsp</div>	
	  </div>