<?php
class Purchase extends CI_Controller {

    public function index(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'purchase-views/dashboard';	
		$this->load->view('template/admin/content', $data);
	}
}

?>