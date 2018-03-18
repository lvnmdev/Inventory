<?php
class Admin extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('EmployeeAcc');
	}

    public function index(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'admin-views/dashboard';	
		$this->load->view('template/admin/content', $data);
	}

	public function employee_list(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'admin-views/employee-list';	
		$this->load->view('template/admin/content', $data);
	}

	public function profile(){
		$data['pageTitle'] = 'Petalia Furnitures';

		$data['content'] = 'employee/profile';	
		$this->load->view('template/admin/content', $data);
	}

	//FUCKING PROCEDURES! HAHAHAHA

	// 	AJAX STARTS HERE
	//Show Employee
	public function showAllEmployee(){
		$result = $this->EmployeeAcc->showAllEmployee();
		echo json_encode($result);
	}

	//Add Employee
	public function addEmployee(){
		$result = $this->EmployeeAcc->addEmployee();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	//Edit employee
	public function editEmployee(){
		$result = $this->EmployeeAcc->editEmployee();
		echo json_encode($result);
	}

	public function updateEmployee(){
		$result = $this->EmployeeAcc->updateEmployee();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	public function deleteEmployee(){
		$result = $this->EmployeeAcc->deleteEmployee();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

// 	AJAX ENDS HERE


	//Employee Registration procedure.
	// public function empRegister(){
	// 	$this->load->model('EmployeeAcc', 'employees');

	// 	if($this->input->post('password') == $this->input->post('repassword')){
	// 		$table = "tblemployee";
	// 		$data = array(
	// 			'empusername' 		=> $this->security->xss_clean($this->input->post('username')),
	// 			'emppassword' 		=> $this->security->xss_clean($this->input->post('password')),
	// 			'empemail'			=> $this->security->xss_clean($this->input->post('email')),
	// 			'empfname'			=> $this->security->xss_clean($this->input->post('firstname')),
	// 			'emplname'			=> $this->security->xss_clean($this->input->post('lastname')),
	// 			'empsex'			=> $this->security->xss_clean($this->input->post('gender')),
	// 			'empdesignation' 	=> $this->security->xss_clean($this->input->post('designation')),
	// 			'supervisedby' 		=> $this->security->xss_clean($this->input->post('supervisor'))
	// 		);

	// 		$result = $this->employees->create($table, $data);
			
	// 	}
	
	// 	$data['pageTitle'] = 'Petalia Furnitures | Admin';
	// 	$data['footer'] = 'Petalia Furnitures';
	// 	$data['admin'] = 'admin-views/empRegistration';	
	// 	$this->load->view('template/admin/content', $data);
	// }
}

?>
