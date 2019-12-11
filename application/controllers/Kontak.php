<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Model_kontak','kontak');
      

    }
    public function index()
  
	{    
        $this->load->model('Model_kamar','kamar');     
        $data1['kamar'] = $this->kamar->getAll();
	     $data['kontak'] = $this->kontak->getAll();
                $this->load->view('template/header');
                $this->load->view('template/macamKos',$data1);
                $this->load->view('template/fasilitas');
               
                
                $this->load->view('template/contac');
                $this->load->view('template/script');
               
    }
    public function insert(){
       $this->form_validation->set_rules('txtname','Name','required',['required'=>'Name harus diisi']);
       $this->form_validation->set_rules('txtemail','Email','required',['required'=>' email harus diisi']);
       $this->form_validation->set_rules('txtno','Phone','required',['required'=>'no phone harus diisi']);
       $this->form_validation->set_rules('txtmessage','Message','required',['required'=>'message harus diisi']);
     
      
	
      
        if($this->form_validation->run()==false){
            $this->load->view('template/header');
            $this->load->view('template/macamKos');
            $this->load->view('template/fasilitas');
          
            $this->load->view('template/contac');
		    $this->load->view('template/footer');
			$this->load->view('template/script');
        }
        else{
            $data = [
                'nama'=>$this->input->post('txtname'),
                'email'=>$this->input->post('txtemail'),
                'nohp'=>$this->input->post('txtno'),
                "message"=>$this->input->post('txtmessage'),
              

            ];
			
            $this->kontak->insert($data);
            redirect('kontak');    
        }
    }

  
      
}
