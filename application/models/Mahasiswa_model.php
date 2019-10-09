<?php 

class Mahasiswa_model extends CI_Controller {

	public function getAllMahasiswa()
	{
		return $this->db->get('mahasiswa')->result_array();
	}
}