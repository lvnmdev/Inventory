<?php
class Purchase extends CI_Controller {

    public function index(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'purchase-views/dashboard';	
		$this->load->view('template/admin/content', $data);
	}

	public function suppliers(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'purchase-views/suppliers-list';
		$this->load->view('template/purchase/content', $data);
	}
}

?>