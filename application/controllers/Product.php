<?php defined('BASEPATH') OR exit ('No direct script access allowed');
class Product extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_product');
        $this->load->model('m_kategori');
    }
    // Read
    public function view_product ()
    {
        $data['product']=$this->m_product->view_product();
        $data['konten']="view_product";
        $this->load->view('template_back',$data);
    }
    // Create
    public function tambah_product ()
    {
        $data['kategori']= $this->m_kategori->view_kategori();
        $data['konten']="tambah_product";
        $this->load->view('template_back',$data);
    }
   
    //Proses_Create
    public function proses_tambah_produk()
    {
		$config['upload_path']          = FCPATH.'/uploads/product/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['overwrite']            = true;
		$config['max_size']             = 5024; // 5MB
		$config['max_width']            = 2080;
		$config['max_height']           = 2080;

		$this->load->library('upload', $config);

        // lakukan upload
        if (!$this->upload->do_upload('img_product')) {
            // saat gagal, tampilkan pesan error
            $data['error'] = $this->upload->display_errors();
            $data['konten']="tambah_product";
            $this->load->view('template_back',$data);
        } else {
            // saat berhasil ambil datanya
            $uploaded_data = $this->upload->data();
        
            $data=array(
                "name_product"=>$this->input->post('name_product'),
                "desc_product"=>$this->input->post('desc_product'),
                "id_category"=>$this->input->post('category'),
                "price"=>$this->input->post('price'),
                "img_product"=>$uploaded_data['file_name'],
            );
            
            $query = $this->m_product->proses_tambah($data);

            if($query){
                echo 'berhasil di upload';
                redirect('product/view_product');
            }else{
                echo 'gagal upload';
            }
        }

        
    }
    // Get_Data_By_ID
    public function edit_product($id)
    {
        $data['product']=$this->m_product->edit_product($id);
        $data['kategori']= $this->m_kategori->view_kategori();
        $data['konten']="edit_product";
        $this->load->view('template_back',$data);
    }
    // Proses_Update
    public function proses_edit($id)
    {
        $config['upload_path']          = FCPATH.'/uploads/product/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['overwrite']            = true;
		$config['max_size']             = 5024; // 5MB
		$config['max_width']            = 2080;
		$config['max_height']           = 2080;

		$this->load->library('upload', $config);

        // lakukan upload
        if($_FILES['img_product']['error'] === 4) {

            $data=array(
                "name_product"=>$this->input->post('name_product'),
                "desc_product"=>$this->input->post('desc_product'),
                "id_category"=>$this->input->post('category'),
                "price"=>$this->input->post('price'),
            );
            
            $query = $this->m_product->proses_edit($data,$id);

            if($query){
                echo 'berhasil di edit';
                redirect('product/view_product');
            }else{
                echo 'gagal edit';
            }

        } else {
            if (!$this->upload->do_upload('img_product')) {
                $data['error'] = $this->upload->display_errors();
                $data['konten']="edit_product";
                
                $this->load->view('template_back',$data);

            } else {

                $_id = $this->m_product->edit_product($id);
                $uploaded_data = $this->upload->data();
                
                $data=array(
                    "name_product"=>$this->input->post('name_product'),
                    "desc_product"=>$this->input->post('desc_product'),
                    "id_category"=>$this->input->post('category'),
                    "price"=>$this->input->post('price'),
                    "img_product"=>$uploaded_data['file_name'],
                );
                
                $query = $this->m_product->proses_edit($data, $id);

                if($query){
                    unlink(FCPATH."/uploads/product/".$_id->img_product);
                    echo 'berhasil di upload';
                    redirect('product/view_product');
                }else{
                    echo 'gagal upload';
                }
            }
        }

        
    }
    //  Delete
    public function hapus_product($id)
    {       
        $_id = $this->m_product->edit_product($id);
        $query = $this->m_product->hapus_product($id);

        if($query) {

            unlink(FCPATH."/uploads/product/".$_id->img_product);

            $msg="<script>alert ('Data Berhasil Dihapus!'</script>";
            $this->session->set_flashdata ("pesan",$msg);
            redirect("product/view_product");
        }

    }
}
?>