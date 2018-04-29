<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent :: __construct();
			//$this->load->helper('url');
			$this->load->model("User_model");
			//this->load->library('session');

		}//初始化

		public function index(){

		}
		public function reg(){
			$this->load->view('reg.php');    
		}
		public function login(){
			$this->load->view('login.php');
		}
		public function do_login(){
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$mpass=md5($pass);

			//$this->load->model("User_model");
			$result=$this->User_model->get_name_by_pass($uname,$mpass);
			if ($result) {
				//设置CI_session值# code...
				$newdata = array(
					'uid' => $result->uid,
					'uname' => $result->uname,
					'logged_in' => TRUE,
				);
				$this->session->set_userdata($newdata);
				redirect('Blog/index');
			}
		}
		public function unlogin(){
			$array_items=array('uid','uname','logged_in');
			$this->session->unset_userdata($array_items);
			redirect('Blog/index');
		}
		public function do_reg(){
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$mpass=md5($pass);

			//加载model类
			//$this->load->model('User_model');
			//加载model类下面方法
			$result=$this->User_model->insert_name($uname,$mpass);
			if($result){
				//向控制器、方法跳 控制器（当前/另外）
				redirect("User/login");
			}else{
				
			}

			//echo $this->input->get('id');
		}
	}


?> 