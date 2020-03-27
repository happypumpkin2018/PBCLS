<?php
class Evaluation extends Controller {
	function Evaluation() {
		parent::Controller();
		$this->load->helper('html');
		$this->load->model('instancemodel');
		$this->load->model('casemodel');
		$this->load->model('usermodel');
		$this->load->model('xmlmodel');
		$this->load->helper('form');
		$this->load->helper('download');
		$this->load->helper('file');
		define("INDICATOR_APPLYING", "1");
		define("INDICATOR_PLAYING",'2');
		define("INDICATOR_NONE",'0');
	}
	
    function index() {
		$user_name = $this->session->userdata('user_name');
		if(empty($user_name)){
			redirect('/home/notLogin');  
		}
		else {	
//			$this->load->model('usermodel');
//			$user_id = $this->usermodel->getUserid($user_name);
//			$data['learning_ins'] = $this->usermodel->getPlayingInstances($user_id);
//			$data['indicating_ins'] = $this->usermodel->getIndicatingInstances($user_id);
//			$data['observing_ins'] = $this->usermodel->getObserveringInstances($user_id);
//			$data['user_id'] = $user_id;
//			$this->load->view('home',$data);
            $this->load->view('evaluation/evaluation');

		}	
	}
	
	function selfevaluation()
	{
	    $user_name = $this->session->userdata('user_name');
		if(empty($user_name)){
			redirect('/home/notLogin');  
		}
//		$rolegroup = $this->usermodel->getrolegroup($user_name);
//		if($rolegroup == 1 )
//		{
//				$this->load->view('evaluation_self_manager');
//		}
//		elseif ($rolegroup == 2)
//		{
//				$this->load->view('evaluation_self_mumber');
//		}
		$this->load->view('evaluation/evaluation_self_mumber');
	}
	
	function mutualmain()
	{
	    $user_name = $this->session->userdata('user_name');
		if(empty($user_name)){
			redirect('/home/notLogin');  
		}
		$this->load->view('evaluation/evaluation_mutual_main');
	}
	
	function mumbertomumber()
	{
	    $user_name = $this->session->userdata('user_name');
		if(empty($user_name)){
			redirect('/home/notLogin');  
		}
		
		
	}
	function mumbertomanager()
	{
		
	}
	
	function managertomumber()
	{
		
	}
	
	function instructortomumber()
	{
		
	}
	
	function instructortoteam()
	{
		
	}
    
	function frominstructor()
	{
	    $user_name = $this->session->userdata('user_name');
		if(empty($user_name)){
			redirect('/home/notLogin');  
		}
		$this->load->view('evaluation/evaluation_frominstructor');
	}




	
	
	
	
	
}


































?>