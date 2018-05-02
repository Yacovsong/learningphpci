<base href="<?php echo site_url();?>">

<?php
	if(!$this->session->userdata('uid')){
		echo "<a href='user/login'>未登录</a>";
	}else{
		$name=$this->session->userdata('uname');
		echo $name."已登录";
		echo "<a href='blog/all'>个人中心</a>";
		echo "&nbsp;&nbsp;"."<a href='user/unlogin'>注销</a>";
	}
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	foreach ($blogs as $value) {
		# code...
	// echo "<pre>";
	// print_r($blogs);
	// echo "</pre>";
?>
<h4>标题：<?php echo $value->TITLE?></h4>
<li>时间：<?php echo $value->ADD_TIME?></li>
<p><?php echo $value->CONTENT?></p>
<hr>

<?php
	}
?>