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
		  	<h3 class="panel-title"><center><b><ins>PIDANA</ins><br><?php echo $head ?></b></center></h3>
		  <?php echo form_open('pidana/tahanan/add'); ?>
		  </div> <!-- Divisi panel heading -->
		  <div class="panel-body">
		 	<div class="row">
		 	<div class="col-md-6">
                Laporan : <a href="<?php echo $link_la ?>" class="btn-warning"><b> <i class="fa fa-calendar"></i> <?php echo $laporan ?></b></a>
		 		<br>
                Tentang : <a href="<?php echo $link_pe ?>" class="btn-danger"><b> <i class="fa fa-legal"></i> <?php echo $perkara ?></b></a>
		 	</div>
		 	<div class="col-md-2"></div>
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
		 		</tr>
		 		</table>
		 	</div>
		 	</div>
		 	<div id="notifications"><?php echo $this->session->flashdata('pesan');?></div>

		 	<hr>
		 	<div class="table-responsive">
  				<input type="hidden" name="nama_perkara" value="<?php echo $perkara ?>">
                <input type="hidden" name="nama_bagian" value="<?php echo $bagian ?>">
                <fieldset>
                    <label>Nama Tahanan</label>
                    <input type="text" class="form-control" name="nama_tahan" value="<?php echo set_value('nama_tahan'); ?>" placeholder="Nama Tahanan">
                    <i><?php echo form_error('nama_tahan'); ?></i>       
                </fieldset><br>
                <div class="container-fluid">
                  <div class="col-md-6">
                    <label>Jenis Tahanan</label>
                    <input type="text" class="form-control" name="jenis_tahan" value="<?php echo set_value('jenis_tahan'); ?>" placeholder="Jenis Tahanan">
                    <i><?php echo form_error('jenis_tahan'); ?></i>
                  </div>
                  <div class="col-md-6">
                Tahun Tahanan:
                <?php 
                $now = date('Y');
                echo "<select class='form-control' name='tahun'> ";
                for ($i=2010; $i <=$now ; $i++) { 
                    echo "<option value ='".$i."'>".$i."</option>";
                } 
                echo "</select>";
                ?>
                  </div>    
                </div>
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