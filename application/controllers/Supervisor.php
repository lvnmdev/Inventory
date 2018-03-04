<?php
class Supervisor extends CI_Controller {

    public function index(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'supervisor-views/dashboard';	
		$this->load->view('template/supervisor/content', $data);
	}
}

?>