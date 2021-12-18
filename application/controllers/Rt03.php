<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rt03 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Rt03_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['rt03'] = $this->Rt03_model->getAll();
		$this->load->view('template/header');
		$this->load->view('Rt03/index',$data);
		$this->load->view('template/footer');
	}

	public function create()
	{
		$this->load->view('template/header');
		$this->load->view('rt03/create');
		$this->load->view('template/footer');
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
			$this->Rt03_model->save($data);
			redirect('rt03');

		}
		else
		{
			$this->load->view('template/header');
			$this->load->view('rt03/create');
			$this->load->view('template/footer');
		}
	}

	public function edit($kd_warga)
	{
		$data['rt03'] = $this->Rt03_model->getById($kd_warga);
		$this->load->view('template/header');
		$this->load->view('rt03/edit',$data);
		$this->load->view('template/footer');
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
			$this->Rt03_model->update($data,$kd_warga);
			redirect('rt03');
		}
		else
		{
			$kd_warga = $this->input->post('kd_warga');
			$data['rt03'] = $this->Rt03_model->getById($kd_warga);
			$this->load->view('template/header');
			$this->load->view('rt03/edit',$data);
			$this->load->view('template/footer');	
		}
	}

	public function delete($kd_warga)
	{
		$this->Rt03_model->delete($kd_warga);
		redirect('rt03');
	}


	
}