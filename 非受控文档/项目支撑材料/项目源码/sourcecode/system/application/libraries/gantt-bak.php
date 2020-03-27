<?php
//if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gantt
{
	function Gantt(){
//		$this->load->model('casemodel');
	}
	
	function showGantt(&$project)
	{
//		$this->load->model('casemodel');
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
//		$graph->scale->year->grid->SetColor('gray');
//		$graph->scale->year->grid->Show(true);
		 
		 
		//Setup spanning title
//		$graph->scale->tableTitle->Set( 'Phase 1' );
//		$graph->scale->tableTitle->SetFont( FF_ARIAL , FS_NORMAL , 16 );
//		$graph->scale->SetTableTitleBackground( 'darkgreen@0.6' );
//		$graph->scale->tableTitle->Show( true );
//		 
		// Setup activity info
		 
		// For the titles we also add a minimum width of 100 pixels for the Task name column
		$graph->scale->actinfo->SetColTitles(array('名称','耗时','开始日期','结束日期'),array(100));
		$graph->scale->actinfo->SetBackgroundColor('green:0.5@0.5');
		$graph->scale->actinfo->SetFont(FF_SIMSUN,FS_BOLD,10);
		$graph->scale->actinfo->vgrid->SetStyle('solid');
		$graph->scale->actinfo->vgrid->SetColor('gray');
//		 
		// Data for  activities

		$tasks = $project['tasks'];
		$starttime = $project['starttime'];

		foreach ($tasks as $row)
		{
			$start = date("Y-m-d",($starttime+3600*24*$row['earlystart']));
			$finish = date("Y-m-d",($starttime+3600*24*$row['earlyfinish']));
			$duration = $row['duration'];
			
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
}