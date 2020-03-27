<?php
class Ins extends Controller {
	function Ins() {
		parent::Controller();
		$this->load->helper('html');
		$this->load->model('instancemodel');
		$this->load->model('casemodel');
		$this->load->model('usermodel');
		$this->load->model('xmlmodel');
		$this->load->helper('form');
		define("INDICATOR_APPLYING", "1");
		define("INDICATOR_PLAYING",'2');
		define("INDICATOR_NONE",'0');
	}
/**
 * 功能：判断用户是否已登录
 * @return TRUE OR FALSE
 */
	private function isLoggedIn(){
		$user_name = $this->session->userdata('user_name');
		return empty($user_name)?FALSE:TRUE;
		}

/**
 * 功能：返回登录首页
 * @param $ins_id
 * @return unknown_type
 */
	function index($ins_id='0') {
		if($this->isLoggedIn() == FALSE){
					redirect('/home/notLogin');  
		}else{
			$data['insList'] = $this->insList();
			$this->load->view('ins/ins_list',$data);
		}
	}

/**
 * 功能：获取开放状态的项目
 * @return array
 */
	private function insList(){
		return $this->instancemodel->getOpenedInstances();
	}

/**
 * 返回项目的详细信息
 * @param $ins_id	:项目ID
 * @return none
 */
	function insshow($ins_id = '0'){
	if($this->isLoggedIn() == FALSE){
				redirect('/home/notLogin'); 
	}
	else{
		if($ins_id!='0'){
			$ins=$this->instancemodel->getInstanceByid($ins_id);
			if(!empty($ins)){
				$caseid = $this->instancemodel->getCaseid($ins_id);
				$caseinfo = $this->casemodel->getCaseByid($caseid);
				$data['ins_info'] = array(
					'ins_name' => $ins['instancename'],
					'ins_status' => $ins['status'],
					'ins_creator' => $this->usermodel->getUsername($ins['creatorid']),
					'ins_cre_time' => $ins['creationtime'],
					'from_case' => $caseinfo['casename'],
					'case_descri' => $caseinfo['description'],
					'max_player' => $caseinfo['maxplayer'],
					'case_id' => $caseinfo['uid'],
					'creator_id' => $ins['creatorid'],
					'is_started' => $ins['isstarted']
				);
			}
			else {
				$data['ins_info'] = array(
					'ins_name' => '',
					'ins_status' => '',
					'ins_creator' => '',
					'ins_cre_time' => '',
					'from_case' => '',
					'case_descri' => '',
					'max_player' => '',
					'case_id' => '',
					'creator_id' => ''
				);
			}
		}
		else{//未指定ins_id
			$data['ins_info'] = array(
				'ins_name' => '',
				'ins_status' => '',
				'ins_creator' => '',
				'ins_cre_time' => '',
				'from_case' => '',
				'case_descri' => '',
				'max_player' => '',
				'case_id' => '',
				'creator_id' => ''
				);
			}	
			$data['ins_id'] = $ins_id;
			$data['isInProject'] = $this->instancemodel->isInProject($ins_id,$this->session->userdata('user_id'));
			$this->load->view('ins/ins_info',$data);
		}
	}

