<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class M_Supplier extends CI_Model {
    public function __construct ()
    {
        parent::__construct();
    }
    // Read
    public function view_supplier()
    {
        return $this->db->query("SELECT * FROM tbl_supplier")->result();
    }
    // Create
    public function proses_tambah()
    {
        $data=array(
            "id_supplier"=>$this->input->post('id_supplier'),
            "nama"=>$this->input->post('nama'),
            "telepon"=>$this->input->post('telepon'),
            "alamat"=>$this->input->post('alamat'),
        );
        $this->db->insert("tbl_supplier",$data);
    }
    // Update
    public function edit_supplier($id)
    {
        $this->db->where("id_supplier",$id);
        return $this->db->get("tbl_supplier")->row();
    }

    public function proses_edit($id)
    {
        $data=array(
            "nama"=>$this->input->post('nama'),
            "telepon"=>$this->input->post('telepon'),
            "alamat"=>$this->input->post('alamat'),
        );
        $this->db->where("id_supplier",$id);
        return $this->db->update("tbl_supplier",$data);
    }
    // Delete
    public function hapus_supplier($id)
    {
        $this->db->where("id_supplier",$id);
        return $this->db->delete("tbl_supplier");
    }
}
?>