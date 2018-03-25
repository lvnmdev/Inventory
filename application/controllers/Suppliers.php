<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->library('form_validation');

		$this->load->model('SupplierList');
    }

    public function list(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'purchase-views/suppliers-list';
		$this->load->view('template/purchase/content', $data);
    }
    
    //Procedurals       
    
	public function add()
	{
		$name1= $this->input->post('namee');

		$address1= $this->input->post('addresse');

		$products1= $this->input->post('productse');

		$contactper1= $this->input->post('contactper');

		$contactnumber1= $this->input->post('contactnumber');


		$this->SupplierList->add($name1,$address1,$products1,$contactper1,$contactnumber1);


		echo json_encode("success");
	}

	public function read(){
		$result=$this->SupplierList->read()->result_array();
		echo json_encode($result);
	}

	public function delete(){
		$id1=$this->input->post('ide');
		$this->SupplierList->delete($id1);
				
		echo json_encode("success");
	}


	public function edit(){
		$editidd = $this->input->post('ide');
		$editnamee = $this->input->post('nameee');
		$editaddresss = $this->input->post('addresss');
		$editproductss = $this->input->post('productss');
		$editcontactperr = $this->input->post('contactperr');
		$editcontactnumm = $this->input->post('contactnumm');
		$this->SupplierList->edit($editidd,$editnamee,$editaddresss,$editproductss,$editcontactperr,$editcontactnumm);

		echo json_encode("success");
	}
	
}

?>
