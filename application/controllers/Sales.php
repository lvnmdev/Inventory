<?php
class Sales extends CI_Controller {

    public function index(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'sales-views/dashboard';	
		$this->load->view('template/sales/content', $data);
    }
    
    public function sales_statistics(){
        $data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'sales-views/sales-statistics';	
		$this->load->view('template/sales/content', $data);
    }

    public function sales_history(){
        $data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'sales-views/sales-history';	
		$this->load->view('template/sales/content', $data);
    }

    public function customers(){
        $data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'sales-views/customers';	
		$this->load->view('template/sales/content', $data);
    }

    public function profile(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'employee/profile';
		$this->load->view('template/sales/content', $data);
	}
}

?>