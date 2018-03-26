<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('EmployeeAcc');
		$this->load->model('MainModel');
	}
	//Navigations
	public function index(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'home';	
		$this->load->view('template/customer/content', $data);
	}

	public function login(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'common/login';	
		$this->load->view('template/customer/content', $data);
	}

	public function registration(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'common/registration';	
		$this->load->view('template/customer/content', $data);
	}

	public function about_us(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'common/about-us';
		$this->load->view('template/customer/content', $data);
	}

	public function contact_us(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'common/contact-us';
		$this->load->view('template/customer/content', $data);

	}

	public function faq(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'common/faq';
		$this->load->view('template/customer/content', $data);
	}

	public function privacy_policy(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'common/privacy-policy';	
		$this->load->view('template/customer/content', $data);
	}

	public function profile(){
		$data['pageTitle'] = 'Petalia Furnitures';
		$data['content'] = 'customer-views/profile';
		$this->load->view('template/customer/content',$data);
	}

	//Functionals

	public function registerCustomer(){
		$result = $this->MainModel->addCustomer();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function loginUser(){
		$return=$this->MainModel->loginUser();
		$msg['success'] = false;
		if($return[1]){
			$msg['success'] = true;
			// set session
			if($return[3]=="Customer"){
				$session_data = array(
					'username' => ucfirst($return[0]->username),
					'pass' => ($return[0]->userpass),
					'email' => ($return[2]->custemail),
					'sex' => ($return[2]->custsex),
					'fname' => ($return[2]->custfname),
					'lname' => ($return[2]->custlname),
					'name' => ($return[2]->custfname." ".$return[2]->custlname),
					'billadd' => ($return[2]->billadd),
					'deladd' => ($return[2]->deliveradd),
					'privilege' => ($return[0]->usertype)
				);
				$this->session->set_userdata($session_data);			
				$msg['data'] = $this->session->userdata('privilege');
			}else if($return[3]=="Employee"){
				$session_data = array(
					'username' => ucfirst($return[0]->username),
					'pass' => ($return[0]->userpass),
					'position' => ($return[2]->empposition),
					'sex' => ($return[2]->empsex),
					'name' => ($return[2]->empfname." ".$return[2]->empmname." ".$return[2]->emplname),					
					'fname' => ($return[2]->empfname),
					'mname' => ($return[2]->empmname),
					'lname' => ($return[2]->emplname),
					'email' => ($return[2]->empemail),
					'dob' => ($return[2]->empdob),
					'address' => ($return[2]->empaddress),
					'phoneno' => ($return[2]->empphoneno),
					'date-registered' => ($return[2]->empdateofreg),
					'date-updated' => ($return[2]->empdateupdated),
					'privilege' => ($return[0]->usertype)
				);
				$this->session->set_userdata($session_data);			
				$msg['data'] = $this->session->userdata('privilege');
				$msg['position'] = $return[2]->empposition;
			}
		}
		echo json_encode($msg);
		
	}

	// logout
	public function logout(){
		$this->session->sess_destroy();
		redirect('Main/login');
	}
}
