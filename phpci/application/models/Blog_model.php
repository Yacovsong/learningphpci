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

    public function get_writer_by_data(){
	    $sql="select * from t_blogs,user where t_blogs.WRITER=user.uid";
	    $query=$this->db->query($sql);
	    return $query->result();
    }

    public function get_catalog(){
	    $query=$this->db->get('t_blog_catalogs');
	    return $query->result();
    }

    public function add_pass($cid,$title,$con){
	    $time=date('Y-m-d H:i:s',time());
	    $uid=$this->session->userdata('uid');
	    $arr=array(
	        'TITLE'=>$title,
            'CONTENT'=>$con,
            'ADD_TIME'=>$time,
            'WRITER'=>$uid,
            'CATALOG_ID'=>$cid,
        );

	    $query=$this->db->insert('t_blogs',$arr);
	    return $query;
    }
}
?>