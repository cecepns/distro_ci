<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class M_Dashboard extends CI_Model {
    public function __construct ()
    {
        parent::__construct();
    }

    public function totalProduct()
    {   
        $query = $this->db->get('tbl_product');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }else {
            return 0;
        }
    }

    public function totalCategory()
    {   
        $query = $this->db->get('tbl_kategori');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }else {
            return 0;
        }
    }

    public function totalUsers()
    {   
        $query = $this->db->get('tbl_user');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }else {
            return 0;
        }
    }
   
}
?>