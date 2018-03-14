<?php
class Products extends CI_Controller {

    public function index(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'products-views/dashboard';	
		$this->load->view('template/products/content', $data);
	}

	public function inventory(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'products-views/inventory';
		$this->load->view('template/products/content', $data);
	}

	public function profile(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'employee/profile';
		$this->load->view('template/products/content', $data);
	}
}

?>