<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class M_AboutMe extends CI_Model {
    public function __construct ()
    {
        parent::__construct();
    }

    public function getAboutMe()
    {
        return $this->db->query("SELECT * FROM tbl_about_me")->result();
    }

    public function getAboutById($id)
    {
        $this->db->where("id",$id);
        return $this->db->get("tbl_about_me")->row();
    }

    public function editAbout($id)
    {
        $data=array(
            "address"=>$this->input->post('address'),
            "about"=>$this->input->post('about'),
            "phone"=>$this->input->post('phone'),
        );

        $this->db->where("id",$id);
        return $this->db->update("tbl_about_me",$data);
    }
   
}
?>