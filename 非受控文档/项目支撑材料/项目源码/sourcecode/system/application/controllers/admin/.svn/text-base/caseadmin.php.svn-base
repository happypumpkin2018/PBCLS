<?php
Class Caseadmin extends Controller
{
	function Caseadmin()
	{
		parent::Controller();
		$this->load->model('casemodel');
	}
	
	function index()
	{
		if($this->session->userdata('user_gid') !== '0')
			redirect('/home/notLogin');
		$data['records'] = $this->casemodel->getAllCases();
		$this->load->view('admin/case_list', $data); 
	}
	
	function casesearch()
	{
		if($this->session->userdata('user_gid') !== '0')
		   redirect('/home/notLogin');
		$this->load->view('admin/case_search');
	}
	
	function complexsearch()   //复杂查找
	{
		if($this->session->userdata('user_gid') !== '0')
		   redirect('/home/notLogin');
		if($_POST)
		{
			if($_POST['searchtype']=='simple')
			   $this->load->view('admin/case_search');
			else $this->load->view('admin/case_complexsearch');
			   
		}
	}
	
	function comsearchresult()  //复杂查找的结果列表
	{
		if($this->session->userdata('user_gid') !== '0')
		   redirect('/home/notLogin');
		if(!empty($_POST))
        {
        	$array = $_POST;
        	$data['records'] = $this->casemodel->comsearch($array);
        	$this->load->view('admin/case_comsearchresult',$data);
        }
        
        else $this->load->view('admin/case_complexsearch');
		 
		
	}
	
	function casesearchinfo()
	{
		$id = $this->uri->segment(4);
		$data['records'] = $this->casemodel->getCaseById($id);
		$this->load->view('admin/case_info',$data);
       
	}
	
	function caseinfo()          //单个案例的详细信息
	{
		if($this->session->userdata('user_gid') !== '0')
		{
			redirect('/home/notLogin');
		}
		$id = $this->uri->segment(4);
		if($id !== false)  //显示通过caselist链接得到的case信息
		{
			$data['records'] = $this->casemodel->getCaseById($id);
		    $this->load->view('admin/case_info',$data);
		}   
		
		else   //显示通过casesearch搜素得到的case信息
		{
		  if($_POST['casename'] !== '')
		  {
			$casename=$_POST['casename'];
			if($this->casemodel->getCaseByName($casename) !== false)
			{
				$data['records']=$this->casemodel->getCaseByName($casename);
		        $this->load->view('admin/case_info',$data);
			}
		    else 
		    {
		    	echo "<script>alert('Wrong name !');location.href='javascript:history.back()';</script>";
		    }
		  }
		  else 
		  {
			echo "<script>alert('The name is full !');location.href='javascript:history.back()';</script>";
		  }
		}
	}
	
	function updatecase()
	{
		if($this->session->userdata('user_gid') !== '0')
		   redirect('/home/notLogin');
		   
		if($_POST)
		{
			$id=$_POST['caseid'];
			$array = array('uid' => $_POST['caseid'], 'casename' => $_POST['casename'],
			 'casetype' => $_POST['casetype'], 'author' => $_POST['author'],
			'version' => $_POST['version'], 'uploader' => $_POST['uploader'],
			'uploadtime' => $_POST['uploadtime'], 'status' => $_POST['casestatus'],
			'instances' => $_POST['instanceno'], 'description' => $_POST['description'],
			);
            $this->casemodel->updateCase($array);
			$data['records'] = $this->casemodel->getCaseById($id);
		    $this->load->view('admin/case_info',$data);			
		}   
		
	}
	
	function caselist()
	{
		if($this->session->userdata('user_gid') !== '0')
		   redirect('/home/notLogin');
		$data['records'] = $this->casemodel->getAllCases();
		$this->load->view('admin/case_list', $data);
	}
	
	function inactivecase()
	{
		if($this->session->userdata('user_gid') !== '0')
			redirect('/home/notLogin');
		$data['records']= $this->casemodel->getAllInactiveCases();
		$this->load->view('admin/case_inactivelist',$data);
	}
	
	function activestatus()
	{
		
		if($this->session->userdata('user_gid') !== '0')
			redirect('/home/notLogin');
		$id = $this->uri->segment(4);	
		$record = $this->casemodel->getCaseById($id);
		$record['status'] = !$record['status'];
		$this->casemodel->updateCase($record);
		redirect('admin/caseadmin/inactivecase');
	}
	
	function prunecase()
	{
		if($this->session->userdata('user_gid') !== '0')
			redirect('/home/notLogin');
		$data['records']= $this->casemodel->getAllCases();
		$this->load->view('admin/case_prune',$data);
	}
	
	function prune()
	{
	    if($this->session->userdata('user_gid') !== '0')
			redirect('/home/notLogin');
//
//		if(!($_POST['casename'] == '' && $_POST['uploader'] == '' && 
//		   $_POST['author'] == '' && $_POST['useno'] == '' && $_POST['uploadtime'] == ''))
		
        if(isset($_POST['operation']))
		{
			$array = $_POST ;
			$data = $this->casemodel->pruneCase($array);	
			$this->load->view('admin/case_prune');
		}
		else 
		{
			$this->load->view('admin/case_prune');
			
		}
	}
	
	function uploadcase()
	{
		if($this->session->userdata('user_gid') !== '0')
			redirect('/home/notLogin');
		$this->load->view('admin/case_upload');
	}
	
	
	function do_upload()
	{
		header("Content-Type: text/xml");	
		$this->load->model('xmlmodel');
		if(!isset($_FILES['myfile']['name'])){
			echo $this->xmlmodel->xmlError();
			die();
		}
		$this->load->library('pbcls_zip');
		$this->load->library('pbcoparse');
		
		$uploaddir = './system/application/uploads/';
		$uploadfile = $uploaddir.basename($_FILES['myfile']['name']);
		
		if(!preg_match("/\.zip$/", $uploadfile)){ //judge whether it is a zip file
			echo $this->xmlmodel->returnXmlFactory('-1',"案例文件必须为ZIP格式");
			die();
		}
		if(move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile) != TRUE){
			echo $this->xmlmodel->returnXmlFactory('-1',"移动案例文件失败");
			die();
		}
		$this->pbcls_zip->unzip($uploadfile);	//need check function
		$pbcofile = dirname($uploadfile) . "/";
		$foldername =  basename($uploadfile, ".zip");
		$pbcofile .=  trim($foldername). "/pbco.xml";
		if($this->pbcoparse->xmlTest($pbcofile,$msg) != TRUE){
			echo $msg;
			die();
		}
		if($this->casemodel->addCase($uploadfile, $msg1) != TRUE){
			echo $msg1;
			die();
		}
		echo $this->xmlmodel->returnXmlFactory('1',"上传成功");
		
		


	}
	
	function action()
	{
		if($this->session->userdata('user_gid') !== '0')
			redirect('/home/notLogin');
		if(isset($_REQUEST['do']))
		{
			
			$id = $_REQUEST['id'];
			if($_REQUEST['do'] == 'changecasetype')
			{
				$this->changeCasetype($id);
			}
				
			elseif($_REQUEST['do'] == 'changestatus')
			{
				$this->changeStatus($id);
			}
				
			elseif($_REQUEST['do'] == 'delete')
			{
				$this->casemodel->deleteCase($id);
			}
			redirect('admin/caseadmin')	;						
		}
		if($_POST)
		{
	   		$ids = preg_split('/\,/', $_POST['checkboxs']);
	   		if($_POST['operation'])
	   		{
	   			if($_POST['operation'] == 'active')
	   			{
	   				foreach ($ids as $key => $value);
	   				$this->casemodel->activeCase($value);
	   			}
	   			elseif($_POST['operation'] == 'deactive')
	   			{
	   				foreach($ids as $key => $value)
					$this->casemodel->deactiveCase($value);
	   			}
	   			elseif($_POST['operation'] == 'delete')
	   			{
	   				foreach($ids as $key => $value)
					$this->casemodel->deleteCase($value);	
	   			}
	   			redirect('admin/caseadmin');
	   		}
	   		
		    if($_POST['sort'])
	   		{
	   			if($_POST['sort'] == 'casename')
	   			{
	   				$data['records']=$this->casemodel->getAllcasebycasename();
	   				$this->load->view('admin/case_list',$data);
	   			}
	   			elseif($_POST['sort'] == 'author')
	   			{	   				
	   				$data['records']=$this->casemodel->getAllcasebyauthor();
	   				$this->load->view('admin/case_list',$data);
	   			}
	   			elseif($_POST['sort'] == 'uploadtime')
	   			{
	   				$data['records']=$this->casemodel->getAllcasebyuploadtime();
	   				$this->load->view('admin/case_list',$data);
	   			}
	   		    elseif($_POST['sort'] == 'casetype')
	   			{
	   				$data['records']=$this->casemodel->getAllcasebycasetype();
	   				$this->load->view('admin/case_list',$data);	
	   			}
	   		    elseif($_POST['sort'] == 'status')
	   			{
	   				$data['records']=$this->casemodel->getAllcasebystatus();
	   				$this->load->view('admin/case_list',$data);
	   			}
	   		}
		
		}
		//redirect('admin/caseadmin/caselist');

	}

	private function changeCasetype($id)
	{
		$record = $this->casemodel->getCaseById($id);
		$record['casetype'] = !$record['casetype'];
		$this->casemodel->updateCase($record);
	}
	
	private function changeStatus($id)
	{
		$record = $this->casemodel->getCaseById($id);
		$record['status'] = !$record['status'];
		$this->casemodel->updateCase($record);
	}
	function changStatus($id)
	{
		
		$record = $this->casemodel->getCaseById($id);
		$record['status'] = !$record['status'];
		$this->casemodel->updateCase($record);
		redirect('admin/inactivecase');
		
	}
	

}

?>