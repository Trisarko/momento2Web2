<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registry extends CI_Controller {

	public function index()
	{
                $result = array('records' => $this->Records->listRecords()); 
                $this->load->view('layouts/header');
                $this->load->view('records',$result);
                $this->load->view('layouts/footer');
	}
}