<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog_model extends CI_Model{
	public function get_all(){
		$sql="select * from t_blogs";
		$query=$this->db->query($sql);
		return $query->result();
	}

	public function addcata($cata){
	    $arr=array(
	        'NAME' =>$cata,
        );
	    $query=$this->db->insert('t_blog_catalogs',$arr);
	    return $query;
    }

    public function get_catalog(){
	    $query=$this->db->get('t_blog_catalogs');
	    return $query->result();
    }
}
?>