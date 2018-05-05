<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//echo $this->session->userdata('uname');
		$this->load->model('Blog_model');
		$result=$this->Blog_model->get_all();
		$data['blogs']=$result;
		$this->load->view('index.php',$data);
	}

	//添加分类
    public function all(){
	    $this->load->view('all.php');

    }
    public function add_catalog(){
	    $cata=$this->input->post('cata');
	    $this->load->model('Blog_model');
	    $result=$this->Blog_model->addcata($cata);
	    if ($result){
	        $this->add_article();
        }
    }

    public function do_add(){
	    $cid=$this->input->post('catalog');
	    $title=$this->input->post('title');
	    $con=$this->input->post('con');

	    $this->load->model('Blog_model');
        $result=$this->Blog_model->add_pass($cid,$title,$con);
        if ($result){
            redirect('Blog/index');
        }
    }

    public function add_article(){
	    $this->load->model('Blog_model');
	    $result=$this->Blog_model->get_catalog();
	    $arr['cata']=$result;
	    $this->load->view('add.php',$arr);
    }
}
?>