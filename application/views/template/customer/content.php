<?php
    $checker = $this->session->has_userdata('username');
	if ($checker){
		$this->load->view('template/customer/header-login');	
	}else{
		$this->load->view('template/customer/header');		
	}


    if(isset($content)){
        $this->load->view($content); 
    }else{
        echo "No Content to Display";
    }
    $this->load->view('template/customer/footer');

?>