	function cs($ins_id){
		if($this->isLoggedIn() == FALSE){
			redirect('/home/notLogin');  
		}else{
			$tmp = $this->instancemodel->getInstanceByid($ins_id);
			if($tmp['creatorid'] == $this->session->userdata('user_id')){
				if(strcmp($_POST['ins_status'],"Open") == '0'){
					$this->instancemodel->setInstanceOpen($ins_id);
				}
				else if(strcmp($_POST['ins_status'],"Close") == '0'){
					$this->instancemodel->setInstanceClose($ins_id);
				}
			}
			else{//Current user is not the creator of instance
				
			}
			$this->charge($ins_id);
		}
	}



/**
 * function roleIdFactory
 * 功能：处理由charge页面发来的字符串数据，从中获取insId
 * @param $string
 * @return $insid
 */
	/*
	private function roleIdFactory($string){
		$replace = array("role","StatusChange","applyerList","Submit","banRole");
		return str_replace($replace,"",$string);
	}
	*/
	
/**
 * function decorateRolesInfo
 * 功能：将一个项目的扮演者的角色信息整理好并且打包以供使用
 * @param: 
 * 		$ins_id: 要查看的当前项目id 			
 * @return array()
 */
	private function decorateRolesInfo($ins_id){
		$ins_info = $this->instancemodel->getInstanceByid($ins_id);
		$tmp = $this->instancemodel->getRolesInfo($ins_id);
		$count = 0;
		reset($tmp);
		while($value = current($tmp)){
			if($value['actorid'] != '0'){
				$actorname = $this->usermodel->getUsername($value['actorid']);
			}
			else{
				$actorname = '';
			}
			$roleid = $value['roleid'];
			$applyingList = $this->instancemodel->getApplyer($ins_id,0,$roleid);
			$data['roles'][$count++] = array(
					'roleid' => $value['roleid'],
					'rolename' => $value['rolename'],
					'roletype' => $value['role'],
					'actorid' => $value['actorid'],
					'actorname' => $actorname,
					'rolestatus' =>$value['status'],
					'applyingList' => $applyingList
			);
			next($tmp);
		}
		$data['indicators'] = $this->instancemodel->getIndicators($ins_id);	//Get indicators' name.
		$data['indicatorApplyers'] = $this->instancemodel->getIndicatorApplyers($ins_id); //Get indicator applyers
		if($this->instancemodel->isApplyingIndicator($ins_id,$this->session->userdata('user_id')))
			$data['myIndicatorStatus'] = INDICATOR_APPLYING; //Applying indicator
		else if($this->instancemodel->isIndicator($ins_id,$this->session->userdata('user_id'))){
			$data['myIndicatorStatus'] = INDICATOR_PLAYING;	//Playing indicator
		}
		else $data['myIndicatorStatus'] = INDICATOR_NONE; //Not play or apply
		$data['applying'] = $this->instancemodel->getApplying($ins_id); //Get role applyer name
		$case_id = $this->instancemodel->getCaseid($ins_id);
		$case_info = $this->casemodel->getCaseById($case_id);
		$data['ins_info'] = array(
			'ins_name' => $ins_info['instancename'],
			'ins_creator' => $this->usermodel->getUsername($ins_info['creatorid']),
			'ins_status' => $ins_info['status'],
			'ins_from' => $this->casemodel->getCaseNameById($case_id),
			'case_descri' => $case_info['description'],
			'max_player' => $case_info['maxplayer'],
			'is_started' => $ins_info['isstarted']
		);
		$data['myrole'] = $this->instancemodel->getRoleInInstance($ins_id,$this->session->userdata('user_id'));
		$data['ins_id'] = $ins_id;
		$data['isApplying'] = $this->instancemodel->getApplyingRoleid($ins_id,$this->session->userdata('user_id'));
		return $data;
	}

	function charge($ins_id){
	if($this->isLoggedIn() == FALSE){
				redirect('/home/notLogin');     
	}else{
		$ins_info = $this->instancemodel->getInstanceByid($ins_id);
		//当前用户是管理员
		if($this->session->userdata('user_id') == $ins_info['creatorid']){
			$data = $this->decorateRolesInfo($ins_id);	
			$this->load->view('ins/ins_charge',$data);	
		}
		//当前用户非管理员
		else{
			$data = $this->decorateRolesInfo($ins_id);	
			$this->load->view('ins/ins_apply',$data);
		}
	}
}

