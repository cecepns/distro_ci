<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutMe extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_aboutme');
    }

	public function index()
	{
        $data['konten']= "view_aboutme";
        $data['about']= $this->m_aboutme->getAboutMe();
        $this->load->view('template_back',$data);
	}

    public function view_edit($id)
    {
        $data['konten']= "edit_about";
        $data['about']= $this->m_aboutme->getAboutById($id);
        $this->load->view('template_back',$data);
    }
    
    public function proses_edit($id)
    {
        $data['about']=$this->m_aboutme->editAbout($id);
        $msg="<script>alert ('Data Berhasil Diedit!'</script>";
        $this->session->set_flashdata ("pesan",$msg);
        redirect("aboutme");
    }
}
?>

