<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') !== 'login' ) {
			redirect('/');
		}
		$this->load->model('membership_model');
	}

	public function index()
	{
		$this->load->view('membership');
	}

	public function read()
	{
		header('Content-type: application/json');
		if ($this->membership_model->read()->num_rows() > 0) {
			foreach ($this->membership_model->read()->result() as $membership) {
				$data[] = array(
					'nama' => $membership->nama,
					'jenis_kelamin' => $membership->jenis_kelamin,
					'telepon' => $membership->telepon,
					'alamat' => $membership->alamat,
					
					'action' => '<button class="btn btn-sm btn-info" onclick="edit('.$membership->id.')">Ubah</button> <button class="btn btn-sm btn-warning" onclick="remove('.$membership->id.')">Hapus</button>'
				);
			}
		} else {
			$data = array();
		}
		$membership = array(
			'data' => $data
		);
		echo json_encode($membership);
	}

	public function add()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('telepon'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin')
		);
		if ($this->membership_model->create($data)) {
			echo json_encode('sukses');
		}
	}

	public function delete()
	{
		$id = $this->input->post('id');
		if ($this->membership_model->delete($id)) {
			echo json_encode('sukses');
		}
	}

	public function edit()
	{
		$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('telepon'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin')
		);
		if ($this->membership_model->update($id,$data)) {
			echo json_encode('sukses');
		}
	}

	public function get_membership()
	{
		$id = $this->input->post('id');
		$membership = $this->membership_model->getSupplier($id);
		if ($membership->row()) {
			echo json_encode($membership->row());
		}
	}

	public function search()
	{
		header('Content-type: application/json');
		$membership = $this->input->post('membership');
		$search = $this->membership_model->search($membership);
		foreach ($search as $membership) {
			$data[] = array(
				'id' => $membership->id,
				'text' => $membership->nama
			);
		}
		echo json_encode($data);
	}

}

/* End of file membership.php */
/* Location: ./application/controllers/membership.php */