<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerAcc extends CI_Model {
    public function __construct(){
		parent::__construct();
	}

	public function loginCustomer(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$this->db->where('username', $user);
		$this->db->where('userpass', $pass);
		$query = $this->db->get('tblusers');


		if($query->num_rows()==1){
			$getdata = $this->db->select('*')->from('tblcustomers')->where('username', $user)->get();

			$result[0] = $query->row();
			$result[1] = true;
			$result[2] = $getdata->row();
			return $result;
		}else{
			$result[1] = false;
			return $result;
		}


	}

	public function addCustomer(){
		$field = array(
				'custemail' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'custsex' => $this->input->post('sex'),
				'custfname' => $this->input->post('name'),
				'custlname' => $this->input->post('surname'),
				'billadd' => $this->input->post('bill-add'),
				'deliveradd' => $this->input->post('deliver-add')
			);
		$field2 = array(
				'username' => $this->input->post('username'),
				'userpass' => $this->input->post('password')
			);
		$q1 = $this->db->insert('tblusers',$field2);
		$q2 = $this->db->insert('tblcustomers',$field);

		if ($q1&&$q2){
			return true;
		} 

	}
}
?>