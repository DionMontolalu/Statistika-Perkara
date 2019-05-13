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
		 <div class="login-panel panel panel-success">
		  <div class="panel-heading">
		  	<h3 class="panel-title"><center><b><ins>PERDATA</ins><br><?php echo $title ?></b></center></h3>
		  <?php echo form_open($add); ?>
		  </div> <!-- Divisi panel heading -->
		  <div class="panel-body">
		 	<div class="row">
		 	<div class="col-md-3">
		 		Pilih Tahun :
		 		<?php 
		 		$now = date('Y');
		 		echo "<select class='form-control' name='tahun'> ";
		 		for ($i=2010; $i <=$now ; $i++) { 
		 			echo "<option value ='".$i."'>".$i."</option>";
		 		} 
		 		echo "</select>";
		 		?>
		 	</div>
		 	<div class="col-md-5"></div>
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
		 	<div id="notifications"><?php echo $this->session->flashdata('pesan');?></div>

		 	<hr>
		 	<div class="table-responsive">
  				<table class="table table-bordered">
    				<input type="hidden" name="nama_perkara" value="<?php echo $perkara ?>">
    				<input type="hidden" name="nama_bagian" value="<?php echo $bagian ?>">
    				<tr>
    					<th><center>BULAN</center></th>
    					<td><center>Masuk</center></td>
    					<td><center>Putus</center></td>
    				</tr>
    				<tr>
    					<td><center>Januari</center></td>
    					<td><input type="number" class="form-control" name="jan_masuk" value="<?php echo set_value('jan_masuk'); ?>">
    						<i><?php echo form_error('jan_masuk'); ?></i>
    					</td>
    					<td><input type="number" class="form-control" name="jan_putus" value="<?php echo set_value('jan_putus'); ?>">
    						<i><?php echo form_error('jan_putus'); ?></i>
    					</td>
    				</tr>
    				<tr>
    					<td><center>Februari</center></td>
    					<td><input type="number" class="form-control" name="feb_masuk" value="<?php echo set_value('feb_masuk'); ?>">
    						<i><?php echo form_error('feb_masuk'); ?></i>
    					</td>
    					<td><input type="number" class="form-control" name="feb_putus" value="<?php echo set_value('feb_putus'); ?>">
    						<i><?php echo form_error('feb_putus'); ?></i>
    					</td>
    				</tr>
    				<tr>
    					<td><center>Maret</center></td>
    					<td><input type="number" class="form-control" name="mar_masuk" value="<?php echo set_value('mar_masuk'); ?>">
    						<i><?php echo form_error('mar_masuk'); ?></i>
    					</td>
    					<td><input type="number" class="form-control" name="mar_putus" value="<?php echo set_value('mar_putus'); ?>">
    						<i><?php echo form_error('mar_putus'); ?></i>
    					</td>
    				</tr>
    				<tr>
    					<td><center>April</center></td>
    					<td><input type="number" class="form-control" name="apr_masuk" value="<?php echo set_value('apr_masuk'); ?>">
    						<i><?php echo form_error('apr_masuk'); ?></i>
    					</td>
    					<td><input type="number" class="form-control" name="apr_putus" value="<?php echo set_value('apr_putus'); ?>">
    						<i><?php echo form_error('apr_putus'); ?></i>
    					</td>
    				</tr>
    				<tr>
    					<td><center>Mei</center></td>
    					<td><input type="number" class="form-control" name="mei_masuk" value="<?php echo set_value('mei_masuk'); ?>">
    						<i><?php echo form_error('mei_masuk'); ?></i>
    					</td>
    					<td><input type="number" class="form-control" name="mei_putus" value="<?php echo set_value('mei_putus'); ?>">
    						<i><?php echo form_error('mei_putus'); ?></i>
    					</td>
    				</tr>
    				<tr>
    					<td><center>Juni</center></td>
    					<td><input type="number" class="form-control" name="jun_masuk" value="<?php echo set_value('jun_masuk'); ?>">
    						<i><?php echo form_error('jun_masuk'); ?></i>
    					</td>
    					<td><input type="number" class="form-control" name="jun_putus" value="<?php echo set_value('jun_putus'); ?>">
    						<i><?php echo form_error('jun_putus'); ?></i>
    					</td>
    				</tr>
    				<tr>
    					<td><center>Juli</center></td>
    					<td><input type="number" class="form-control" name="jul_masuk" value="<?php echo set_value('jul_masuk'); ?>">
    						<i><?php echo form_error('jul_masuk'); ?></i>
    					</td>
    					<td><input type="number" class="form-control" name="jul_putus" value="<?php echo set_value('jul_putus'); ?>">
    						<i><?php echo form_error('jul_putus'); ?></i>
    					</td>
    				</tr>
    				<tr>
    					<td><center>Agustus</center></td>
    					<td><input type="number" class="form-control" name="agt_masuk" value="<?php echo set_value('agt_masuk'); ?>">
    						<i><?php echo form_error('agt_masuk'); ?></i>
    					</td>
    					<td><input type="number" class="form-control" name="agt_putus" value="<?php echo set_value('agt_putus'); ?>">
    						<i><?php echo form_error('agt_putus'); ?></i>
    					</td>
    				</tr>
    				<tr>
    					<td><center>September</center></td>
    					<td><input type="number" class="form-control" name="sep_masuk" value="<?php echo set_value('sep_masuk'); ?>">
    						<i><?php echo form_error('sep_masuk'); ?></i>    					
    					</td>
    					<td><input type="number" class="form-control" name="sep_putus" value="<?php echo set_value('sep_putus'); ?>">
    						<i><?php echo form_error('sep_putus'); ?></i>
    					</td>
    				</tr>
    				<tr>
    					<td><center>Oktober</center></td>
    					<td><input type="number" class="form-control" name="okt_masuk" value="<?php echo set_value('okt_masuk'); ?>">
    						<i><?php echo form_error('okt_masuk'); ?></i>
    					</td>
    					<td><input type="number" class="form-control" name="okt_putus" value="<?php echo set_value('okt_putus'); ?>">
    						<i><?php echo form_error('okt_putus'); ?></i>
    					</td>
    				</tr>
    				<tr>
    					<td><center>November</center></td>
    					<td><input type="number" class="form-control" name="nov_masuk" value="<?php echo set_value('nov_masuk'); ?>">
    						<i><?php echo form_error('nov_masuk'); ?></i>
    					</td>
    					<td><input type="number" class="form-control" name="nov_putus" value="<?php echo set_value('nov_putus'); ?>">
    						<i><?php echo form_error('nov_putus'); ?></i>
    					</td>
    				</tr>
    				<tr>
    					<td><center>Desember</center></td>
    					<td><input type="number" class="form-control" name="des_masuk" value="<?php echo set_value('des_masuk'); ?>">
    						<i><?php echo form_error('des_masuk'); ?></i>
    					</td>
    					<td><input type="number" class="form-control" name="des_putus" value="<?php echo set_value('des_putus'); ?>">
    						<i><?php echo form_error('des_putus'); ?></i>
    					</td>
    				</tr>
 				 </table>
			</div>
		   	<!-- Button -->
		   	<hr>
		   	<div align="right">
		   		<button type="submit" class="btn btn-danger" onclick="self.history.back()" ><b class="fa fa-times" aria-hidden="true"> BATAL</b></button>
				<button type="submit" class="btn btn-success" name="save"><b class="fa fa fa-floppy-o" aria-hidden="true"> SIMPAN</b></button>
		   	</div>
		   	</form>
		  </div>		
		 </div>
		</div>
		<div class="col-md-3">&nbsp</div>	
	  </div>
      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
      <script>
          $('#notifications').slideDown('slow').delay(3500).slideUp('slow');
      </script>