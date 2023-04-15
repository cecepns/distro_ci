<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class Gallery extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_gallery');
    }
    // Read
    public function view_gallery ()
    {
        $data['gallery']=$this->m_gallery->view_gallery();
        $data['konten']="view_gallery";
        $this->load->view('template_back',$data);
    }
    // Create
    public function tambah_gallery ()
    {
        $data['konten']="tambah_gallery";
        $this->load->view('template_back',$data);
    }
   
    //Proses_Create
    public function proses_tambah_gallery()
    {
		$config['upload_path']          = FCPATH.'/uploads/product/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['overwrite']            = true;
		$config['max_size']             = 10024; // 5MB
		$config['max_width']            = 5000;
		$config['max_height']           = 5000;

		$this->load->library('upload', $config);

        // lakukan upload
        if (!$this->upload->do_upload('img_gallery')) {
            // saat gagal, tampilkan pesan error
            $data['error'] = $this->upload->display_errors();
            $data['konten']="tambah_gallery";
            $this->load->view('template_back',$data);
        } else {
            // saat berhasil ambil datanya
            $uploaded_data = $this->upload->data();
        
            $data=array(
                "img_gallery"=>$uploaded_data['file_name'],
            );
            
            $query = $this->m_gallery->proses_tambah($data);

            if($query){
                echo 'berhasil di upload';
                redirect('gallery/view_gallery');
            }else{
                echo 'gagal upload';
            }
        }

        
    }
    // Get_Data_By_ID
    public function edit_gallery($id)
    {
        $data['gallery']=$this->m_gallery->edit_gallery($id);
        $data['konten']="edit_gallery";
        $this->load->view('template_back',$data);
    }

    // Proses_Update
    public function proses_edit($id)
    {
        $config['upload_path']          = FCPATH.'/uploads/product/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['overwrite']            = true;
		$config['max_size']             = 10024; // 5MB
		$config['max_width']            = 5000;
		$config['max_height']           = 5000;

		$this->load->library('upload', $config);

        // lakukan upload
        if (!$this->upload->do_upload('img_gallery')) {
            $data['error'] = $this->upload->display_errors();
            $data['konten']="edit_gallery";
            
            $this->load->view('template_back',$data);

        } else {

            $_id = $this->m_gallery->edit_gallery($id);
            $uploaded_data = $this->upload->data();
            
            $data=array(
                "img_gallery"=>$uploaded_data['file_name'],
            );
            
            $query = $this->m_gallery->proses_edit($data, $id);

            if($query){
                unlink(FCPATH."/uploads/product/".$_id->img_gallery);
                echo 'berhasil di upload';
                redirect('gallery/view_gallery');
            }else{
                echo 'gagal upload';
            }
        }

        
    }
    //  Delete
    public function hapus_gallery($id)
    {       
        $_id = $this->m_gallery->edit_gallery($id);
        $query = $this->m_gallery->hapus_gallery($id);

        if($query) {

            unlink(FCPATH."/uploads/product/".$_id->img_gallery);

            $msg="<script>alert ('Data Berhasil Dihapus!'</script>";
            $this->session->set_flashdata ("pesan",$msg);
            redirect("gallery/view_gallery");
        }

    }
}
?>