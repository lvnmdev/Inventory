<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function do_post($data = null,$table = null){
		if($data != null && $table != null){
			$result = $this->db->insert($this->table, $data);
			if($result){
				$response['msg'] = "Successfully Added";
				$response['code'] = 201; // status code
				return $response;
			}
		}		
		return false;
	}

	public function do_delete($pkey = null){
		if($pkey != null){
			$this->db->where($this->pkey, $pkey)
						->delete($this->table);
			$response['msg'] = "Successfully Deleted";
			$response['code'] = 200; // status code
			return $response;
		}

		return false;
	}

	public function do_get($pkey = null){
		if($pkey != null){
			return $this->db->select('*')
						->from($this->table)
						->where($this->pkey, $pkey)
						->get()
						->result();
		}

		return $this->db->select('*')
						->from($this->table)
					    ->get()
					    ->result();
	}
}