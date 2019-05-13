<div class="container">
	<br><br><br>
	  <div class="row">
		<!--
		<div class="col-md-4 text-center logo-margin">
			<img src="<?php //echo base_url() ?>/assets/img/pntondano.png" width="40%">
		</div> <!-- End Divisi image -->
		<div class="col-md-1">&nbsp</div>
		<div class="col-md-10">
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
                <!--
		 		<tr>
		 		<td>Perkara</td>
		 		<td>:</td>
		 		<td><a href="<?php //echo $link_pe ?>" class="btn-danger"><b> <i class="fa fa-legal"></i> <?php //echo $perkara ?></b></a></td>
		 		</tr> -->
		 		</table>
		 	</div>
		 	</div>
		 	<hr>
		 	<div class="table-responsive">
  				<table class="table table-bordered">
    				<tr>
    					<td colspan="12">MINUTASI <b>['Pidana Khusus']</b></td>
    				</tr>
                    <?php
                    if(is_array($khus) && count($khus) >0) {
                    echo '
                    <tr>
                        <td>Januari</td>
                        <td>Februari</td>
                        <td>Maret</td>
                        <td>April</td>
                        <td>Mei</td>
                        <td>Juni</td>
                        <td>Juli</td>
                        <td>Agustus</td>
                        <td>September</td>
                        <td>Oktober</td>
                        <td>November</td>
                        <td>Desember</td>
                    </tr>';
                    foreach ($khus as $khs) {
                    echo '
                    <tr>
                        <td><center>'.$khs->jan_putus.'</center></td>
                        <td><center>'.$khs->feb_putus.'</center></td>
                        <td><center>'.$khs->mar_putus.'</center></td>
                        <td><center>'.$khs->apr_putus.'</center></td>
                        <td><center>'.$khs->mei_putus.'</center></td>
                        <td><center>'.$khs->jun_putus.'</center></td>
                        <td><center>'.$khs->jul_putus.'</center></td>
                        <td><center>'.$khs->agt_putus.'</center></td>
                        <td><center>'.$khs->sep_putus.'</center></td>
                        <td><center>'.$khs->okt_putus.'</center></td>
                        <td><center>'.$khs->nov_putus.'</center></td>
                        <td><center>'.$khs->des_putus.'</center></td>
                    </tr>';
                    }
                    }else{
                        echo "
                        <tr>
                            <td colspan=12>Data Tidak ada, atau belum dimasukan !!</td>
                        </tr>";
                    }
                    ?>

                    <tr>
                        <td colspan="12">MINUTASI <b>['Tipiring']</b></td>
                    </tr>
                    <?php
                    if(is_array($tipi) && count($tipi) >0) {
                    echo "
                    <tr>
                        <td>Januari</td>
                        <td>Februari</td>
                        <td>Maret</td>
                        <td>April</td>
                        <td>Mei</td>
                        <td>Juni</td>
                        <td>Juli</td>
                        <td>Agustus</td>
                        <td>September</td>
                        <td>Oktober</td>
                        <td>November</td>
                        <td>Desember</td>
                    </tr>";
                    foreach ($tipi as $tip) {
                    echo '
                    <tr>
                        <td><center>'.$tip->jan_putus.'</center></td>
                        <td><center>'.$tip->feb_putus.'</center></td>
                        <td><center>'.$tip->mar_putus.'</center></td>
                        <td><center>'.$tip->apr_putus.'</center></td>
                        <td><center>'.$tip->mei_putus.'</center></td>
                        <td><center>'.$tip->jun_putus.'</center></td>
                        <td><center>'.$tip->jul_putus.'</center></td>
                        <td><center>'.$tip->agt_putus.'</center></td>
                        <td><center>'.$tip->sep_putus.'</center></td>
                        <td><center>'.$tip->okt_putus.'</center></td>
                        <td><center>'.$tip->nov_putus.'</center></td>
                        <td><center>'.$tip->des_putus.'</center></td>
                    </tr>';
                    }
                    }else{
                        echo "
                        <tr>
                            <td colspan=12>Data Tidak ada, atau belum dimasukan !!</td>
                        </tr>";
                    }
                    ?>

                    <tr>
                        <td colspan="12">MINUTASI <b>['Pidana Biasa']</b></td>
                    </tr>
                    <?php
                    if(is_array($bias) && count($bias) >0) {
                    echo "
                    <tr>
                        <td>Januari</td>
                        <td>Februari</td>
                        <td>Maret</td>
                        <td>April</td>
                        <td>Mei</td>
                        <td>Juni</td>
                        <td>Juli</td>
                        <td>Agustus</td>
                        <td>September</td>
                        <td>Oktober</td>
                        <td>November</td>
                        <td>Desember</td>
                    </tr>";
                    foreach ($bias as $bis) {
                    echo '
                    <tr>
                        <td><center>'.$bis->jan_putus.'</center></td>
                        <td><center>'.$bis->feb_putus.'</center></td>
                        <td><center>'.$bis->mar_putus.'</center></td>
                        <td><center>'.$bis->apr_putus.'</center></td>
                        <td><center>'.$bis->mei_putus.'</center></td>
                        <td><center>'.$bis->jun_putus.'</center></td>
                        <td><center>'.$bis->jul_putus.'</center></td>
                        <td><center>'.$bis->agt_putus.'</center></td>
                        <td><center>'.$bis->sep_putus.'</center></td>
                        <td><center>'.$bis->okt_putus.'</center></td>
                        <td><center>'.$bis->nov_putus.'</center></td>
                        <td><center>'.$bis->des_putus.'</center></td>
                    </tr>';
                    }
                    }else{
                        echo "
                        <tr>
                            <td colspan=12>Data Tidak ada, atau belum dimasukan !!</td>
                        </tr>";
                    }
                    ?>

                    <tr>
                        <td colspan="12">SISA <b>['Pidana Khusus']</b></td>
                    </tr>
                    <?php
                    if(is_array($khus) && count($khus) >0) {
                    echo "
                    <tr>
                        <td>Januari</td>
                        <td>Februari</td>
                        <td>Maret</td>
                        <td>April</td>
                        <td>Mei</td>
                        <td>Juni</td>
                        <td>Juli</td>
                        <td>Agustus</td>
                        <td>September</td>
                        <td>Oktober</td>
                        <td>November</td>
                        <td>Desember</td>
                    </tr>";
                    foreach ($khus as $khs) {
                    echo '
                    <tr>
                        <td><center>'.$khs->jan_sisa.'</center></td>
                        <td><center>'.$khs->feb_sisa.'</center></td>
                        <td><center>'.$khs->mar_sisa.'</center></td>
                        <td><center>'.$khs->apr_sisa.'</center></td>
                        <td><center>'.$khs->mei_sisa.'</center></td>
                        <td><center>'.$khs->jun_sisa.'</center></td>
                        <td><center>'.$khs->jul_sisa.'</center></td>
                        <td><center>'.$khs->agt_sisa.'</center></td>
                        <td><center>'.$khs->sep_sisa.'</center></td>
                        <td><center>'.$khs->okt_sisa.'</center></td>
                        <td><center>'.$khs->nov_sisa.'</center></td>
                        <td><center>'.$khs->des_sisa.'</center></td>
                    </tr>';
                    }
                    }else{
                        echo "
                        <tr>
                            <td colspan=12>Data Tidak ada, atau belum dimasukan !!</td>
                        </tr>";
                    }
                    ?>

                    <tr>
                        <td colspan="12">SISA <b>['Tipiring']</b></td>
                    </tr>
                    <?php
                    if(is_array($tipi) && count($tipi) >0) {
                    echo "
                    <tr>
                        <td>Januari</td>
                        <td>Februari</td>
                        <td>Maret</td>
                        <td>April</td>
                        <td>Mei</td>
                        <td>Juni</td>
                        <td>Juli</td>
                        <td>Agustus</td>
                        <td>September</td>
                        <td>Oktober</td>
                        <td>November</td>
                        <td>Desember</td>
                    </tr>";
                    foreach ($tipi as $tip) {
                    echo '
                    <tr>
                        <td><center>'.$tip->jan_sisa.'</center></td>
                        <td><center>'.$tip->feb_sisa.'</center></td>
                        <td><center>'.$tip->mar_sisa.'</center></td>
                        <td><center>'.$tip->apr_sisa.'</center></td>
                        <td><center>'.$tip->mei_sisa.'</center></td>
                        <td><center>'.$tip->jun_sisa.'</center></td>
                        <td><center>'.$tip->jul_sisa.'</center></td>
                        <td><center>'.$tip->agt_sisa.'</center></td>
                        <td><center>'.$tip->sep_sisa.'</center></td>
                        <td><center>'.$tip->okt_sisa.'</center></td>
                        <td><center>'.$tip->nov_sisa.'</center></td>
                        <td><center>'.$tip->des_sisa.'</center></td>
                    </tr>';
                    }
                    }else{
                        echo "
                        <tr>
                            <td colspan=12>Data Tidak ada, atau belum dimasukan !!</td>
                        </tr>";
                    }
                    ?>

                    <tr>
                        <td colspan="12">SISA <b>['Pidana Biasa']</b></td>
                    </tr>
                    <?php
                    if(is_array($bias) && count($bias) >0) {
                    echo "
                    <tr>
                        <td>Januari</td>
                        <td>Februari</td>
                        <td>Maret</td>
                        <td>April</td>
                        <td>Mei</td>
                        <td>Juni</td>
                        <td>Juli</td>
                        <td>Agustus</td>
                        <td>September</td>
                        <td>Oktober</td>
                        <td>November</td>
                        <td>Desember</td>
                    </tr>";
                    foreach ($bias as $bis) {
                    echo '
                    <tr>
                        <td><center>'.$bis->jan_sisa.'</center></td>
                        <td><center>'.$bis->feb_sisa.'</center></td>
                        <td><center>'.$bis->mar_sisa.'</center></td>
                        <td><center>'.$bis->apr_sisa.'</center></td>
                        <td><center>'.$bis->mei_sisa.'</center></td>
                        <td><center>'.$bis->jun_sisa.'</center></td>
                        <td><center>'.$bis->jul_sisa.'</center></td>
                        <td><center>'.$bis->agt_sisa.'</center></td>
                        <td><center>'.$bis->sep_sisa.'</center></td>
                        <td><center>'.$bis->okt_sisa.'</center></td>
                        <td><center>'.$bis->nov_sisa.'</center></td>
                        <td><center>'.$bis->des_sisa.'</center></td>
                    </tr>';
                    }
                    }else{
                        echo "
                        <tr>
                            <td colspan=12>Data Tidak ada, atau belum dimasukan !!</td>
                        </tr>";
                    }
                    ?>
 				 </table>
			</div>
		   	<!-- Button -->
		   	<hr>

		  </div>		
		 </div>
		</div>
		<div class="col-md-1">&nbsp</div>	
	  </div>