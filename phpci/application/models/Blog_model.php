<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog_model extends CI_Model{
	public function get_all(){
		$sql="select * from t_blogs";
		$query=$this->db->query($sql);
		return $query->result();
	}
}
?>