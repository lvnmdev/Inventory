<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('CustomerAcc');
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

	//Functionals

	public function registerCustomer(){
		$result=$this->CustomerAcc->addCustomer();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function loginCustomer(){
		$return = $this->CustomerAcc->loginCustomer();
		$msg['success'] = false;
		if($return[1]){
			
			$msg['success'] = true;
			// set session
			$session_data = array(
				'username' => ucfirst($return[0]->username),
				'email' => ($return[2]->custemail),
				'sex' => ($return[2]->custsex),
				'name' => ($return[2]->custfname." ".$return[2]->custlname),
				'billadd' => ($return[2]->billadd),
				'deladd' => ($return[2]->deliveradd),
				'privilege' => ($return[0]->usertype),
			);

			$this->session->set_userdata($session_data);
			$msg['data'] = $this->session->userdata('privilege');

		}		
		echo json_encode($msg);
	}

	// logout
	public function logout(){
		$this->session->sess_destroy();
		redirect('Main/index');
	}

	public function profile(){
		$data['pageTitle'] = 'Petalia Furnitures';
		$data['content'] = 'customers/profile';
		$this->load->view('template/customer/content',$data);
	}
}
