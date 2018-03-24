<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
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

	public function register(){
		$this->load->model('CustomerAcc','customeracc');

		if($this->input->post('password') == $this->input->post('repassword')){
			$table = "tblcustomers";
			$data = array(
				'custemail' => $this->security->xss_clean($this->input->post('email')),
				'custusername' => $this->security->xss_clean($this->input->post('username')),
				'custfname' => $this->security->xss_clean($this->input->post('name')),
				'custlname' => $this->security->xss_clean($this->input->post('surname')),
				'custsex' => $this->security->xss_clean($this->input->post('sex')),
				'custpassword' => $this->security->xss_clean($this->input->post('password')),
				'billadd' => $this->security->xss_clean($this->input->post('bill-add')),
				'deliveradd' => $this->security->xss_clean($this->input->post('deliver-add'))
			);

			$result = $this->customeracc->create($table, $data);

			if($result){
				$server['msg'] = "Successfully Added";	
				$server['status_code'] = 1;
			}
			else{
				$server['msg'] = "Failed to add";
				$server['status_code'] = 0;
			}	
		}
		else{
			$server['msg'] = "Password doesn't match";
			$server['status_code'] = 0;
		}
		

		$server['content'] = 'common/registration';
		$server['pageTitle'] = 'Petalia Furnitures';
		$this->load->view('template/customer/content', $server);
	}
}
