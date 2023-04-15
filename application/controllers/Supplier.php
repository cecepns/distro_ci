<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class Supplier extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_supplier');
    }
    // Read
    public function view_supplier ()
    {
        $data['supplier']=$this->m_supplier->view_supplier();
        $data['konten']="view_supplier";
        $this->load->view('template_back',$data);
    }
    // Create
    public function tambah_supplier ()
    {
        $data['konten']="tambah_supplier";
        $this->load->view('template_back',$data);
    }
    //Proses_Create
    public function proses_tambah ()
    {
        $data['supplier']=$this->m_supplier->proses_tambah();
        $msg="<script>alert ('Data Berhasil Ditambah!'</script>";
        $this->session->set_flashdata ("pesan",$msg);
        redirect("supplier/view_supplier");
    }
    // Get_Data_By_ID
    public function edit_supplier($id)
    {
        $data['supplier']=$this->m_supplier->edit_supplier($id);
        $data['konten']="edit_supplier";
        $this->load->view('template_back',$data);
    }
    // Proses_Update
    public function proses_edit($id)
    {
        $this->m_supplier->proses_edit($id);
        $msg="<script>alert ('Data Berhasil Diedit!'</script>";
        $this->session->set_flashdata ("pesan",$msg);
        redirect("supplier/view_supplier");
    }
    //  Delete
    public function hapus_supplier($id)
    {
        $this->m_supplier->hapus_supplier($id);
        $msg="<script>alert ('Data Berhasil Dihapus!'</script>";
        $this->session->set_flashdata ("pesan",$msg);
        redirect("supplier/view_supplier");
    }
}
?>