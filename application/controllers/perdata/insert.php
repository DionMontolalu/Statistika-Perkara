<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('perdata/m_insert');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	//Method untuk insert data gugatan bulanan
	function gugatan_add() {
		if(isset($_POST['save'])) {
			$this->form_validation->set_rules('jan_masuk','Januari Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jan_putus','Januari Putus','trim|numeric|required');
			$this->form_validation->set_rules('feb_masuk','Februari Masuk','trim|numeric|required');
			$this->form_validation->set_rules('feb_putus','Februari Putus','trim|numeric|required');
			$this->form_validation->set_rules('mar_masuk','Maret Masuk','trim|numeric|required');
			$this->form_validation->set_rules('mar_putus','Maret Putus','trim|numeric|required');
			$this->form_validation->set_rules('apr_masuk','April Masuk','trim|numeric|required');
			$this->form_validation->set_rules('apr_putus','April Putus','trim|numeric|required');
			$this->form_validation->set_rules('mei_masuk','Mei Masuk','trim|numeric|required');
			$this->form_validation->set_rules('mei_putus','Mei Putus','trim|numeric|required');
			$this->form_validation->set_rules('jun_masuk','Juni Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jun_putus','Juni Putus','trim|numeric|required');
			$this->form_validation->set_rules('jul_masuk','Juli Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jul_putus','Juli Putus','trim|numeric|required');
			$this->form_validation->set_rules('agt_masuk','Agustus Masuk','trim|numeric|required');
			$this->form_validation->set_rules('agt_putus','Agustus Putus','trim|numeric|required');
			$this->form_validation->set_rules('sep_masuk','September Masuk','trim|numeric|required');
			$this->form_validation->set_rules('sep_putus','September Putus','trim|numeric|required');
			$this->form_validation->set_rules('okt_masuk','Oktober Masuk','trim|numeric|required');
			$this->form_validation->set_rules('okt_putus','Oktober Putus','trim|numeric|required');
			$this->form_validation->set_rules('nov_masuk','November Masuk','trim|numeric|required');
			$this->form_validation->set_rules('nov_putus','November Putus','trim|numeric|required');
			$this->form_validation->set_rules('des_masuk','Desember Masuk','trim|numeric|required');
			$this->form_validation->set_rules('des_putus','Desember Putus','trim|numeric|required');
			if($this->form_validation->run() != false) {
				//Mengisi insert post ke dalam variabel
				$jnm = $this->input->post('jan_masuk');
				$jnp = $this->input->post('jan_putus');
				$jns = $jnm - $jnp;
				$fem = $this->input->post('feb_masuk');
				$fep = $this->input->post('feb_putus');
				$fek = $fem - $fep; //Untuk mengambil sisa perkara bulan februari 
				$fes = $jns + $fek; //Untuk tambah sisa perkara bulan januari - februari
				$mam = $this->input->post('mar_masuk');
				$map = $this->input->post('mar_putus');
				$mak = $mam - $map; //Untuk mengambil sisa perkara bulan Maret
				$mas = $fes + $mak; //Untuk tambah sisa perkara bulan januari - maret
				$apm = $this->input->post('apr_masuk');
				$app = $this->input->post('apr_putus');
				$apk = $apm - $app; //Untuk mengambil sisa perkara bulan Maret
 				$aps = $mas + $apk; //Untuk tambah sisa perkara bulan januari - april
				$mem = $this->input->post('mei_masuk');
				$mep = $this->input->post('mei_putus');
				$mek = $mem - $mep;
				$mes = $aps + $mek;
				$junm = $this->input->post('jun_masuk');
				$junp = $this->input->post('jun_putus');
				$junk = $junm - $junp;
				$juns = $mes + $junk;
				$julm = $this->input->post('jul_masuk');
				$julp = $this->input->post('jul_putus');
				$julk = $julm - $julp;
				$juls = $juns + $julk;
				$agm = $this->input->post('agt_masuk');
				$agp = $this->input->post('agt_putus');
				$agk = $agm - $agp;
				$ags = $juls + $agk;
				$sem = $this->input->post('sep_masuk');
				$sep = $this->input->post('sep_putus');
				$sek = $sem - $sep;
				$ses = $ags + $sek;
				$okm = $this->input->post('okt_masuk');
				$okp = $this->input->post('okt_putus');
				$okk = $okm - $okp;
				$oks = $ses + $okk;
				$nom = $this->input->post('nov_masuk');
				$nop = $this->input->post('nov_putus');
				$nok = $nom - $nop;
				$nos = $oks + $nok;
				$dem = $this->input->post('des_masuk');
				$dep = $this->input->post('des_putus');
				$dek = $dem - $dep;
				$des = $nos + $dek;

				//Penghitungan Triwulan
				$tri_masuk1 = $jnm + $fem + $mam;
				$tri_putus1 = $jnp + $fep + $map;
				$tri_sisa1 = $jns + $fes + $mas;

				$tri_masuk2 = $apm + $mem + $junm;
				$tri_putus2 = $app + $mep + $junp;
				$tri_sisa2 = $aps + $mes + $juns;

				$tri_masuk3 = $julm + $agm + $sem;
				$tri_putus3 = $julp + $agp + $sep;
				$tri_sisa3 = $juls + $ags + $ses;

				$tri_masuk4 = $okm + $nom + $dem;
				$tri_putus4 = $okp + $nop + $dep;
				$tri_sisa4 = $oks + $nos + $des;

				//Penghitungan per-Semester
				$sem_masuk1 = $tri_masuk1 + $tri_masuk2;
				$sem_putus1 = $tri_putus1 + $tri_putus2;
				$sem_sisa1 = $tri_sisa1 + $tri_sisa2;

				$sem_masuk2 = $tri_masuk3 + $tri_masuk4;
				$sem_putus2 = $tri_putus3 + $tri_putus4;
				$sem_sisa2 = $tri_sisa3 + $tri_sisa4;

				//Penghitungan Tahun
				$thn_masuk = $sem_masuk1 + $sem_masuk2;
				$thn_putus = $sem_putus1 + $sem_putus2;
				$thn_sisa = $sem_sisa1 + $sem_sisa2; 

				$tahun = array(
					'tahun' => $this->input->post('tahun'),
					'masuk_tahun' => $thn_masuk,
					'putus_tahun' => $thn_putus,
					'sisa_tahun' => $thn_sisa
				);$this->db->insert('tahun',$tahun);
				$last_thn = $this->db->insert_id();
				
				$perkara = array(
					'nama_perkara' => $this->input->post('nama_perkara') 
				);$this->db->insert('perkara',$perkara);
				$last_per = $this->db->insert_id();

				$bagian = array(
					'nama_bagian' => $this->input->post('nama_bagian')
				);$this->db->insert('bagian',$bagian);
				$last_bag = $this->db->insert_id();

				$bulan = array(
					'jan_masuk' => $jnm,
					'jan_putus' => $jnp,
					'jan_sisa' => $jns,
					'feb_masuk' => $fem,
					'feb_putus' => $fep, 
					'feb_sisa' => $fes,
					'mar_masuk' => $mam,
					'mar_putus' => $map,
					'mar_sisa' => $mas,
					'apr_masuk' => $apm,
					'apr_putus' => $app,
					'apr_sisa' => $aps,
					'mei_masuk' => $mem,
					'mei_putus' => $mep,
					'mei_sisa' => $mes,
					'jun_masuk' => $junm,
					'jun_putus' => $junp,
					'jun_sisa' => $juns,
					'jul_masuk' => $julm,
					'jul_putus' => $julp,
					'jul_sisa' => $juls,
					'agt_masuk' => $agm,
					'agt_putus' => $agp,
					'agt_sisa' => $ags,
					'sep_masuk' => $sem,
					'sep_putus' => $sep,
					'sep_sisa' => $ses,
					'okt_masuk' => $okm,
					'okt_putus' => $okp,
					'okt_sisa' => $oks,
					'nov_masuk' => $nom,
					'nov_putus' => $nop,
					'nov_sisa' => $nos,
					'des_masuk' => $dem,
					'des_putus' => $dep,
					'des_sisa' => $des,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);

				$triwulan = array(
					'tri1_masuk' => $tri_masuk1,
					'tri1_putus' => $tri_putus1,
					'tri1_sisa' => $tri_sisa1,
					'tri2_masuk' => $tri_masuk1,
					'tri2_putus' => $tri_putus2,
					'tri2_sisa' => $tri_sisa2,
					'tri3_masuk' => $tri_masuk3,
					'tri3_putus' => $tri_putus3,
					'tri3_sisa' => $tri_sisa3,
					'tri4_masuk' => $tri_masuk4,
					'tri4_putus' => $tri_putus4,
					'tri4_sisa' => $tri_sisa4,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);

				$semester = array(
					'sem1_masuk' => $sem_masuk1,
					'sem1_putus' => $sem_putus1,
					'sem1_sisa' => $sem_sisa1,
					'sem2_masuk' => $sem_masuk2,
					'sem2_putus' => $sem_putus2,
					'sem2_sisa' => $sem_sisa2,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);
			$this->m_insert->add($bulan,$triwulan,$semester);
			$this->session->set_flashdata('pesan', 
				'<div class="alert alert-success" role="alert">
              <b><span class="fa fa-check"></span> Data Gugatan Bulanan berhasil disimpan ! </b></div>');
				redirect('perdata/insert/gugatan_add');
				
				/*
				echo "<pre>";
				print_r($tahun);
				echo "<br>";
				print_r($perkara);
				echo "<br>";
				print_r($bagian);
				echo "<br>";
				print_r($bulan);
				echo "<br>";
				print_r($triwulan);
				echo "<br>";
				print_r($semester);
				echo "<br>";
				echo "</pre>"; */

			}else{ //Else jika validasi gagal
				$data = array('title' => 'Gugatan Bulanan',
					  'head' => 'PERDATA GUGATAN', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Gugatan',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/gugatan_add'
					  );
				$this->load->view('perdata/design/combination',$data);
			}
		}else{ //Else jika name save tidak ditemukan
			$data = array('title' => 'Gugatan Bulanan',
					  'head' => 'PERDATA GUGATAN', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Gugatan',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/gugatan_add'
					  );
			$this->load->view('perdata/design/combination',$data);
		}
	}

	function banding_add() {
		if(isset($_POST['save'])) {
			$this->form_validation->set_rules('jan_masuk','Januari Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jan_putus','Januari Putus','trim|numeric|required');
			$this->form_validation->set_rules('feb_masuk','Februari Masuk','trim|numeric|required');
			$this->form_validation->set_rules('feb_putus','Februari Putus','trim|numeric|required');
			$this->form_validation->set_rules('mar_masuk','Maret Masuk','trim|numeric|required');
			$this->form_validation->set_rules('mar_putus','Maret Putus','trim|numeric|required');
			$this->form_validation->set_rules('apr_masuk','April Masuk','trim|numeric|required');
			$this->form_validation->set_rules('apr_putus','April Putus','trim|numeric|required');
			$this->form_validation->set_rules('mei_masuk','Mei Masuk','trim|numeric|required');
			$this->form_validation->set_rules('mei_putus','Mei Putus','trim|numeric|required');
			$this->form_validation->set_rules('jun_masuk','Juni Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jun_putus','Juni Putus','trim|numeric|required');
			$this->form_validation->set_rules('jul_masuk','Juli Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jul_putus','Juli Putus','trim|numeric|required');
			$this->form_validation->set_rules('agt_masuk','Agustus Masuk','trim|numeric|required');
			$this->form_validation->set_rules('agt_putus','Agustus Putus','trim|numeric|required');
			$this->form_validation->set_rules('sep_masuk','September Masuk','trim|numeric|required');
			$this->form_validation->set_rules('sep_putus','September Putus','trim|numeric|required');
			$this->form_validation->set_rules('okt_masuk','Oktober Masuk','trim|numeric|required');
			$this->form_validation->set_rules('okt_putus','Oktober Putus','trim|numeric|required');
			$this->form_validation->set_rules('nov_masuk','November Masuk','trim|numeric|required');
			$this->form_validation->set_rules('nov_putus','November Putus','trim|numeric|required');
			$this->form_validation->set_rules('des_masuk','Desember Masuk','trim|numeric|required');
			$this->form_validation->set_rules('des_putus','Desember Putus','trim|numeric|required');
			if($this->form_validation->run() != false) {
				//Mengisi insert post ke dalam variabel
				$jnm = $this->input->post('jan_masuk');
				$jnp = $this->input->post('jan_putus');
				$jns = $jnm - $jnp;
				$fem = $this->input->post('feb_masuk');
				$fep = $this->input->post('feb_putus');
				$fek = $fem - $fep; //Untuk mengambil sisa perkara bulan februari 
				$fes = $jns + $fek; //Untuk tambah sisa perkara bulan januari - februari
				$mam = $this->input->post('mar_masuk');
				$map = $this->input->post('mar_putus');
				$mak = $mam - $map; //Untuk mengambil sisa perkara bulan Maret
				$mas = $fes + $mak; //Untuk tambah sisa perkara bulan januari - maret
				$apm = $this->input->post('apr_masuk');
				$app = $this->input->post('apr_putus');
				$apk = $apm - $app; //Untuk mengambil sisa perkara bulan Maret
 				$aps = $mas + $apk; //Untuk tambah sisa perkara bulan januari - april
				$mem = $this->input->post('mei_masuk');
				$mep = $this->input->post('mei_putus');
				$mek = $mem - $mep;
				$mes = $aps + $mek;
				$junm = $this->input->post('jun_masuk');
				$junp = $this->input->post('jun_putus');
				$junk = $junm - $junp;
				$juns = $mes + $junk;
				$julm = $this->input->post('jul_masuk');
				$julp = $this->input->post('jul_putus');
				$julk = $julm - $julp;
				$juls = $juns + $julk;
				$agm = $this->input->post('agt_masuk');
				$agp = $this->input->post('agt_putus');
				$agk = $agm - $agp;
				$ags = $juls + $agk;
				$sem = $this->input->post('sep_masuk');
				$sep = $this->input->post('sep_putus');
				$sek = $sem - $sep;
				$ses = $ags + $sek;
				$okm = $this->input->post('okt_masuk');
				$okp = $this->input->post('okt_putus');
				$okk = $okm - $okp;
				$oks = $ses + $okk;
				$nom = $this->input->post('nov_masuk');
				$nop = $this->input->post('nov_putus');
				$nok = $nom - $nop;
				$nos = $oks + $nok;
				$dem = $this->input->post('des_masuk');
				$dep = $this->input->post('des_putus');
				$dek = $dem - $dep;
				$des = $nos + $dek;

				//Penghitungan Triwulan
				$tri_masuk1 = $jnm + $fem + $mam;
				$tri_putus1 = $jnp + $fep + $map;
				$tri_sisa1 = $jns + $fes + $mas;

				$tri_masuk2 = $apm + $mem + $junm;
				$tri_putus2 = $app + $mep + $junp;
				$tri_sisa2 = $aps + $mes + $juns;

				$tri_masuk3 = $julm + $agm + $sem;
				$tri_putus3 = $julp + $agp + $sep;
				$tri_sisa3 = $juls + $ags + $ses;

				$tri_masuk4 = $okm + $nom + $dem;
				$tri_putus4 = $okp + $nop + $dep;
				$tri_sisa4 = $oks + $nos + $des;

				//Penghitungan per-Semester
				$sem_masuk1 = $tri_masuk1 + $tri_masuk2;
				$sem_putus1 = $tri_putus1 + $tri_putus2;
				$sem_sisa1 = $tri_sisa1 + $tri_sisa2;

				$sem_masuk2 = $tri_masuk3 + $tri_masuk4;
				$sem_putus2 = $tri_putus3 + $tri_putus4;
				$sem_sisa2 = $tri_sisa3 + $tri_sisa4;

				//Penghitungan Tahun
				$thn_masuk = $sem_masuk1 + $sem_masuk2;
				$thn_putus = $sem_putus1 + $sem_putus2;
				$thn_sisa = $sem_sisa1 + $sem_sisa2; 

				$tahun = array(
					'tahun' => $this->input->post('tahun'),
					'masuk_tahun' => $thn_masuk,
					'putus_tahun' => $thn_putus,
					'sisa_tahun' => $thn_sisa
				);$this->db->insert('tahun',$tahun);
				$last_thn = $this->db->insert_id();
				
				$perkara = array(
					'nama_perkara' => $this->input->post('nama_perkara') 
				);$this->db->insert('perkara',$perkara);
				$last_per = $this->db->insert_id();

				$bagian = array(
					'nama_bagian' => $this->input->post('nama_bagian')
				);$this->db->insert('bagian',$bagian);
				$last_bag = $this->db->insert_id();

				$bulan = array(
					'jan_masuk' => $jnm,
					'jan_putus' => $jnp,
					'jan_sisa' => $jns,
					'feb_masuk' => $fem,
					'feb_putus' => $fep, 
					'feb_sisa' => $fes,
					'mar_masuk' => $mam,
					'mar_putus' => $map,
					'mar_sisa' => $mas,
					'apr_masuk' => $apm,
					'apr_putus' => $app,
					'apr_sisa' => $aps,
					'mei_masuk' => $mem,
					'mei_putus' => $mep,
					'mei_sisa' => $mes,
					'jun_masuk' => $junm,
					'jun_putus' => $junp,
					'jun_sisa' => $juns,
					'jul_masuk' => $julm,
					'jul_putus' => $julp,
					'jul_sisa' => $juls,
					'agt_masuk' => $agm,
					'agt_putus' => $agp,
					'agt_sisa' => $ags,
					'sep_masuk' => $sem,
					'sep_putus' => $sep,
					'sep_sisa' => $ses,
					'okt_masuk' => $okm,
					'okt_putus' => $okp,
					'okt_sisa' => $oks,
					'nov_masuk' => $nom,
					'nov_putus' => $nop,
					'nov_sisa' => $nos,
					'des_masuk' => $dem,
					'des_putus' => $dep,
					'des_sisa' => $des,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);

				$triwulan = array(
					'tri1_masuk' => $tri_masuk1,
					'tri1_putus' => $tri_putus1,
					'tri1_sisa' => $tri_sisa1,
					'tri2_masuk' => $tri_masuk1,
					'tri2_putus' => $tri_putus2,
					'tri2_sisa' => $tri_sisa2,
					'tri3_masuk' => $tri_masuk3,
					'tri3_putus' => $tri_putus3,
					'tri3_sisa' => $tri_sisa3,
					'tri4_masuk' => $tri_masuk4,
					'tri4_putus' => $tri_putus4,
					'tri4_sisa' => $tri_sisa4,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag

				);

				$semester = array(
					'sem1_masuk' => $sem_masuk1,
					'sem1_putus' => $sem_putus1,
					'sem1_sisa' => $sem_sisa1,
					'sem2_masuk' => $sem_masuk2,
					'sem2_putus' => $sem_putus2,
					'sem2_sisa' => $sem_sisa2,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);
			$this->m_insert->add($bulan,$triwulan,$semester);
			$this->session->set_flashdata('pesan', 
				'<div class="alert alert-success" role="alert">
              <b><span class="fa fa-check"></span> Data Banding Bulanan berhasil disimpan ! </b></div>');
				redirect('perdata/insert/banding_add');

				/*
				echo "<pre>";
				print_r($tahun);
				echo "<br>";
				print_r($perkara);
				echo "<br>";
				print_r($bagian);
				echo "<br>";
				print_r($bulan);
				echo "<br>";
				print_r($triwulan);
				echo "<br>";
				print_r($semester);
				echo "<br>";
				echo "</pre>"; */

			}else{ //Else jika validasi gagal
				$data = array('title' => 'Banding Bulanan',
					  'head' => 'PERDATA BANDING', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Banding',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/banding_add'
					  );
		$this->load->view('perdata/design/combination',$data);
			}
		}else{ //Else jika name save tidak ditemukan
			$data = array('title' => 'Banding Bulanan',
					  'head' => 'PERDATA BANDING', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Banding',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/banding_add'
					  );
			$this->load->view('perdata/design/combination',$data);
		}
	}

	function sederhana_add() {
		if(isset($_POST['save'])) {
			$this->form_validation->set_rules('jan_masuk','Januari Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jan_putus','Januari Putus','trim|numeric|required');
			$this->form_validation->set_rules('feb_masuk','Februari Masuk','trim|numeric|required');
			$this->form_validation->set_rules('feb_putus','Februari Putus','trim|numeric|required');
			$this->form_validation->set_rules('mar_masuk','Maret Masuk','trim|numeric|required');
			$this->form_validation->set_rules('mar_putus','Maret Putus','trim|numeric|required');
			$this->form_validation->set_rules('apr_masuk','April Masuk','trim|numeric|required');
			$this->form_validation->set_rules('apr_putus','April Putus','trim|numeric|required');
			$this->form_validation->set_rules('mei_masuk','Mei Masuk','trim|numeric|required');
			$this->form_validation->set_rules('mei_putus','Mei Putus','trim|numeric|required');
			$this->form_validation->set_rules('jun_masuk','Juni Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jun_putus','Juni Putus','trim|numeric|required');
			$this->form_validation->set_rules('jul_masuk','Juli Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jul_putus','Juli Putus','trim|numeric|required');
			$this->form_validation->set_rules('agt_masuk','Agustus Masuk','trim|numeric|required');
			$this->form_validation->set_rules('agt_putus','Agustus Putus','trim|numeric|required');
			$this->form_validation->set_rules('sep_masuk','September Masuk','trim|numeric|required');
			$this->form_validation->set_rules('sep_putus','September Putus','trim|numeric|required');
			$this->form_validation->set_rules('okt_masuk','Oktober Masuk','trim|numeric|required');
			$this->form_validation->set_rules('okt_putus','Oktober Putus','trim|numeric|required');
			$this->form_validation->set_rules('nov_masuk','November Masuk','trim|numeric|required');
			$this->form_validation->set_rules('nov_putus','November Putus','trim|numeric|required');
			$this->form_validation->set_rules('des_masuk','Desember Masuk','trim|numeric|required');
			$this->form_validation->set_rules('des_putus','Desember Putus','trim|numeric|required');
			if($this->form_validation->run() != false) {
				//Mengisi insert post ke dalam variabel
				$jnm = $this->input->post('jan_masuk');
				$jnp = $this->input->post('jan_putus');
				$jns = $jnm - $jnp;
				$fem = $this->input->post('feb_masuk');
				$fep = $this->input->post('feb_putus');
				$fek = $fem - $fep; //Untuk mengambil sisa perkara bulan februari 
				$fes = $jns + $fek; //Untuk tambah sisa perkara bulan januari - februari
				$mam = $this->input->post('mar_masuk');
				$map = $this->input->post('mar_putus');
				$mak = $mam - $map; //Untuk mengambil sisa perkara bulan Maret
				$mas = $fes + $mak; //Untuk tambah sisa perkara bulan januari - maret
				$apm = $this->input->post('apr_masuk');
				$app = $this->input->post('apr_putus');
				$apk = $apm - $app; //Untuk mengambil sisa perkara bulan Maret
 				$aps = $mas + $apk; //Untuk tambah sisa perkara bulan januari - april
				$mem = $this->input->post('mei_masuk');
				$mep = $this->input->post('mei_putus');
				$mek = $mem - $mep;
				$mes = $aps + $mek;
				$junm = $this->input->post('jun_masuk');
				$junp = $this->input->post('jun_putus');
				$junk = $junm - $junp;
				$juns = $mes + $junk;
				$julm = $this->input->post('jul_masuk');
				$julp = $this->input->post('jul_putus');
				$julk = $julm - $julp;
				$juls = $juns + $julk;
				$agm = $this->input->post('agt_masuk');
				$agp = $this->input->post('agt_putus');
				$agk = $agm - $agp;
				$ags = $juls + $agk;
				$sem = $this->input->post('sep_masuk');
				$sep = $this->input->post('sep_putus');
				$sek = $sem - $sep;
				$ses = $ags + $sek;
				$okm = $this->input->post('okt_masuk');
				$okp = $this->input->post('okt_putus');
				$okk = $okm - $okp;
				$oks = $ses + $okk;
				$nom = $this->input->post('nov_masuk');
				$nop = $this->input->post('nov_putus');
				$nok = $nom - $nop;
				$nos = $oks + $nok;
				$dem = $this->input->post('des_masuk');
				$dep = $this->input->post('des_putus');
				$dek = $dem - $dep;
				$des = $nos + $dek;

				//Penghitungan Triwulan
				$tri_masuk1 = $jnm + $fem + $mam;
				$tri_putus1 = $jnp + $fep + $map;
				$tri_sisa1 = $jns + $fes + $mas;

				$tri_masuk2 = $apm + $mem + $junm;
				$tri_putus2 = $app + $mep + $junp;
				$tri_sisa2 = $aps + $mes + $juns;

				$tri_masuk3 = $julm + $agm + $sem;
				$tri_putus3 = $julp + $agp + $sep;
				$tri_sisa3 = $juls + $ags + $ses;

				$tri_masuk4 = $okm + $nom + $dem;
				$tri_putus4 = $okp + $nop + $dep;
				$tri_sisa4 = $oks + $nos + $des;

				//Penghitungan per-Semester
				$sem_masuk1 = $tri_masuk1 + $tri_masuk2;
				$sem_putus1 = $tri_putus1 + $tri_putus2;
				$sem_sisa1 = $tri_sisa1 + $tri_sisa2;

				$sem_masuk2 = $tri_masuk3 + $tri_masuk4;
				$sem_putus2 = $tri_putus3 + $tri_putus4;
				$sem_sisa2 = $tri_sisa3 + $tri_sisa4;

				//Penghitungan Tahun
				$thn_masuk = $sem_masuk1 + $sem_masuk2;
				$thn_putus = $sem_putus1 + $sem_putus2;
				$thn_sisa = $sem_sisa1 + $sem_sisa2; 

				$tahun = array(
					'tahun' => $this->input->post('tahun'),
					'masuk_tahun' => $thn_masuk,
					'putus_tahun' => $thn_putus,
					'sisa_tahun' => $thn_sisa
				);$this->db->insert('tahun',$tahun);
				$last_thn = $this->db->insert_id();
				
				$perkara = array(
					'nama_perkara' => $this->input->post('nama_perkara') 
				);$this->db->insert('perkara',$perkara);
				$last_per = $this->db->insert_id();

				$bagian = array(
					'nama_bagian' => $this->input->post('nama_bagian')
				);$this->db->insert('bagian',$bagian);
				$last_bag = $this->db->insert_id();

				$bulan = array(
					'jan_masuk' => $jnm,
					'jan_putus' => $jnp,
					'jan_sisa' => $jns,
					'feb_masuk' => $fem,
					'feb_putus' => $fep, 
					'feb_sisa' => $fes,
					'mar_masuk' => $mam,
					'mar_putus' => $map,
					'mar_sisa' => $mas,
					'apr_masuk' => $apm,
					'apr_putus' => $app,
					'apr_sisa' => $aps,
					'mei_masuk' => $mem,
					'mei_putus' => $mep,
					'mei_sisa' => $mes,
					'jun_masuk' => $junm,
					'jun_putus' => $junp,
					'jun_sisa' => $juns,
					'jul_masuk' => $julm,
					'jul_putus' => $julp,
					'jul_sisa' => $juls,
					'agt_masuk' => $agm,
					'agt_putus' => $agp,
					'agt_sisa' => $ags,
					'sep_masuk' => $sem,
					'sep_putus' => $sep,
					'sep_sisa' => $ses,
					'okt_masuk' => $okm,
					'okt_putus' => $okp,
					'okt_sisa' => $oks,
					'nov_masuk' => $nom,
					'nov_putus' => $nop,
					'nov_sisa' => $nos,
					'des_masuk' => $dem,
					'des_putus' => $dep,
					'des_sisa' => $des,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);

				$triwulan = array(
					'tri1_masuk' => $tri_masuk1,
					'tri1_putus' => $tri_putus1,
					'tri1_sisa' => $tri_sisa1,
					'tri2_masuk' => $tri_masuk1,
					'tri2_putus' => $tri_putus2,
					'tri2_sisa' => $tri_sisa2,
					'tri3_masuk' => $tri_masuk3,
					'tri3_putus' => $tri_putus3,
					'tri3_sisa' => $tri_sisa3,
					'tri4_masuk' => $tri_masuk4,
					'tri4_putus' => $tri_putus4,
					'tri4_sisa' => $tri_sisa4,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag

				);

				$semester = array(
					'sem1_masuk' => $sem_masuk1,
					'sem1_putus' => $sem_putus1,
					'sem1_sisa' => $sem_sisa1,
					'sem2_masuk' => $sem_masuk2,
					'sem2_putus' => $sem_putus2,
					'sem2_sisa' => $sem_sisa2,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);
			$this->m_insert->add($bulan,$triwulan,$semester);
			$this->session->set_flashdata('pesan', 
				'<div class="alert alert-success" role="alert">
              <b><span class="fa fa-check"></span> Data Gugatan Sederhana Bulanan berhasil disimpan ! </b></div>');
				redirect('perdata/insert/sederhana_add');

				/*
				echo "<pre>";
				print_r($tahun);
				echo "<br>";
				print_r($perkara);
				echo "<br>";
				print_r($bagian);
				echo "<br>";
				print_r($bulan);
				echo "<br>";
				print_r($triwulan);
				echo "<br>";
				print_r($semester);
				echo "<br>";
				echo "</pre>"; */

			}else{ //Else jika validasi gagal
				$data = array('title' => 'Gugatan Sederhana Bulanan',
					  'head' => 'PERDATA GUGATAN SEDERHANA', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Gugatan Sederhana',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/sederhana_add'
					  );
				$this->load->view('perdata/design/combination',$data);
			}
		}else{ //Else jika name save tidak ditemukan
			$data = array('title' => 'Gugatan Sederhana Bulanan',
					  'head' => 'PERDATA GUGATAN SEDERHANA', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Gugatan Sederhana',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/sederhana_add'
					  );
			$this->load->view('perdata/design/combination',$data);
		}
	}

	function kasasi_add() {
		if(isset($_POST['save'])) {
			$this->form_validation->set_rules('jan_masuk','Januari Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jan_putus','Januari Putus','trim|numeric|required');
			$this->form_validation->set_rules('feb_masuk','Februari Masuk','trim|numeric|required');
			$this->form_validation->set_rules('feb_putus','Februari Putus','trim|numeric|required');
			$this->form_validation->set_rules('mar_masuk','Maret Masuk','trim|numeric|required');
			$this->form_validation->set_rules('mar_putus','Maret Putus','trim|numeric|required');
			$this->form_validation->set_rules('apr_masuk','April Masuk','trim|numeric|required');
			$this->form_validation->set_rules('apr_putus','April Putus','trim|numeric|required');
			$this->form_validation->set_rules('mei_masuk','Mei Masuk','trim|numeric|required');
			$this->form_validation->set_rules('mei_putus','Mei Putus','trim|numeric|required');
			$this->form_validation->set_rules('jun_masuk','Juni Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jun_putus','Juni Putus','trim|numeric|required');
			$this->form_validation->set_rules('jul_masuk','Juli Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jul_putus','Juli Putus','trim|numeric|required');
			$this->form_validation->set_rules('agt_masuk','Agustus Masuk','trim|numeric|required');
			$this->form_validation->set_rules('agt_putus','Agustus Putus','trim|numeric|required');
			$this->form_validation->set_rules('sep_masuk','September Masuk','trim|numeric|required');
			$this->form_validation->set_rules('sep_putus','September Putus','trim|numeric|required');
			$this->form_validation->set_rules('okt_masuk','Oktober Masuk','trim|numeric|required');
			$this->form_validation->set_rules('okt_putus','Oktober Putus','trim|numeric|required');
			$this->form_validation->set_rules('nov_masuk','November Masuk','trim|numeric|required');
			$this->form_validation->set_rules('nov_putus','November Putus','trim|numeric|required');
			$this->form_validation->set_rules('des_masuk','Desember Masuk','trim|numeric|required');
			$this->form_validation->set_rules('des_putus','Desember Putus','trim|numeric|required');
			if($this->form_validation->run() != false) {
				//Mengisi insert post ke dalam variabel
				$jnm = $this->input->post('jan_masuk');
				$jnp = $this->input->post('jan_putus');
				$jns = $jnm - $jnp;
				$fem = $this->input->post('feb_masuk');
				$fep = $this->input->post('feb_putus');
				$fek = $fem - $fep; //Untuk mengambil sisa perkara bulan februari 
				$fes = $jns + $fek; //Untuk tambah sisa perkara bulan januari - februari
				$mam = $this->input->post('mar_masuk');
				$map = $this->input->post('mar_putus');
				$mak = $mam - $map; //Untuk mengambil sisa perkara bulan Maret
				$mas = $fes + $mak; //Untuk tambah sisa perkara bulan januari - maret
				$apm = $this->input->post('apr_masuk');
				$app = $this->input->post('apr_putus');
				$apk = $apm - $app; //Untuk mengambil sisa perkara bulan Maret
 				$aps = $mas + $apk; //Untuk tambah sisa perkara bulan januari - april
				$mem = $this->input->post('mei_masuk');
				$mep = $this->input->post('mei_putus');
				$mek = $mem - $mep;
				$mes = $aps + $mek;
				$junm = $this->input->post('jun_masuk');
				$junp = $this->input->post('jun_putus');
				$junk = $junm - $junp;
				$juns = $mes + $junk;
				$julm = $this->input->post('jul_masuk');
				$julp = $this->input->post('jul_putus');
				$julk = $julm - $julp;
				$juls = $juns + $julk;
				$agm = $this->input->post('agt_masuk');
				$agp = $this->input->post('agt_putus');
				$agk = $agm - $agp;
				$ags = $juls + $agk;
				$sem = $this->input->post('sep_masuk');
				$sep = $this->input->post('sep_putus');
				$sek = $sem - $sep;
				$ses = $ags + $sek;
				$okm = $this->input->post('okt_masuk');
				$okp = $this->input->post('okt_putus');
				$okk = $okm - $okp;
				$oks = $ses + $okk;
				$nom = $this->input->post('nov_masuk');
				$nop = $this->input->post('nov_putus');
				$nok = $nom - $nop;
				$nos = $oks + $nok;
				$dem = $this->input->post('des_masuk');
				$dep = $this->input->post('des_putus');
				$dek = $dem - $dep;
				$des = $nos + $dek;

				//Penghitungan Triwulan
				$tri_masuk1 = $jnm + $fem + $mam;
				$tri_putus1 = $jnp + $fep + $map;
				$tri_sisa1 = $jns + $fes + $mas;

				$tri_masuk2 = $apm + $mem + $junm;
				$tri_putus2 = $app + $mep + $junp;
				$tri_sisa2 = $aps + $mes + $juns;

				$tri_masuk3 = $julm + $agm + $sem;
				$tri_putus3 = $julp + $agp + $sep;
				$tri_sisa3 = $juls + $ags + $ses;

				$tri_masuk4 = $okm + $nom + $dem;
				$tri_putus4 = $okp + $nop + $dep;
				$tri_sisa4 = $oks + $nos + $des;

				//Penghitungan per-Semester
				$sem_masuk1 = $tri_masuk1 + $tri_masuk2;
				$sem_putus1 = $tri_putus1 + $tri_putus2;
				$sem_sisa1 = $tri_sisa1 + $tri_sisa2;

				$sem_masuk2 = $tri_masuk3 + $tri_masuk4;
				$sem_putus2 = $tri_putus3 + $tri_putus4;
				$sem_sisa2 = $tri_sisa3 + $tri_sisa4;

				//Penghitungan Tahun
				$thn_masuk = $sem_masuk1 + $sem_masuk2;
				$thn_putus = $sem_putus1 + $sem_putus2;
				$thn_sisa = $sem_sisa1 + $sem_sisa2; 

				$tahun = array(
					'tahun' => $this->input->post('tahun'),
					'masuk_tahun' => $thn_masuk,
					'putus_tahun' => $thn_putus,
					'sisa_tahun' => $thn_sisa
				);$this->db->insert('tahun',$tahun);
				$last_thn = $this->db->insert_id();
				
				$perkara = array(
					'nama_perkara' => $this->input->post('nama_perkara') 
				);$this->db->insert('perkara',$perkara);
				$last_per = $this->db->insert_id();

				$bagian = array(
					'nama_bagian' => $this->input->post('nama_bagian')
				);$this->db->insert('bagian',$bagian);
				$last_bag = $this->db->insert_id();

				$bulan = array(
					'jan_masuk' => $jnm,
					'jan_putus' => $jnp,
					'jan_sisa' => $jns,
					'feb_masuk' => $fem,
					'feb_putus' => $fep, 
					'feb_sisa' => $fes,
					'mar_masuk' => $mam,
					'mar_putus' => $map,
					'mar_sisa' => $mas,
					'apr_masuk' => $apm,
					'apr_putus' => $app,
					'apr_sisa' => $aps,
					'mei_masuk' => $mem,
					'mei_putus' => $mep,
					'mei_sisa' => $mes,
					'jun_masuk' => $junm,
					'jun_putus' => $junp,
					'jun_sisa' => $juns,
					'jul_masuk' => $julm,
					'jul_putus' => $julp,
					'jul_sisa' => $juls,
					'agt_masuk' => $agm,
					'agt_putus' => $agp,
					'agt_sisa' => $ags,
					'sep_masuk' => $sem,
					'sep_putus' => $sep,
					'sep_sisa' => $ses,
					'okt_masuk' => $okm,
					'okt_putus' => $okp,
					'okt_sisa' => $oks,
					'nov_masuk' => $nom,
					'nov_putus' => $nop,
					'nov_sisa' => $nos,
					'des_masuk' => $dem,
					'des_putus' => $dep,
					'des_sisa' => $des,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);

				$triwulan = array(
					'tri1_masuk' => $tri_masuk1,
					'tri1_putus' => $tri_putus1,
					'tri1_sisa' => $tri_sisa1,
					'tri2_masuk' => $tri_masuk1,
					'tri2_putus' => $tri_putus2,
					'tri2_sisa' => $tri_sisa2,
					'tri3_masuk' => $tri_masuk3,
					'tri3_putus' => $tri_putus3,
					'tri3_sisa' => $tri_sisa3,
					'tri4_masuk' => $tri_masuk4,
					'tri4_putus' => $tri_putus4,
					'tri4_sisa' => $tri_sisa4,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag

				);

				$semester = array(
					'sem1_masuk' => $sem_masuk1,
					'sem1_putus' => $sem_putus1,
					'sem1_sisa' => $sem_sisa1,
					'sem2_masuk' => $sem_masuk2,
					'sem2_putus' => $sem_putus2,
					'sem2_sisa' => $sem_sisa2,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);
			$this->m_insert->add($bulan,$triwulan,$semester);
			$this->session->set_flashdata('pesan', 
				'<div class="alert alert-success" role="alert">
              <b><span class="fa fa-check"></span> Data Kasasi Bulanan berhasil disimpan ! </b></div>');
				redirect('perdata/insert/kasasi_add');

				/*
				echo "<pre>";
				print_r($tahun);
				echo "<br>";
				print_r($perkara);
				echo "<br>";
				print_r($bagian);
				echo "<br>";
				print_r($bulan);
				echo "<br>";
				print_r($triwulan);
				echo "<br>";
				print_r($semester);
				echo "<br>";
				echo "</pre>"; */

			}else{ //Else jika validasi gagal
				$data = array('title' => 'Kasasi Bulanan',
					  'head' => 'PERDATA KASASI', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Kasasi',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/kasasi_add'
					  );
				$this->load->view('perdata/design/combination',$data);
			}
		}else{ //Else jika name save tidak ditemukan
			$data = array('title' => 'Kasasi Bulanan',
					  'head' => 'PERDATA KASASI', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Kasasi',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/kasasi_add'
					  );
			$this->load->view('perdata/design/combination',$data);
		}
	}

	function permohonan_add() {
		if(isset($_POST['save'])) {
			$this->form_validation->set_rules('jan_masuk','Januari Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jan_putus','Januari Putus','trim|numeric|required');
			$this->form_validation->set_rules('feb_masuk','Februari Masuk','trim|numeric|required');
			$this->form_validation->set_rules('feb_putus','Februari Putus','trim|numeric|required');
			$this->form_validation->set_rules('mar_masuk','Maret Masuk','trim|numeric|required');
			$this->form_validation->set_rules('mar_putus','Maret Putus','trim|numeric|required');
			$this->form_validation->set_rules('apr_masuk','April Masuk','trim|numeric|required');
			$this->form_validation->set_rules('apr_putus','April Putus','trim|numeric|required');
			$this->form_validation->set_rules('mei_masuk','Mei Masuk','trim|numeric|required');
			$this->form_validation->set_rules('mei_putus','Mei Putus','trim|numeric|required');
			$this->form_validation->set_rules('jun_masuk','Juni Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jun_putus','Juni Putus','trim|numeric|required');
			$this->form_validation->set_rules('jul_masuk','Juli Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jul_putus','Juli Putus','trim|numeric|required');
			$this->form_validation->set_rules('agt_masuk','Agustus Masuk','trim|numeric|required');
			$this->form_validation->set_rules('agt_putus','Agustus Putus','trim|numeric|required');
			$this->form_validation->set_rules('sep_masuk','September Masuk','trim|numeric|required');
			$this->form_validation->set_rules('sep_putus','September Putus','trim|numeric|required');
			$this->form_validation->set_rules('okt_masuk','Oktober Masuk','trim|numeric|required');
			$this->form_validation->set_rules('okt_putus','Oktober Putus','trim|numeric|required');
			$this->form_validation->set_rules('nov_masuk','November Masuk','trim|numeric|required');
			$this->form_validation->set_rules('nov_putus','November Putus','trim|numeric|required');
			$this->form_validation->set_rules('des_masuk','Desember Masuk','trim|numeric|required');
			$this->form_validation->set_rules('des_putus','Desember Putus','trim|numeric|required');
			if($this->form_validation->run() != false) {
				//Mengisi insert post ke dalam variabel
				$jnm = $this->input->post('jan_masuk');
				$jnp = $this->input->post('jan_putus');
				$jns = $jnm - $jnp;
				$fem = $this->input->post('feb_masuk');
				$fep = $this->input->post('feb_putus');
				$fek = $fem - $fep; //Untuk mengambil sisa perkara bulan februari 
				$fes = $jns + $fek; //Untuk tambah sisa perkara bulan januari - februari
				$mam = $this->input->post('mar_masuk');
				$map = $this->input->post('mar_putus');
				$mak = $mam - $map; //Untuk mengambil sisa perkara bulan Maret
				$mas = $fes + $mak; //Untuk tambah sisa perkara bulan januari - maret
				$apm = $this->input->post('apr_masuk');
				$app = $this->input->post('apr_putus');
				$apk = $apm - $app; //Untuk mengambil sisa perkara bulan Maret
 				$aps = $mas + $apk; //Untuk tambah sisa perkara bulan januari - april
				$mem = $this->input->post('mei_masuk');
				$mep = $this->input->post('mei_putus');
				$mek = $mem - $mep;
				$mes = $aps + $mek;
				$junm = $this->input->post('jun_masuk');
				$junp = $this->input->post('jun_putus');
				$junk = $junm - $junp;
				$juns = $mes + $junk;
				$julm = $this->input->post('jul_masuk');
				$julp = $this->input->post('jul_putus');
				$julk = $julm - $julp;
				$juls = $juns + $julk;
				$agm = $this->input->post('agt_masuk');
				$agp = $this->input->post('agt_putus');
				$agk = $agm - $agp;
				$ags = $juls + $agk;
				$sem = $this->input->post('sep_masuk');
				$sep = $this->input->post('sep_putus');
				$sek = $sem - $sep;
				$ses = $ags + $sek;
				$okm = $this->input->post('okt_masuk');
				$okp = $this->input->post('okt_putus');
				$okk = $okm - $okp;
				$oks = $ses + $okk;
				$nom = $this->input->post('nov_masuk');
				$nop = $this->input->post('nov_putus');
				$nok = $nom - $nop;
				$nos = $oks + $nok;
				$dem = $this->input->post('des_masuk');
				$dep = $this->input->post('des_putus');
				$dek = $dem - $dep;
				$des = $nos + $dek;

				//Penghitungan Triwulan
				$tri_masuk1 = $jnm + $fem + $mam;
				$tri_putus1 = $jnp + $fep + $map;
				$tri_sisa1 = $jns + $fes + $mas;

				$tri_masuk2 = $apm + $mem + $junm;
				$tri_putus2 = $app + $mep + $junp;
				$tri_sisa2 = $aps + $mes + $juns;

				$tri_masuk3 = $julm + $agm + $sem;
				$tri_putus3 = $julp + $agp + $sep;
				$tri_sisa3 = $juls + $ags + $ses;

				$tri_masuk4 = $okm + $nom + $dem;
				$tri_putus4 = $okp + $nop + $dep;
				$tri_sisa4 = $oks + $nos + $des;

				//Penghitungan per-Semester
				$sem_masuk1 = $tri_masuk1 + $tri_masuk2;
				$sem_putus1 = $tri_putus1 + $tri_putus2;
				$sem_sisa1 = $tri_sisa1 + $tri_sisa2;

				$sem_masuk2 = $tri_masuk3 + $tri_masuk4;
				$sem_putus2 = $tri_putus3 + $tri_putus4;
				$sem_sisa2 = $tri_sisa3 + $tri_sisa4;

				//Penghitungan Tahun
				$thn_masuk = $sem_masuk1 + $sem_masuk2;
				$thn_putus = $sem_putus1 + $sem_putus2;
				$thn_sisa = $sem_sisa1 + $sem_sisa2; 

				$tahun = array(
					'tahun' => $this->input->post('tahun'),
					'masuk_tahun' => $thn_masuk,
					'putus_tahun' => $thn_putus,
					'sisa_tahun' => $thn_sisa
				);$this->db->insert('tahun',$tahun);
				$last_thn = $this->db->insert_id();
				
				$perkara = array(
					'nama_perkara' => $this->input->post('nama_perkara') 
				);$this->db->insert('perkara',$perkara);
				$last_per = $this->db->insert_id();

				$bagian = array(
					'nama_bagian' => $this->input->post('nama_bagian')
				);$this->db->insert('bagian',$bagian);
				$last_bag = $this->db->insert_id();

				$bulan = array(
					'jan_masuk' => $jnm,
					'jan_putus' => $jnp,
					'jan_sisa' => $jns,
					'feb_masuk' => $fem,
					'feb_putus' => $fep, 
					'feb_sisa' => $fes,
					'mar_masuk' => $mam,
					'mar_putus' => $map,
					'mar_sisa' => $mas,
					'apr_masuk' => $apm,
					'apr_putus' => $app,
					'apr_sisa' => $aps,
					'mei_masuk' => $mem,
					'mei_putus' => $mep,
					'mei_sisa' => $mes,
					'jun_masuk' => $junm,
					'jun_putus' => $junp,
					'jun_sisa' => $juns,
					'jul_masuk' => $julm,
					'jul_putus' => $julp,
					'jul_sisa' => $juls,
					'agt_masuk' => $agm,
					'agt_putus' => $agp,
					'agt_sisa' => $ags,
					'sep_masuk' => $sem,
					'sep_putus' => $sep,
					'sep_sisa' => $ses,
					'okt_masuk' => $okm,
					'okt_putus' => $okp,
					'okt_sisa' => $oks,
					'nov_masuk' => $nom,
					'nov_putus' => $nop,
					'nov_sisa' => $nos,
					'des_masuk' => $dem,
					'des_putus' => $dep,
					'des_sisa' => $des,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);

				$triwulan = array(
					'tri1_masuk' => $tri_masuk1,
					'tri1_putus' => $tri_putus1,
					'tri1_sisa' => $tri_sisa1,
					'tri2_masuk' => $tri_masuk1,
					'tri2_putus' => $tri_putus2,
					'tri2_sisa' => $tri_sisa2,
					'tri3_masuk' => $tri_masuk3,
					'tri3_putus' => $tri_putus3,
					'tri3_sisa' => $tri_sisa3,
					'tri4_masuk' => $tri_masuk4,
					'tri4_putus' => $tri_putus4,
					'tri4_sisa' => $tri_sisa4,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag

				);

				$semester = array(
					'sem1_masuk' => $sem_masuk1,
					'sem1_putus' => $sem_putus1,
					'sem1_sisa' => $sem_sisa1,
					'sem2_masuk' => $sem_masuk2,
					'sem2_putus' => $sem_putus2,
					'sem2_sisa' => $sem_sisa2,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);
			$this->m_insert->add($bulan,$triwulan,$semester);
			$this->session->set_flashdata('pesan', 
				'<div class="alert alert-success" role="alert">
              <b><span class="fa fa-check"></span> Data Permohonan Bulanan berhasil disimpan ! </b></div>');
				redirect('perdata/insert/permohonan_add');

				/*
				echo "<pre>";
				print_r($tahun);
				echo "<br>";
				print_r($perkara);
				echo "<br>";
				print_r($bagian);
				echo "<br>";
				print_r($bulan);
				echo "<br>";
				print_r($triwulan);
				echo "<br>";
				print_r($semester);
				echo "<br>";
				echo "</pre>"; */

			}else{ //Else jika validasi gagal
				$data = array('title' => 'Permohonan Bulanan',
					  'head' => 'PERDATA PERMOHONAN', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Permohonan',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/permohonan_add'
					  );
				$this->load->view('perdata/design/combination',$data);
			}
		}else{ //Else jika name save tidak ditemukan
			$data = array('title' => 'Permohonan Bulanan',
					  'head' => 'PERDATA PERMOHONAN', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Permohonan',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/permohonan_add'
					  );
			$this->load->view('perdata/design/combination',$data);
		}
	}

	function peninjauan_add() {
		if(isset($_POST['save'])) {
			$this->form_validation->set_rules('jan_masuk','Januari Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jan_putus','Januari Putus','trim|numeric|required');
			$this->form_validation->set_rules('feb_masuk','Februari Masuk','trim|numeric|required');
			$this->form_validation->set_rules('feb_putus','Februari Putus','trim|numeric|required');
			$this->form_validation->set_rules('mar_masuk','Maret Masuk','trim|numeric|required');
			$this->form_validation->set_rules('mar_putus','Maret Putus','trim|numeric|required');
			$this->form_validation->set_rules('apr_masuk','April Masuk','trim|numeric|required');
			$this->form_validation->set_rules('apr_putus','April Putus','trim|numeric|required');
			$this->form_validation->set_rules('mei_masuk','Mei Masuk','trim|numeric|required');
			$this->form_validation->set_rules('mei_putus','Mei Putus','trim|numeric|required');
			$this->form_validation->set_rules('jun_masuk','Juni Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jun_putus','Juni Putus','trim|numeric|required');
			$this->form_validation->set_rules('jul_masuk','Juli Masuk','trim|numeric|required');
			$this->form_validation->set_rules('jul_putus','Juli Putus','trim|numeric|required');
			$this->form_validation->set_rules('agt_masuk','Agustus Masuk','trim|numeric|required');
			$this->form_validation->set_rules('agt_putus','Agustus Putus','trim|numeric|required');
			$this->form_validation->set_rules('sep_masuk','September Masuk','trim|numeric|required');
			$this->form_validation->set_rules('sep_putus','September Putus','trim|numeric|required');
			$this->form_validation->set_rules('okt_masuk','Oktober Masuk','trim|numeric|required');
			$this->form_validation->set_rules('okt_putus','Oktober Putus','trim|numeric|required');
			$this->form_validation->set_rules('nov_masuk','November Masuk','trim|numeric|required');
			$this->form_validation->set_rules('nov_putus','November Putus','trim|numeric|required');
			$this->form_validation->set_rules('des_masuk','Desember Masuk','trim|numeric|required');
			$this->form_validation->set_rules('des_putus','Desember Putus','trim|numeric|required');
			if($this->form_validation->run() != false) {
				//Mengisi insert post ke dalam variabel
				$jnm = $this->input->post('jan_masuk');
				$jnp = $this->input->post('jan_putus');
				$jns = $jnm - $jnp;
				$fem = $this->input->post('feb_masuk');
				$fep = $this->input->post('feb_putus');
				$fek = $fem - $fep; //Untuk mengambil sisa perkara bulan februari 
				$fes = $jns + $fek; //Untuk tambah sisa perkara bulan januari - februari
				$mam = $this->input->post('mar_masuk');
				$map = $this->input->post('mar_putus');
				$mak = $mam - $map; //Untuk mengambil sisa perkara bulan Maret
				$mas = $fes + $mak; //Untuk tambah sisa perkara bulan januari - maret
				$apm = $this->input->post('apr_masuk');
				$app = $this->input->post('apr_putus');
				$apk = $apm - $app; //Untuk mengambil sisa perkara bulan Maret
 				$aps = $mas + $apk; //Untuk tambah sisa perkara bulan januari - april
				$mem = $this->input->post('mei_masuk');
				$mep = $this->input->post('mei_putus');
				$mek = $mem - $mep;
				$mes = $aps + $mek;
				$junm = $this->input->post('jun_masuk');
				$junp = $this->input->post('jun_putus');
				$junk = $junm - $junp;
				$juns = $mes + $junk;
				$julm = $this->input->post('jul_masuk');
				$julp = $this->input->post('jul_putus');
				$julk = $julm - $julp;
				$juls = $juns + $julk;
				$agm = $this->input->post('agt_masuk');
				$agp = $this->input->post('agt_putus');
				$agk = $agm - $agp;
				$ags = $juls + $agk;
				$sem = $this->input->post('sep_masuk');
				$sep = $this->input->post('sep_putus');
				$sek = $sem - $sep;
				$ses = $ags + $sek;
				$okm = $this->input->post('okt_masuk');
				$okp = $this->input->post('okt_putus');
				$okk = $okm - $okp;
				$oks = $ses + $okk;
				$nom = $this->input->post('nov_masuk');
				$nop = $this->input->post('nov_putus');
				$nok = $nom - $nop;
				$nos = $oks + $nok;
				$dem = $this->input->post('des_masuk');
				$dep = $this->input->post('des_putus');
				$dek = $dem - $dep;
				$des = $nos + $dek;

				//Penghitungan Triwulan
				$tri_masuk1 = $jnm + $fem + $mam;
				$tri_putus1 = $jnp + $fep + $map;
				$tri_sisa1 = $jns + $fes + $mas;

				$tri_masuk2 = $apm + $mem + $junm;
				$tri_putus2 = $app + $mep + $junp;
				$tri_sisa2 = $aps + $mes + $juns;

				$tri_masuk3 = $julm + $agm + $sem;
				$tri_putus3 = $julp + $agp + $sep;
				$tri_sisa3 = $juls + $ags + $ses;

				$tri_masuk4 = $okm + $nom + $dem;
				$tri_putus4 = $okp + $nop + $dep;
				$tri_sisa4 = $oks + $nos + $des;

				//Penghitungan per-Semester
				$sem_masuk1 = $tri_masuk1 + $tri_masuk2;
				$sem_putus1 = $tri_putus1 + $tri_putus2;
				$sem_sisa1 = $tri_sisa1 + $tri_sisa2;

				$sem_masuk2 = $tri_masuk3 + $tri_masuk4;
				$sem_putus2 = $tri_putus3 + $tri_putus4;
				$sem_sisa2 = $tri_sisa3 + $tri_sisa4;

				//Penghitungan Tahun
				$thn_masuk = $sem_masuk1 + $sem_masuk2;
				$thn_putus = $sem_putus1 + $sem_putus2;
				$thn_sisa = $sem_sisa1 + $sem_sisa2; 

				$tahun = array(
					'tahun' => $this->input->post('tahun'),
					'masuk_tahun' => $thn_masuk,
					'putus_tahun' => $thn_putus,
					'sisa_tahun' => $thn_sisa
				);$this->db->insert('tahun',$tahun);
				$last_thn = $this->db->insert_id();
				
				$perkara = array(
					'nama_perkara' => $this->input->post('nama_perkara') 
				);$this->db->insert('perkara',$perkara);
				$last_per = $this->db->insert_id();

				$bagian = array(
					'nama_bagian' => $this->input->post('nama_bagian')
				);$this->db->insert('bagian',$bagian);
				$last_bag = $this->db->insert_id();

				$bulan = array(
					'jan_masuk' => $jnm,
					'jan_putus' => $jnp,
					'jan_sisa' => $jns,
					'feb_masuk' => $fem,
					'feb_putus' => $fep, 
					'feb_sisa' => $fes,
					'mar_masuk' => $mam,
					'mar_putus' => $map,
					'mar_sisa' => $mas,
					'apr_masuk' => $apm,
					'apr_putus' => $app,
					'apr_sisa' => $aps,
					'mei_masuk' => $mem,
					'mei_putus' => $mep,
					'mei_sisa' => $mes,
					'jun_masuk' => $junm,
					'jun_putus' => $junp,
					'jun_sisa' => $juns,
					'jul_masuk' => $julm,
					'jul_putus' => $julp,
					'jul_sisa' => $juls,
					'agt_masuk' => $agm,
					'agt_putus' => $agp,
					'agt_sisa' => $ags,
					'sep_masuk' => $sem,
					'sep_putus' => $sep,
					'sep_sisa' => $ses,
					'okt_masuk' => $okm,
					'okt_putus' => $okp,
					'okt_sisa' => $oks,
					'nov_masuk' => $nom,
					'nov_putus' => $nop,
					'nov_sisa' => $nos,
					'des_masuk' => $dem,
					'des_putus' => $dep,
					'des_sisa' => $des,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);

				$triwulan = array(
					'tri1_masuk' => $tri_masuk1,
					'tri1_putus' => $tri_putus1,
					'tri1_sisa' => $tri_sisa1,
					'tri2_masuk' => $tri_masuk1,
					'tri2_putus' => $tri_putus2,
					'tri2_sisa' => $tri_sisa2,
					'tri3_masuk' => $tri_masuk3,
					'tri3_putus' => $tri_putus3,
					'tri3_sisa' => $tri_sisa3,
					'tri4_masuk' => $tri_masuk4,
					'tri4_putus' => $tri_putus4,
					'tri4_sisa' => $tri_sisa4,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag

				);

				$semester = array(
					'sem1_masuk' => $sem_masuk1,
					'sem1_putus' => $sem_putus1,
					'sem1_sisa' => $sem_sisa1,
					'sem2_masuk' => $sem_masuk2,
					'sem2_putus' => $sem_putus2,
					'sem2_sisa' => $sem_sisa2,
					'tahun_id' => $last_thn,
					'perkara_id' => $last_per,
					'bagian_id' => $last_bag
				);
			$this->m_insert->add($bulan,$triwulan,$semester);
			$this->session->set_flashdata('pesan', 
				'<div class="alert alert-success" role="alert">
              <b><span class="fa fa-check"></span> Data Peninjauan Kembali Bulanan berhasil disimpan ! </b></div>');
				redirect('perdata/insert/peninjauan_add');

				/*
				echo "<pre>";
				print_r($tahun);
				echo "<br>";
				print_r($perkara);
				echo "<br>";
				print_r($bagian);
				echo "<br>";
				print_r($bulan);
				echo "<br>";
				print_r($triwulan);
				echo "<br>";
				print_r($semester);
				echo "<br>";
				echo "</pre>"; */

			}else{ //Else jika validasi gagal
				$data = array('title' => 'Peninjauan Kembali Bulanan',
					  'head' => 'PERDATA PENINJAUAN KEMBALI', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Peninjauan Kembali',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/peninjauan_add'
					  );
				$this->load->view('perdata/design/combination',$data);
			}
		}else{ //Else jika name save tidak ditemukan
			$data = array('title' => 'Peninjauan Kembali Bulanan',
					  'head' => 'PERDATA PENINJAUAN KEMBALI', 
					  'isi' => 'perdata/insert_bulan',
					  'status' => 'Input Data',
					  'link_st' => base_url('index.php/perdata/bulanan/gugatan'),
					  'bagian' => 'Perdata',
					  'link_ba' => base_url('index.php/bagian'),
					  'laporan' => 'Bulanan',
					  'link_la' => base_url('index.php/perdata/laporan'),
					  'perkara' => 'Peninjauan Kembali',
					  'link_pe' => base_url('index.php/perdata/laporan/bulanan'),
					  'add' => 'perdata/insert/peninjauan_add'
					  );
			$this->load->view('perdata/design/combination',$data);
		}
	}

}