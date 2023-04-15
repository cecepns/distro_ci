<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class M_gallery extends CI_Model {
    public function __construct ()
    {
        parent::__construct();
    }
    
    public function view_gallery ()
    {
        return $this->db->query("SELECT * FROM tbl_gallery")->result();
    }
    
    public function proses_tambah($data)
    {
        return $this->db->insert("tbl_gallery",$data);
    }
    
    public function edit_gallery($id)
    {
        $this->db->where("id_gallery",$id);
        return $this->db->get("tbl_gallery")->row();
    }

    public function proses_edit($data, $id)
    {
        return $this->db->update("tbl_gallery",$data, array('id_gallery' => $id));
    }
    
    public function hapus_gallery($id)
    {
        $this->db->where("id_gallery",$id);
        return $this->db->delete("tbl_gallery");
    }
}
?>