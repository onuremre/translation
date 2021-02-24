<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Translation extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Database');
	}

	public function index()
	{
		$data['language'] = $this->Database->showLanguages();
		$this->load->view("main", $data);
	}

	public function addRequest(){
		$data['request'] = $this->input->post();
		$config['upload_path']='uploads/request';
		$config['allowed_types']='*';
		$config['max_width'] = 0;
		$config['max_height'] = 0;
		$this->load->library('upload',$config);
		$this->upload->do_upload('file');
		$fd=$this->upload->data();
		$data['request']['file']=$fd['file_name'];

		if($this->Database->addRequest($data['request'])){
			$data['error'] = 0;
		}else{
			$data['error'] = 1;
		}
		$this->load->view('main', $data);
	}

}
