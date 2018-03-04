<?php
    $this->load->view('template/customer/header');

    if(isset($content)){
        $this->load->view($content); 
    }else{
        echo "No Content to Display";
    }
    $this->load->view('template/customer/footer');

?>