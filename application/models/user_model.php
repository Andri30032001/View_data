<?php
	class Users_model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllusers(){
			$query = $this->db->get('users');
			return $query->result();
		}
	}

?>