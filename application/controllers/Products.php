<?php
class Products extends CI_Controller {

    public function index(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'products-views/dashboard';	
		$this->load->view('template/admin/content', $data);
	}
}

?>