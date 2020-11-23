<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
                $this->load->view('layouts/header');
                $this->load->view('users');
                $this->load->view('layouts/footer');
        }
        
        public function insertRegistry(){
                $name = $this->input->post('name');
                $age = $this->input->post('age');
                $type = $this->input->post('type');
                $description = $this->input->post('description'); 
                $food = $this->input->post('food');               
                $registry = array (
                        'name' => $name,
                        'age' => $age,
                        'type' => $type,
                        'description' => $description,
                        'food' => $food
                );
                $this ->Records->insertRegistry($registry); 
                header('location: http://localhost/ExamenSegundoMomento/registry');
        }

        public function deleteRegistry(){
                $id = $this->input->get('id');
                $this->Records->deleteRegistry($id);
                header('location: http://localhost/ExamenSegundoMomento/registry/');
        } 

        public function editRegistry(){
                $id = $this->input->get('id');
                $registry = array('registry' => $this->Records->listRegistry($id));
                $this->load->view('layouts/header');
                $this->load->view('usersedit',$registry);
                $this->load->view('layouts/footer');
        }

        public function sendUpdateRegistry(){
                $id = $this->input->get('id');
                $name = $this->input->post('name');
                $age = $this->input->post('age');
                $type = $this->input->post('type');
                $description = $this->input->post('description');
                $food = $this->input->post('food');                 
                $registry = array (
                        'id' => $id,
                        'name' => $name,
                        'age' => $age,
                        'type' => $type,
                        'description' => $description,
                        'food' => $food
                );
                $this->Records->sendUpdateRegistry($registry);
                header('location: http://localhost/ExamenSegundoMomento/registry');        
        }
}