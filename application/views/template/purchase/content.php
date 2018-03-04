<?php
    $this->load->view('template/purchase/header');
    
    if(isset($content)){
        $this->load->view($content); 
    }else{
        echo "No Content to Display";
    }

    $this->load->view('template/purchase/footer');

?>