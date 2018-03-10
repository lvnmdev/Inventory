<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller {
    public function index(){
        $method = $this->input->server("REQUEST_METHOD");

        switch($method){
            case "POST":   
                $data = $this->input->post();
                $this->do_post($data);
                break;
            case "GET":
                $data = $this->input->get();
                $this->do_get($data);
                break;
            case "DELETE":
                $pkey = $this->input->delete('pkey');
                $this->do_delete($pkey);
                break;
            default:
                $response['msg'] = "Method not allowed";
                $response['code'] = 403;
                $this->response_json($response);
        }
    }

    public function do_post($data){
        $response = $this->model->do_post($data);
		$this->response_json($response);
    }

    public function do_get(){
        $data['method'] = 'GET';
    }

    public function do_delete($pkey){
		$response = $this->model->do_delete($pkey);
		$this->response_json($response);
	}

	public function response_json($response){
		$this->output
				->set_status_header($response['code'])
				->set_content_type('application/json')
				->set_output(json_encode($response['msg']));

	}
}
?>