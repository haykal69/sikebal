<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	

	public function __construct() {
		parent::__construct();
		// redirect('user');

		
	}
	
	public function index($alert = ''){
		$this->read($alert);
	}
	
	public function read($alert){
		
		$data = array(
			'title'			=> 'Jumlah Warga RT 01',
			'data_jml_rt1'	=> $this->db->query("SELECT count(*) as jumlah_rt1 FROM `tb_rt01` ")->result(),
			'data_jml_master_rt'	=> $this->db->query("SELECT count(id_rt) as jumlah_master_rt FROM master_rt ")->result()
		);



		$data['notify'] = $alert;
		$this->load->view('dashboard',$data);

	}
	
}