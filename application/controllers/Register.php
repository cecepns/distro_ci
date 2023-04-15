<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
    public function __construct ()
    {
        parent::__construct ();
        $this->load->model('m_register');
    }

    public function index()
    {
        $this->load->view('frontend/register');
    }

    public function process()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');
        $level = 2;

        $data = array(
            'username' => $username,
            'password' => md5($password),
            'phone' => $phone,
            'address' => $address,
            'level' => $level
        );

        $this->m_register->insert_user($data);

        redirect('login');
    }


    // public function ceklogin()
    // {
    //     $this->load->model("m_login");
    //     $this->m_login->ceklogin();
    // }

    // public function logout()
    // {
    //     $this->session->sess_destroy();
    //     redirect("login");
    // }
}
?>