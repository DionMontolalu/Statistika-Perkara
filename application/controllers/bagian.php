<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bagian extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}		
	}

	function index() {
		$data = array('title' => 'Bagian Navigasi', 
					  'isi' => 'bagian_nav');
		$this->load->view('bagian_nav',$data);
	}

}