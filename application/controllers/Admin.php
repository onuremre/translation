<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Database');
	}

	public function index()
	{
		if($this->session->userdata('mail')) {
			$data['mail'] = $this->session->userdata('mail');
			$data['language'] = $this->Database->showLanguages();
			$data['request'] = $this->Database->showRequests();
			$this->load->view("admin", $data);
		}
		else{
			$this->load->view("login");
		}
	}

	public function login(){
		$data['login'] = $this->input->post();
		if($this->Database->login($data['login']['mail'], md5($data['login']['password']))){
			$session_data = array(
				'mail' =>  $data['login']['mail'],
			);
			$this->session->set_userdata($session_data);
			redirect(base_url().'Admin');
			
		}
		else{
			echo 'Kullanıcı adı veya şifre yanlış';
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url() . 'Admin');
	}

	public function addLanguage(){
		if($this->session->userdata('mail')) {
			$data['language'] = $this->input->post();
			$config['upload_path']='uploads/language';
			$config['allowed_types']='jpg|png|gif';
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$this->load->library('upload',$config);
			$this->upload->do_upload('file');
			$fd=$this->upload->data();
			$data['language']['file']=$fd['file_name'];

			if($this->Database->addLanguage($data['language'])){
				$data['error'] = 0;
			}else{
				$data['error'] = 1;
			}
			redirect(base_url().'Admin');
		}
		else{
			redirect(base_url() . 'Admin');
		}
	}

	public function updateLanguage(){
		if($this->session->userdata('mail')) {
			$data['language'] = $this->input->post();
			$config['upload_path']='uploads/language';
			$config['allowed_types']='jpg|png|gif';
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$this->load->library('upload',$config);
			$this->upload->do_upload('file');
			$fd=$this->upload->data();
			if($fd['file_name'] != ""){
				$data['language']['file']=$fd['file_name'];
			}
			if($this->Database->updateLanguage($data['language'])){
				$data['error'] = 0;
			}else{
				$data['error'] = 1;
			}
			redirect(base_url().'Admin');
		}
		else{
			redirect(base_url().'Admin');
		}
	}

	public function deleteLanguage($id){
		if($this->session->userdata('mail')) {
			$result = $this->Database->deleteLanguage($id);

			if ($result) {
				redirect(base_url() . 'Admin');
			} else {
				echo "Hata";
			}
		}
		else{
			redirect(base_url().'Admin');
		}
	}

	public function deleteRequest($id){
		if($this->session->userdata('mail')) {
			$result = $this->Database->deleteRequest($id);

			if ($result) {
				redirect(base_url() . 'Admin');
			} else {
				echo "Hata";
			}
		}
		else{
			redirect(base_url().'Admin');
		}
	}
}
