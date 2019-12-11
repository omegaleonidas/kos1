<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model('Model_kamar','kamar');
		$this->load->model('Fasilitas_Model','fasilitas');
		
		
    }
	public function index()
	{

		$data['kamar'] = $this->kamar->getAll();
		$data['fasilitas'] = $this->fasilitas->getAll();
	
		$this->load->view('template/header');
	
		
		$this->load->view('template/macamKos',$data);
		$this->load->view('template/fasilitas1',$data);

		$this->load->view('template/contac');
		$this->load->view('template/footer');
		
		$this->load->view('template/script');
	}
}
