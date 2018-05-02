<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
	public function insert_name($name,$pass){
		// echo $name."| |".$pass;
		// $sql="insert into user(uid,uname,pass) values(null,'$name','$pass')";
		// $query=$this->db->query($sql);
		// return $query;

		$arr=array(
			'uid'=>1,
			'uname'=>$name,
			'pass'=>$pass,
		);

		$query=$this->db->insert('user',$arr);
		return $query;
	}
	public function get_name_by_pass($uname,$mpass){
		$sql="select * from user where uname='$uname' and pass='$mpass'";
		$query=$this->db->query($sql);
		return $query->row();
	}
}
?>