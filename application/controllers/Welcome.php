<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		$this->load->model('UserModel');
		
	}



	public function index()
	{
		$data['User'] = $this->UserModel->getDataUser();
		$this->load->view('head', $data);
	}


	public function saveData(){

		$pegawai_nama = $this->input->post('pegawai_nama');
		$pegawai_jabatan = $this->input->post('pegawai_jabatan');
		$pegawai_umur = $this->input->post('pegawai_umur');
		$pegawai_alamat = $this->input->post('pegawai_alamat');

		$data = array (

			'pegawai_nama' => $pegawai_nama,
			'pegawai_jabatan' => $pegawai_jabatan,
			'pegawai_umur' => $pegawai_umur,
			'pegawai_alamat' => $pegawai_alamat


		);

		$result = $this->UserModel->saveData($data);

		if ($result == 1 ){
			redirect(base_url('welcome'));
		} else {
			$this->load->view('welcome');
		}
	}

	public function delete($id){

		$result = $this->UserModel->delete($id);
		if ($result == 1 ){
			redirect(base_url('welcome'));
		} else {
			$this->load->view('welcome');
		}
	}

}
