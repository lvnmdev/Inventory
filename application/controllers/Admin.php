<?php
class Admin extends CI_Controller {

    public function index(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'admin-views/dashboard';	
		$this->load->view('template/admin/content', $data);
	}

	public function employee(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'admin-views/employee';	
		$this->load->view('template/admin/content', $data);
	}
}

?>