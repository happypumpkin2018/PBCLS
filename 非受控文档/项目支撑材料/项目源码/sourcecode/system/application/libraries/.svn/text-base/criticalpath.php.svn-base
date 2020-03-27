<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Criticalpath
{
	function Criticalpath(){}
	
	//找出入度为0的任务，返回它的taskid，找不到则返回-1
	private function findFirstTask(&$tasks)
	{
		foreach($tasks as $key => $value)
		{
			if($value['indegree'] == 0 && $value['previsited'] == 0)
			{
				$tasks[$key]['previsited'] = 1;
				return $value['taskid'];
			}
		}
		return -1;
	}
			
	//找出出度为0的任务，返回它的taskid，找不到则返回-1
	private function findLastTask(&$tasks)
	{
		foreach($tasks as $key => $value)
		{
			if($value['outdegree'] == 0 && $value['postvisited'] == 0)
			{
				$tasks[$key]['postvisited'] = 1;
				return $value['taskid'];
			}
		}
		return -1;
	}
	
	//简单项目的关键路径算法,不考虑父子关系，满足拓扑图要求
	function critical(&$tasks)
	{	
		//初始化，把所有任务的入度和出度设为0
		//把previsited、postvisited置0
		foreach($tasks as $key => $value)
		{
			$tasks[$key]['indegree'] = 	$tasks[$key]['outdegree'] = 0; 	
			$tasks[$key]['previsited'] = $tasks[$key]['postvisited'] = 0; 	
		}
				
		//把所有的依赖关系存入二维数组，并计算每个任务的入度和出度
		foreach($tasks as $row)
		{
			if(isset($row['predecessorids']) && $row['predecessorids'])//如果当前任务有前驱
			{
				$curentid = $row['taskid']; 
				$arr = preg_split('/\,/', $row['predecessorids']);
				foreach($arr as $preid)
				{
					$dependence[$preid][$curentid] = 1;
					$tasks[$curentid]['indegree']++;
					$tasks[$preid]['outdegree']++;
				}
			}
		}
//		print_r($tasks);
				
		//计算任务的最早开始时间和最早完成时间
		while(1)
		{
			$taskid = $this->findFirstTask($tasks);
			if($taskid == -1)
				break;
			//找出所有前驱最早完成时间的最大值作为当前任务的最早开始时间,
			//如果没有前驱，则最早开始时间为0
			foreach($dependence as $key => $value)
				if(isset($value[$taskid]))
					$tmp[] = $tasks[$key]['earlyfinish'];
			if(empty($tmp)) //如果数组为空，表示该任务没有前驱
				$tasks[$taskid]['earlystart'] = 0;
			else 
			{
				$tasks[$taskid]['earlystart'] = max($tmp);
				unset($tmp);
			}
			$tasks[$taskid]['earlyfinish'] = $tasks[$taskid]['earlystart'] + $tasks[$taskid]['duration'];
					
			//所有后继入度-1
			if(isset($dependence[$taskid]))//如果有后继
				foreach($dependence[$taskid] as  $key => $value)
				{
					if($value == 1)
						$tasks[$key]['indegree']--;
				}
		}
		//找出所有任务最早完成时间的最大值
		$longesttime = -1;
		foreach($tasks as $row)
			$longesttime = max($longesttime,$row['earlyfinish']);
				
		//计算任务的最迟开始时间和最迟完成时间
		while(1)
		{
			$taskid = $this->findLastTask($tasks);
			if($taskid == -1)
				break;
	
			//找出所有后继最迟开始时间的最小值作为当前任务的最迟完成时间,
			//如果没有后继，则最迟完成时间为但前任务的最开完成时间
			if(isset($dependence[$taskid]))//如果有后继
				foreach($dependence[$taskid] as $key => $value)
					$tmp[] = $tasks[$key]['latestart'];
	
			if(empty($tmp)) //如果数组为空，表示该任务没有后继
				$tasks[$taskid]['latefinish'] = $longesttime;
			else 
			{
				$tasks[$taskid]['latefinish'] = min($tmp);
				unset($tmp);
			}
			$tasks[$taskid]['latestart'] = $tasks[$taskid]['latefinish'] - $tasks[$taskid]['duration']; 
					
			//所有前驱出度-1
			foreach($dependence as $key => $value)
			{
				if(isset($value[$taskid]))
					$tasks[$key]['outdegree']--;
			}
		}
		
		//标志关键任务
		foreach($tasks as $key => $value)
		{
			if($value['earlystart'] == $value['latestart'])
				$tasks[$key]['iscritical'] = 1;
			else 
				$tasks[$key]['iscritical'] = 0;
		}
	}
}
