<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_product');
        $this->load->model('m_aboutme');
        $this->load->model('m_kategori');
        $this->load->model('m_gallery');
    }

	public function index()
	{
        $data['product']=$this->m_product->view_product();
        $data['about']=$this->m_aboutme->getAboutById(1);
        $data['kategori']= $this->m_kategori->view_kategori();
        
        $data['page']= 'page/home.php';
        $data['active']= 'home';
		$this->load->view('frontend/index', $data);
	}

	public function gallery()
	{
        $data['about']=$this->m_aboutme->getAboutById(1);
        $data['gallery']=$this->m_gallery->view_gallery();
        
        $data['active']= 'gallery';
        $data['page']= 'page/gallery.php';
		$this->load->view('frontend/index', $data);
	}

	public function detail_product($id)
	{
        $data['product']=$this->m_product->edit_product($id);
        $data['about']=$this->m_aboutme->getAboutById(1);
        $data['active']= 'home';

        $data['page']= 'page/detail_product.php';
		$this->load->view('frontend/index', $data);
	}


}