	function apply($ins_id){
	if($this->isLoggedIn() == FALSE){
				redirect('/home/notLogin'); 
	}else{
		$applying_id = $this->instancemodel->getApplyingRoleid($ins_id,$this->session->userdata('user_id'));
		$role_ap = $_POST['apSub'];
		if($role_ap != '-1'){
			if($this->instancemodel->isAppliedRoleid($ins_id,$role_ap,$this->session->userdata('user_id')) == FALSE){
				$this->instancemodel->applyRole($ins_id,$role_ap,$this->session->userdata('user_id'));
			}
		}
		else{
			$this->instancemodel->quitApply($ins_id,$this->session->userdata('user_id'));
		}
			$this->charge($ins_id);
	}
}
/*
 * function InsOp
 * 功能：对一个Ins进行开始或者取消操作
 * @param 
 * 	$ins_id:表示当前操作的实例id
 * 	$op:操作代码；‘1’：表示开始当前实例；‘2’：表示结束当前实例；
 * return 无
 */
	function InsOp($ins_id = '0',$op = '0'){
		if($this->isLoggedIn() == FALSE){
					redirect('/home/notLogin');  
		}else if($ins_id == '0' || $op == '0'){
			redirect($_SERVER['HTTP_REFERER']);
		}else
		{
			$tmp = $this->instancemodel->getInstanceByid($ins_id);
			if($op == '1'){
				$this->startIns($ins_id);
			}else if($op =='2'){
				$this->cancelIns($ins_id);
			}
		}
	}

/*
 * function startIns
 * 功能：开始一个实例
 * @param:
 * 	$ins_id:表述需要开始的实例id
 * return:无
 */
	private function startIns($ins_id){
		if($this->instancemodel->isStarted($ins_id) == FALSE){
			if(!$this->instancemodel->startInstance($ins_id)){
				$data['errorMessage'] = "无法开始项目";
				$data['redirection'] = $_SERVER['HTTP_REFERER'];
				$this->load->view('main/redirect');
				die();
			}
			redirect('/project/index/'.$ins_id, 'refresh');
		}
		else{
			$data['errorMessage'] = "该项目已经开始";
			$data['redirection'] = $_SERVER['HTTP_REFERER'];
			$this->load->view('main/redirect');
			die();
		}
	}

/*
 * function CancelIns
 * 功能：取消一个实例
 * @param  $ins_id:表示当前需要取消的实例id
 * @return 无
 * 注：CancelIns只能用于尚未开始的实例，已经开始的实例不能取消
 */
	private function CancelIns($ins_id){
		$status = $this->instancemodel->isStarted($ins_id);
		if($status == true){
			$data['errorMessage'] = "项目已经开始，无法删除";
			$data['redirection'] = $_SERVER['HTTP_REFERER'];
			$this->load->view('main/redirect');
			die();
		}else{
			if(!$this->casemodel->deleteInstance($ins_id)){
				$data['errorMessage'] = "删除项目错误";
				$data['redirection'] = $_SERVER['HTTP_REFERER'];
				$this->load->view('main/redirect');
				die();
			}
		}
	}
	
	function banPlayer($ins_id,$user_id){
		return $this->instancemodel->banUser($ins_id,$user_id);
	}
	function acPlayer($ins_id,$role_id,$user_id){
		return $this->instancemodel->acceptRole($ins_id,$role_id,$user_id);
	}
/*
 * 新建一个实例
 */
	function crins($case_id){
		$this->load->library('uploadedfile');
		$ins = array(
			'instancename' =>$_POST['ins_name'],
			'caseid' => $case_id,
			'creatorid' => $this->session->userdata('user_id')
		);
		if('-1' == ($ins_id = $this->casemodel->addInstance($ins))){
			$data['errorMessage'] = "新建失败";
			$data['redirection'] = $_SERVER['HTTP_REFERER'];
			$this->load->view('main/redirect');
			die();
		}
		if(false == $this->uploadedfile->createFolder_ins($ins_id,$case_id)){
			$this->casemodel->deleteInstance($ins_id);
			$data['errorMessage'] = "建立文件夹不成功";
			$data['redirection'] = $_SERVER['HTTP_REFERER'];
			$this->load->view('main/redirect');
			die();
		}
			$this->charge($ins_id);
	}
}