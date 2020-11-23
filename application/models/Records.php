<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Records extends CI_model {

	public function listRecords()
	{
            $response = $this->db->query("SELECT * FROM registry")->result();
            return $response; 
	}

	public function insertRegistry($registry){
			$this->db->insert('registry',$registry);
	}

	public function deleteRegistry($id){
			$response = $this->db->query("DELETE FROM registry WHERE id={$id}");
	}

	public function listRegistry($id){
			$response = $this->db->query("SELECT * FROM registry WHERE id = $id")->result();
			return $response[0];
	}

	public function sendUpdateRegistry($registry){
			$response = $this->db->query("UPDATE registry SET 
				name='{$registry['name']}',
				age='{$registry['age']}',
				type='{$registry['type']}',
				description='{$registry['description']}',
				food='{$registry['food']}'
				WHERE id='{$registry['id']}'
				");
	}
}