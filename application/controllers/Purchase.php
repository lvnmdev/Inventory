<?php
class Purchase extends CI_Controller {

    public function index(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'purchase-views/dashboard';	
		$this->load->view('template/purchase/content', $data);
	}

	public function purchase_order(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'purchase-views/purchase-order';	
		$this->load->view('template/purchase/content', $data);
	}

	public function purchase_history(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'purchase-views/purchase-history';	
		$this->load->view('template/purchase/content', $data);
	}

	public function purchase_form(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'purchase-views/purchase';	
		$this->load->view('template/purchase/content', $data);
	}

	public function profile(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'employee/profile';
		$this->load->view('template/purchase/content', $data);
	}
}

?>