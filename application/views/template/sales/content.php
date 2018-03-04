<?php
    $this->load->view('template/sales/header');

    if(isset($content)){
        $this->load->view($content); 
    }else{
        echo "No Content to Display";
    }

    $this->load->view('template/sales/footer');

?>