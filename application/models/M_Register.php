<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Register extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insert_user($data)
    {
        $msg="<script>alert('Berhasil mendaftarkan akun')</script>";
        $this->session->set_flashdata("pesan",$msg);
        return $this->db->insert('tbl_user', $data);
    }
} 
?>