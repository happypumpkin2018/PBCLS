<?php
class Home extends Controller {
	function Home() {
		parent::Controller();
		$this->load->model('usermodel');
		$this->load->helper('form');
		$this->load->helper('html');
	}
	
	function index() {
		$user_name = $this->session->userdata('user_name');
		if(empty($user_name)){
			redirect('/home/notLogin');  
		}
		else {	
			$this->load->model('usermodel');
			$user_id = $this->usermodel->getUserid($user_name);
			$data['learning_ins'] = $this->usermodel->getPlayingInstances($user_id);
			$data['indicating_ins'] = $this->usermodel->getIndicatingInstances($user_id);
			$data['observing_ins'] = $this->usermodel->getObserveringInstances($user_id);
			$data['user_id'] = $user_id;
			$this->load->view('main/home',$data);
		}	
	}

/**
 * 功能：未登录页面进行返回
 * @return none
 */
	function notLogin(){
		$data['errorMessage'] = "您尚未登录，正在跳转登录页面";
		$data['redirection'] = "/index.php";
		$this->load->view('main/redirect',$data);
	}
	
	function quit() {
		if(null != $this->session->userdata('ins_id'))$this->session->unset_userdata('ins_id');
		if(null != $this->session->userdata('user_name') || null != $this->session->userdata('user_id') || null != $this->session->userdata('user_gid'))$this->session->sess_destroy();
		redirect('welcome/index/');
	}
}