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
		 <div class="login-panel panel panel-success">
		  <div class="panel-heading">
		  	<h3 class="panel-title"><center><b><ins>PERDATA</ins><br><?php echo $title ?></b></center></h3>
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
    					<td colspan="12">MINUTASI <b>['Perkara Gugatan']</b></td>
    				</tr>
                    <?php
                    if(is_array($gugat) && count($gugat) >0) {
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
                    foreach ($gugat as $gtn) {
                    echo '
                    <tr>
                        <td><center>'.$gtn->jan_putus.'</center></td>
                        <td><center>'.$gtn->feb_putus.'</center></td>
                        <td><center>'.$gtn->mar_putus.'</center></td>
                        <td><center>'.$gtn->apr_putus.'</center></td>
                        <td><center>'.$gtn->mei_putus.'</center></td>
                        <td><center>'.$gtn->jun_putus.'</center></td>
                        <td><center>'.$gtn->jul_putus.'</center></td>
                        <td><center>'.$gtn->agt_putus.'</center></td>
                        <td><center>'.$gtn->sep_putus.'</center></td>
                        <td><center>'.$gtn->okt_putus.'</center></td>
                        <td><center>'.$gtn->nov_putus.'</center></td>
                        <td><center>'.$gtn->des_putus.'</center></td>
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
                        <td colspan="12">MINUTASI <b>['Perkara Gugatan Sederhana']</b></td>
                    </tr>
                    <?php
                    if(is_array($seder) && count($seder) >0) {
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
                    foreach ($seder as $sdr) {
                    echo '
                    <tr>
                        <td><center>'.$sdr->jan_putus.'</center></td>
                        <td><center>'.$sdr->feb_putus.'</center></td>
                        <td><center>'.$sdr->mar_putus.'</center></td>
                        <td><center>'.$sdr->apr_putus.'</center></td>
                        <td><center>'.$sdr->mei_putus.'</center></td>
                        <td><center>'.$sdr->jun_putus.'</center></td>
                        <td><center>'.$sdr->jul_putus.'</center></td>
                        <td><center>'.$sdr->agt_putus.'</center></td>
                        <td><center>'.$sdr->sep_putus.'</center></td>
                        <td><center>'.$sdr->okt_putus.'</center></td>
                        <td><center>'.$sdr->nov_putus.'</center></td>
                        <td><center>'.$sdr->des_putus.'</center></td>
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
                        <td colspan="12">MINUTASI <b>['Perkara Permohonan']</b></td>
                    </tr>
                    <?php
                    if(is_array($permo) && count($permo) >0) {
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
                    foreach ($permo as $prm) {
                    echo '
                    <tr>
                        <td><center>'.$prm->jan_putus.'</center></td>
                        <td><center>'.$prm->feb_putus.'</center></td>
                        <td><center>'.$prm->mar_putus.'</center></td>
                        <td><center>'.$prm->apr_putus.'</center></td>
                        <td><center>'.$prm->mei_putus.'</center></td>
                        <td><center>'.$prm->jun_putus.'</center></td>
                        <td><center>'.$prm->jul_putus.'</center></td>
                        <td><center>'.$prm->agt_putus.'</center></td>
                        <td><center>'.$prm->sep_putus.'</center></td>
                        <td><center>'.$prm->okt_putus.'</center></td>
                        <td><center>'.$prm->nov_putus.'</center></td>
                        <td><center>'.$prm->des_putus.'</center></td>
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
                        <td colspan="12">SISA <b>['Perkara Gugatan']</b></td>
                    </tr>
                    <?php
                    if(is_array($gugat) && count($gugat) >0) {
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
                    foreach ($gugat as $gtn) {
                    echo '
                    <tr>
                        <td><center>'.$gtn->jan_sisa.'</center></td>
                        <td><center>'.$gtn->feb_sisa.'</center></td>
                        <td><center>'.$gtn->mar_sisa.'</center></td>
                        <td><center>'.$gtn->apr_sisa.'</center></td>
                        <td><center>'.$gtn->mei_sisa.'</center></td>
                        <td><center>'.$gtn->jun_sisa.'</center></td>
                        <td><center>'.$gtn->jul_sisa.'</center></td>
                        <td><center>'.$gtn->agt_sisa.'</center></td>
                        <td><center>'.$gtn->sep_sisa.'</center></td>
                        <td><center>'.$gtn->okt_sisa.'</center></td>
                        <td><center>'.$gtn->nov_sisa.'</center></td>
                        <td><center>'.$gtn->des_sisa.'</center></td>
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
                        <td colspan="12">SISA <b>['Perkara Gugatan Sederhana']</b></td>
                    </tr>
                    <?php
                    if(is_array($permo) && count($permo) >0) {
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
                    foreach ($permo as $prm) {
                    echo '
                    <tr>
                        <td><center>'.$prm->jan_sisa.'</center></td>
                        <td><center>'.$prm->feb_sisa.'</center></td>
                        <td><center>'.$prm->mar_sisa.'</center></td>
                        <td><center>'.$prm->apr_sisa.'</center></td>
                        <td><center>'.$prm->mei_sisa.'</center></td>
                        <td><center>'.$prm->jun_sisa.'</center></td>
                        <td><center>'.$prm->jul_sisa.'</center></td>
                        <td><center>'.$prm->agt_sisa.'</center></td>
                        <td><center>'.$prm->sep_sisa.'</center></td>
                        <td><center>'.$prm->okt_sisa.'</center></td>
                        <td><center>'.$prm->nov_sisa.'</center></td>
                        <td><center>'.$prm->des_sisa.'</center></td>
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
                        <td colspan="12">SISA <b>['Perkara Permohonan']</b></td>
                    </tr>
                    <?php
                    if(is_array($permo) && count($permo) >0) {
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
                    foreach ($permo as $prm) {
                    echo '
                    <tr>
                        <td><center>'.$prm->jan_sisa.'</center></td>
                        <td><center>'.$prm->feb_sisa.'</center></td>
                        <td><center>'.$prm->mar_sisa.'</center></td>
                        <td><center>'.$prm->apr_sisa.'</center></td>
                        <td><center>'.$prm->mei_sisa.'</center></td>
                        <td><center>'.$prm->jun_sisa.'</center></td>
                        <td><center>'.$prm->jul_sisa.'</center></td>
                        <td><center>'.$prm->agt_sisa.'</center></td>
                        <td><center>'.$prm->sep_sisa.'</center></td>
                        <td><center>'.$prm->okt_sisa.'</center></td>
                        <td><center>'.$prm->nov_sisa.'</center></td>
                        <td><center>'.$prm->des_sisa.'</center></td>
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