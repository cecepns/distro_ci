<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class M_product extends CI_Model {
    public function __construct ()
    {
        parent::__construct();
    }
    
    public function view_product ()
    {
        return $this->db->query("SELECT tbl_product.id_product, tbl_product.price, tbl_product.name_product, tbl_product.img_product, tbl_product.desc_product, tbl_kategori.nama_kategori  FROM tbl_product INNER JOIN tbl_kategori ON tbl_product.id_category=tbl_kategori.id_kategori")->result();
    }
    
    public function proses_tambah($data)
    {
        return $this->db->insert("tbl_product",$data);
    }
    
    public function edit_product($id)
    {
        $this->db->where("id_product",$id);
        return $this->db->get("tbl_product")->row();
    }

    public function proses_edit($data, $id)
    {
        return $this->db->update("tbl_product",$data, array('id_product' => $id));
    }
    
    public function hapus_product($id)
    {
        $this->db->where("id_product",$id);
        return $this->db->delete("tbl_product");
    }
}
?>