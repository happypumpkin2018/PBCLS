<?php

class Test extends Controller {

	function Test()
	{

		parent::Controller();	
	}
    function showGantt(&$project)
	{
		require_once ("jpgraph/jpgraph.php");
		require_once ("jpgraph/jpgraph_gantt.php");
		 
		$graph = new GanttGraph();
		
		$title = $project['name'];
		$graph->title->Set($title);
		$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
		 
		// Setup some "very" nonstandard colors
		$graph->SetMarginColor('lightgreen@0.8');
		$graph->SetBox(true,'yellow:0.6',2);
		$graph->SetFrame(true,'darkgreen',4);
		$graph->scale->divider->SetColor('yellow:0.6');
		$graph->scale->dividerh->SetColor('yellow:0.6');
		 
		// Explicitely set the date range
		// (Autoscaling will of course also work)
//		$graph->SetDateRange('2001-11-06','2002-1-10');
		 
		// Display month and year scale with the gridlines
		$graph->ShowHeaders(GANTT_HMONTH | GANTT_HDAY | GANTT_HWEEK );
		$graph->scale->month->SetFont(FF_SIMSUN,FS_BOLD);
		$graph->scale->month->grid->SetColor('gray');
		$graph->scale->month->grid->Show(true);
		$graph->scale->week->SetFont(FF_SIMSUN,FS_BOLD);
		$graph->scale->week->grid->SetColor('gray');
		$graph->scale->week->grid->Show(true);
		$graph->scale->actinfo->SetColTitles(array('名称','耗时','开始日期','结束日期'),array(100));
		$graph->scale->actinfo->SetBackgroundColor('green:0.5@0.5');
		$graph->scale->actinfo->SetFont(FF_SIMSUN,FS_BOLD,10);
		$graph->scale->actinfo->vgrid->SetStyle('solid');
		$graph->scale->actinfo->vgrid->SetColor('gray');
//		 


		$tasks = $project['tasks'];
		$starttime = $project['starttime'];

		foreach ($tasks as $row)
		{
			$start = date("Y-m-d",($starttime+3600*24*$row['earlystart']));
			$finish = date("Y-m-d",($starttime+3600*24*$row['earlyfinish']));
			$duration = $row['duration'];
//			$titlestart = data("Y-m-d",(strtotime($startdate)+3600*24*$row['earlystart']));
//			$titlefinish = date("Y-m-d",(strtotime($startdate)+3600*24*$row['earlyfinish']));
			
			$bar = new GanttBar($row['taskid']-1, array($row['taskid'].' '.$row['taskname'],$duration,$start,$finish), $start, $finish);
			$bar->title->SetFont(FF_SIMSUN,FS_BOLD,10);
			$graph->Add($bar);
	
				$successors = $this->casemodel->getSuccessors($project['id'],$row['taskid']);

				if(!empty($successors))
					foreach($successors as $successor)
						$bar->SetConstrain($successor['successorid']-1,CONSTRAIN_ENDSTART);	

		}	
 
		// Output the chart
		$graph->Stroke();
		 		
	}
	function index()
	{
		
		$this->load->model('usermodel');
		$this->load->model('casemodel');
		$this->load->model('instancemodel');
		$this->load->model('messagemodel');
		$this->load->model('commentmodel');
		$this->load->model('bbsmodel');
		$this->load->library('zip');
		$this->load->library('pbcoparse');		
		$this->load->library('criticalpath');	
		$this->load->model('sysmodel');

//		$file = "system/application/cases/1/pbco.xml";
//		$project = $this->pbcoparse->parse($file);
////		print_r($project);
//		$this->criticalpath->critical($project['tasks']);
//		print_r($project);
//		$instanceid = 1;
//		$instance = $this->instancemodel->getInstanceByid($instanceid);
//		if(!empty($instance))
//		{
////				print_r($instance);
//				$project['id'] = $this->instancemodel->getCaseid($instanceid);
////				$case = $this->casemodel->getCaseById($project['id']);
//				$project['name'] = $instance['instancename'];
////				echo $instance['starttime'];
//				$project['starttime'] = strtotime($instance['starttime']);
////				echo $project['startdate'];
////				die();
//				$caseid = $instance['caseid'];
//				$project['tasks'] =  $this->casemodel->getTasksByCaseid($caseid);
////				$project['dependencies'] = $this->casemodel->getDependenciesByCaseid($caseid);
////				$this->gantt->showgantt($project);
////				print_r($project);
////				print_r($project['tasks']);
////				die();
//		}
//		$this->showGantt($project);
		
//	$file = "system/application/cases/testcase2.zip";
//	$zipfile = "system/application/cases/1.zip";
////	$case = $this->pbcoparse->parse($file   
////	$this->criticalpath->critical($case['tasks']);
//	$msg = 'hi';
//	$this->casemodel->addCase($zipfile,$msg);
//	$GLOBALS["a"] = 1;
//	echo $GLOBALS["a"]
//	$this->instancemodel->getSubmitsInTask(1,1); 
//	$i = $this->bbsmodel->getReplyNum(1);
//	print_r($this->sysmodel->DBBackup());	
//    echo $this->$db['default']['username']; 
//    echo date("Ymdhms");
//	echo 
//	echo $this->sysmodel['mysql'];
//        $backfile= "system/store/20100120-025651".".sql";
//        $file= fopen($backfile);
//        $lines = explode("\n",$file);
//        foreach ($lines as $line)
//        {
//    	    echo $line;
//        }
//    
//    if(!$this->sysmodel->DBRestore($backfile))
//    {
//    	echo 'successful';
//    }
//    else echo "false";
      $this->load->view('evaluation_phase');
	}


	function parser(){
		$this->load->library('pbcoparse');
		$path = "./system/application/uploads/simplecase/pbco.xml";
		$case = $this->pbcoparse->parse($path);
		print_r($case);	
	}

	
	function thistest($insId,$roleId){
		$this->load->model('instancemodel');
		echo $insId."<br>";
		echo $roleId."<br>";
		echo $this->session->userdata('user_id')."<br>";
		echo $this->instancemodel->isAppliedRoleid($insId,$roleId,$this->session->userdata('user_id'));
		die();
		if(!$this->instancemodel->isAppliedRoleid($insId,$roleId,$this->session->userdata('user_id'))){
			echo '未申请';
		}
		else echo '正在申请';
	}
	
	function upload(){
		
	}
	
	function subTest(){
		$uploaddir = './system/application/uploads/';
		$uploadfile = $uploaddir . basename($_FILES['myfile']['name']);
		if(move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)){
			echo $uploadfile;
		}
	}
}

?>