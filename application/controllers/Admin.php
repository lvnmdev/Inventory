<?php
class Admin extends CI_Controller {

    public function index(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'admin-views/dashboard';	
		$this->load->view('template/admin/content', $data);
	}

	public function employee_list(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'employee/employee-list';	
		$this->load->view('template/admin/content', $data);
	}

	public function profile(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'employee/profile';	
		$this->load->view('template/admin/content', $data);
	}
}

?>