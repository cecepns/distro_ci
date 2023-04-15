<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Dashboard extends CI_Controller{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dashboard');
    }

	public function index()
	{
		if (!$this->session->userdata("level"))
        {
            redirect("login");
        }
		$data['total_product'] = $this->m_dashboard->totalProduct();
		$data['total_category'] = $this->m_dashboard->totalCategory();
		$data['total_users'] = $this->m_dashboard->totalUsers();
		$data['konten']="view_dashboard";
		$this->load->view('template_back',$data);
	}
} 
?>