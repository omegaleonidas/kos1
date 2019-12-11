<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('BookingModel','booking');
        $this->load->model('JenisUserModel','jenisuser');
        $this->load->helper(array('url', 'form'));
        $this->load->library(array('form_validation', 'Recaptcha'));
        
       
    }
	public function pemesanan($idjenis)
	{           
                $this->load->model('Fasilitas_Model','fasilitas');
                
                $this->load->model('JenisKamarModel','jeniskamar');

                $data['jenis'] = $this->jenisuser->getInfo('id,nama');
               $data['captcha'] =$this->recaptcha->getWidget();
                $data['booking'] = $this->booking->getAll();
                $data['script_captcha']   = $this->recaptcha->getScriptTag();
                $data['fasilitas'] = $this->fasilitas->getInfo('id,judul,keterangan');
                $where = [
                    'id'=>$idjenis
                ];
                $data['jenis_kamar'] = $this->jeniskamar->getWhere('*',$where);
                 $data['jenis_fasilitas'] = $this->fasilitas->getWhere('*',$where);

                $this->load->view('template/header');
              
                $this->load->view('template/booking',$data);
                 $this->load->view('template/fasilitas1',$data);
                $this->load->view('template/contac');
                $this->load->view('template/footer');
                $this->load->view('template/script');
    }
    public function insert(){
        $this->load->model('Fasilitas_Model','fasilitas');
        $this->load->model('JenisKamarModel','jeniskamar');
        $data['jenis'] = $this->jenisuser->getInfo('id,nama');
        $data['captcha'] =$this->recaptcha->getWidget();
         $data['booking'] = $this->booking->getAll();
         $data['script_captcha']   = $this->recaptcha->getScriptTag();
         $data['fasilitas'] = $this->fasilitas->getInfo('id,judul,keterangan');
         $where = [
             'id'=>$idjenis
         ];
         $data['jenis_kamar'] = $this->jeniskamar->getWhere('*',$where);
          $data['jenis_fasilitas'] = $this->fasilitas->getWhere('*',$where);
       
        $this->load->view('template/header');
        
        $this->load->view('template/booking',$data);

       $this->form_validation->set_rules('txtemail','Email','required',['required'=>'email harus diisi']);
       $this->form_validation->set_rules('txtdate','Date','required',['required'=>'Date harus diisi']);
       $this->form_validation->set_rules('txtlama','Lama','required',['required'=>'Lama harus diisi']);
       $this->form_validation->set_rules('txtharga','Harga','required',['required'=>'Harga harus diisi']);

       $recaptcha = $this->input->post('g-recaptcha-response');
       $response = $this->recaptcha->verifyResponse($recaptcha);
        if($this->form_validation->run()== FALSE || !isset($response['success']) || $response['success'] <> true){
                  
         
			$this->load->view('template/fasilitas',$data);
		    $this->load->view('template/footer');
			$this->load->view('template/script');
        }
        else{
            $data = [
                'email'=>$this->input->post('txtemail'),
               // 'id_user'=>$this->input->post('txtiduser'),
                'tgl_booking'=>$this->input->post('txtdate'),
                'lama'=>$this->input->post('txtlama'),
                "harga"=>$this->input->post('txtharga'),
                "id_kamar"=>$this->input->post('txtidKamar')

            ];
			
            $this->booking->insert($data);
            redirect('welcome');    
        }
    }

    
  
















    

    
   
   
}
