<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Crud_rt extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_master_rt');
		
	}
	
	public function index($alert = ''){
		$this->read($alert);
	}
	
	function read($alert){
		//$id = $this->input->post('id');
		$data = array(
			'title'			=> 'Master RT',
			'data_master_rt'	=> $this->db->query("SELECT * FROM master_rt ORDER BY nama_rt ASC")->result()
		);
		$data['notify'] = $alert;
		$this->load->view('v_masterrt/v_master',$data);
	}
	
	function add_data(){
		$data = array(
			'title'			=> 'Add RT'
			);
			
		$this->load->view('v_masterrt/v_add',$data);
	}
	
	function proses_insert_rt(){
		//echo $this->session->userdata('fullname');
		$nama_rt=$this->input->post('nama_rt');
		$ketua_rt=$this->input->post('ketua_rt');
		$nohp_ketua_rt=$this->input->post('nohp_ketua_rt');
		
		$data_ins = array(
			'nama_rt' 	    =>	$nama_rt,
			'ketua_rt'		=>	$ketua_rt,
			'nohp_ketua_rt'	=>	$nohp_ketua_rt
			
		);
		
		$this->M_master_rt->insert($data_ins,'master_rt');
		redirect('crud_rt');
	}
	
	function proses_edit_data($id){
		$data = array(
			'title'			=> 'Edit Master RT',
		);
		$where = array('id_rt' => $id);
		$data['masterrt'] = $this->M_master_rt->edit_data($where,'master_rt')->result();
		//print_r($data['masterrt']);exit;
		$this->load->view('v_masterrt/v_edit',$data);
	}
	
	function update(){
		$id_rt = $this->input->post('id_rt');
		$nama_rt=$this->input->post('nama_rt');
		$ketua_rt=$this->input->post('ketua_rt');
		$nohp_ketua_rt=$this->input->post('nohp_ketua_rt');
		if ($this->input->post('save')){
			echo $nama_rt; echo "<br>";
			echo $id_rt; echo "<br>";
			echo $ketua_rt; echo "<br>";
			echo $nohp_ketua_rt;	 echo "<br>";
		   
			
		
				$data_edit = array(
						'nama_rt' 		=>	$nama_rt,
						'ketua_rt'		=>	$ketua_rt,
						'nohp_ketua_rt'	=>	$nohp_ketua_rt,
						
					
					);
					
					$where = array(
						'id_rt' => $id_rt
					);
				 
					$this->M_master_rt->update_data($where,$data_edit,'master_rt');
					redirect('crud_rt');
				
				
		}
		
		
		 
	}
	
	function delete_data($id){
		$where = array('id_rt' => $id);
		$this->M_master_rt->hapus_data($where,'master_rt');
		redirect('master_rt');
	}
}