<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class database extends CI_Model{
	public function __construct(){
		parent::__construct();
	}


	function addLanguage($data){
		$this->db->insert('language', $data);
		return true;
	}

	function showLanguage($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$this->db->from('language');
		$query = $this->db->get();
		if ( $query->num_rows() > 0 ){
			$row = $query->result_array();
			return $row;
		}else{
			return false;
		}
	}

	function showLanguages(){
		$this->db->select('*');
		$this->db->from('language');
		$query = $this->db->get();
		if ( $query->num_rows() > 0 ){
			$row = $query->result_array();
			return $row;
		}else{
			return false;
		}
	}

	function deleteLanguage($id){
		$this->db->where('id', $id);
		$this->db->delete('language');
		return true;
	}

	function updateLanguage($data){
		$this->db->where('id', $data["id"]);
		$this->db->update('language', $data);

		return true;
	}

	function showRequests(){
		$this->db->select('*');
		$this->db->from('request');
		$query = $this->db->get();
		if ( $query->num_rows() > 0 ){
			$row = $query->result_array();
			return $row;
		}else{
			return false;
		}
	}

	function addRequest($data){
		$this->db->insert('request', $data);
		return true;
	}

	function deleteRequest($id){
		$this->db->where('id', $id);
		$this->db->delete('request');
		return true;
	}

	function login($email, $password){
		$this->db->select('*');
		$this->db->where('mail', $email);
		$this->db->where('password', $password);
		$this->db->from('user');
		$query = $this->db->get();
		if ( $query->num_rows() > 0 ){
			return true;
		}else{
			return false;
		}
	}

}
