<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rt01 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Rt01_model");
		$this->load->library('form_validation');

		
	}

	public function index()
	{
		$data['rt01'] = $this->Rt01_model->getAll();
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('rt01/index',$data);
		$this->load->view('layout/sidebar');
		$this->load->view('layout/footer');
	}

	public function create()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('rt01/create');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/footer');
	}
 
	public function save()
	{
		
		$this->form_validation->set_rules('nama','Nama','required|min_length[4]|max_length[255]');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('no_telp','Nomor Telepon','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		if ($this->form_validation->run()==true)
		{
			$data['nama'] = $this->input->post('nama');
			$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
			$data['tempat_lahir'] = $this->input->post('tempat_lahir');
			$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			$data['no_telp'] = $this->input->post('no_telp');
			$data['alamat'] = $this->input->post('alamat');
			$this->Rt01_model->save($data);
			redirect('rt01');

		}
		else
		{
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('rt01/create');
			$this->load->view('layout/sidebar');
			$this->load->view('layout/footer');
		}
	}

	public function edit($kd_warga)
	{
		$data['rt01'] = $this->Rt01_model->getById($kd_warga);
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('layout/sidebar');
		$this->load->view('rt01/edit',$data);
		$this->load->view('layout/footer');

	}

	public function update()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('no_telp','Nomor Telepon','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		if ($this->form_validation->run()==true)
		{
			$kd_warga = $this->input->post('kd_warga');
			$data['nama'] = $this->input->post('nama');
			$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
			$data['tempat_lahir'] = $this->input->post('tempat_lahir');
			$data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			$data['no_telp'] = $this->input->post('no_telp');
			$data['alamat'] = $this->input->post('alamat');
			$this->Rt01_model->update($data,$kd_warga);
			redirect('rt01');
		}
		else
		{
			$kd_warga = $this->input->post('kd_warga');
			$data['rt01'] = $this->Rt01_model->getById($kd_warga);
			$this->load->view('layout/header');
			$this->load->view('layout/navbar');
			$this->load->view('layout/sidebar');
			$this->load->view('rt01/edit',$data);
			$this->load->view('layout/footer');	
		}
	}

	public function delete($kd_warga)
	{
		$this->Rt01_model->delete($kd_warga);
		redirect('rt01');
	}
	
}