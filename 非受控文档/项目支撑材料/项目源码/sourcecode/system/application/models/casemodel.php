<?php

//Test by Xupengfey at 2009-10-2 14:40
class Casemodel extends Model
{
	private $case_url = "./system/application/uploads";
	
	function Casemodel()
	{
		parent::Model();
		$this->load->library('criticalpath');
	}
	
// ------------------------------------------------------------------------

/**
 * Get All Cases
 * 
 * get records of all cases
 *
 * @access	public
 * @param   int       status of the case,TRUE means opened
 * @return	array
 */	
	
	function getAllCases()
	{
		return $this->db->get('cases')->result_array();
	}
	
// ------------------------------------------------------------------------

/**
 * Get All Cases By Casename
 * get all case sorted by casename
 * @access	public
 * @return array
 */	
	
	function getAllcasebycasename()
	{
		$this->db->order_by("casename", "asc"); 
		$query = $this->db->get('cases');
		return $query->result_array();
	}
	
	
// -------------------------------------------------------------------------

/**
 * Get All Cases By Author
 * get all cases sorted by author
 * @access	public
 * @return array
 */	
	
	function getAllcasebyauthor()
	{
		$this->db->order_by("author", "asc"); 
		$query = $this->db->get('cases');
		return $query->result_array();
	}

// -------------------------------------------------------------------------

/**
 * Function getCaseFolder($caseid)
 * 功能：获取Case所在文件夹的名称
 * 参数：
 * 	$caseid:需要查询的case所属caseid
 * @access	public
 * @return
 * 	if query succeed, return result, else return FALSE
 * 
 * 
 * Added by cendy at 2010-01-09
 */	
	function getCaseFolder($caseid){
		$this->db->where('uid',$caseid);
		$result = $this->db->get('cases')->row_array();
		if($result)
			return $result['foldername'];
		else return FALSE;
	}
	
	
// -------------------------------------------------------------------------

/**
 * Get All Cases By Author
 * get all cases sorted by uploadtime
 * @access	public
 * @return array
 */	
	
	function getAllcasebyuploadtime()
	{
		$this->db->order_by("uploadtime", "asc"); 
		$query = $this->db->get('cases');
		return $query->result_array();
	}
	
	
// -------------------------------------------------------------------------

/**
 * Get All Cases By Author
 * get all cases sorted by casetype
 * @access	public
 * @return array
 */	
	
	function getAllcasebycasetype()
	{
		$this->db->order_by("casetype", "asc"); 
		$query = $this->db->get('cases');
		return $query->result_array();
	}
	
	
// -------------------------------------------------------------------------
/**
 * Get All Cases By Author
 * get all cases sorted by status
 * @access	public
 * @return array
 */	
	
	function getAllcasebystatus()
	{
		$this->db->order_by("status", "asc"); 
		$query = $this->db->get('cases');
		return $query->result_array();
	}
	
	
// -------------------------------------------------------------------------	
	
	
/**
 * Get All Open Cases
 * 
 *
 * @access	public
 * @param   int       
 * @return	array
 */	
	
	function getAllOpenCases()
	{
		$this->db->where('status', FALSE);
		return $this->db->get('cases')->result_array();
	}

// ------------------------------------------------------------------------

/**
 * Get All Inactive Cases
 * 
 * @access	public
 * @param   int       
 * @return	array
 */
	function getAllInactiveCases()
	{
		$this->db->where('status',TRUE);
		return $this->db->get('cases')->result_array();
	}
	
// ------------------------------------------------------------------------	
/**
 * Get Case By Id
 * 
 * get one record of case
 *
 * @access	public
 * @param	int	    uid of case
 * @return	array
 */	

	function getCaseById($caseid)
	{
		$this->db->where('uid', $caseid);
		return $this->db->get('cases')->row_array();
	}
	
// ------------------------------------------------------------------------

/**
 * Get Case
 * 
 * get one record of case
 *
 * @access	public
 * @param	int	    name of case
 * @return	array
 */	

	function getCaseByName($casename)
	{
		$this->db->where('casename', $casename);
		if($this->db->get('cases')->num_rows() > 0)
		{
			return $this->db->get('cases')->row_array();
		}
		else return false;
	}
	
	function getCaseNameById($caseid)
	{
		$this->db->where('uid', $caseid);
		$result = $this->db->get('cases')->row_array();
		if($result)
			return $result['casename'];
	}
	function getCaseidByName($casename)
	{
		$this->db->where('casename', $casename);
		$result = $this->db->get('cases')->row_array();
		if($result)
			return $result['uid'];
	}

// ------------------------------------------------------------------------

/**
 * Get Tasks By Caseid
 * 
 * get all tasks of case
 *
 * @access	public
 * @param	int	    uid of case
 * @return	array
 */	

	function getTasksByCaseid($caseid)
	{
		$this->db->where('caseid', $caseid);
		return $this->db->get('tasks')->result_array();
	}
// ------------------------------------------------------------------------

/**
 * Get Dependencies By Caseid
 *
 * @access	public
 * @param	int	    uid of case
 * @return	array
 */	

//	function getDependenciesByCaseid($caseid)
//	{
//		$this->db->where('caseid', $caseid);
//		return $this->db->get('dependencies')->result_array();
//	}	
	function getSuccessors($caseid,$taskid)
	{
		$this->db->select('successorid');
		$this->db->where('caseid', $caseid);
		$this->db->where('predecessorid',$taskid);
		return $this->db->get('dependencies')->result_array();
	}
// ------------------------------------------------------------------------

/**
 * Get Role Name
 *
 * @access	public
 * @param	int	    uid of case
 * @param   int     roleid
 * @return	string
 */		
	function getRoleName($caseid, $roleid)
	{
		$this->db->where('caseid', $caseid);
		$this->db->where('roleid', $roleid);
		$result = $this->db->get('roles')->row_array();
		
		if(!empty($result))
			return $result['rolename'];
		return -1;
	}
	
	
	function getRoleidByName($caseid, $rolename)
	{
		$this->db->where('caseid', $caseid);
		$this->db->where('rolename', $rolename);
		$result = $this->db->get('roles')->row_array();
		if($result)
			return $result['roleid'];
		 return -1;
	}
// ------------------------------------------------------------------------

/**
 * Get Roleid In Task
 *
 * @access	public
 * @param	int	    uid of case
 * @param   int     taskid
 * @return	string
 */		
	function getRoleidInTask($caseid,$taskid)
	{
		$this->db->select('resourceid');
		$this->db->where('caseid', $caseid);
		$this->db->where('taskid', $taskid);
		return $this->db->get('resources')->result_array();
		
	}
	
	function getTaskName($caseid, $taskid)
	{
		$this->db->where('caseid', $caseid);
		$this->db->where('taskid', $taskid);
		$result =  $this->db->get('tasks')->row_array();
		if($result)
			return $result['taskname'];
		return -1;
	}
// ------------------------------------------------------------------------

/**
 * Check Casename
 *
 * check where have existed casename in the table
 *
 * @access	public
 * @param	string	    name of case
 * @return	rool
 */
	function checkCasename($casename)
	{
		$this->db->where('casename', $casename);
		if($this->db->get('cases')->num_rows() > 0 )
			return TRUE;
		else 
			return FALSE;	
	}
	
// ------------------------------------------------------------------------

/**
 * Add Case
 *
 * Add a case into database from the zip file
 *
 * @access	public
 * @param	string	    path of xml file about a case
 * @return	rool
 */
	function addCase($file, &$msg)
	{
		$this->load->library('pbcls_zip');
		$this->load->library('pbcoparse');	
		$this->load->library('uploadedfile');	
		$this->load->library('criticalpath');

		$pbcofile = dirname($file) . "/";
		$foldername =  basename($file, ".zip");
		$pbcofile .=  trim($foldername). "/pbco.xml";
		
/*		$this->pbcls_zip->unzip($file);
		$pbcofile = dirname($file) . "/";
		$foldername =  basename($file, ".zip");
		$pbcofile .=  $foldername . "/pbco.xml";
		if(!$this->pbcoparse->xmlTest($pbcofile,$msg)){
			return FALSE;
		}*/
		
		$case = $this->pbcoparse->parse($pbcofile);
		$this->criticalpath->critical($case['tasks']);
		
		
		if($this->checkCasename($case['casename']))
		{
			$msg = $this->xmlmodel->returnXmlFactory('-1',"上传案例已存在");
			return FALSE;
		}
	
		//The transatction of addcase starts
		$this->db->trans_start();
		
		//Insert into the cases 
		$caseinfo = array(
			'casename' => $case['casename'],
			'description' => $case['description'],
			'version' => $case['version'],
		 	'author' => $case['author'],
			'email' => $case['email'],
			'creationtime' => $case['creationdate'],
			'maxplayer' => count($case['resources']),
			'foldername' => $foldername
		);
		$result_array = $this->db->query("SELECT NOW()")->row_array();
		$caseinfo['uploadtime'] = $result_array['NOW()'];
		unset($result_array);
//		print_r($caseinfo);
		$this->db->set($caseinfo);	
		$this->db->insert('cases');	

		//Insert caseino into the roles table
		$caseid = $this->db->insert_id();
		foreach($case['resources'] as $key => $value)
		{
			$roleinfo = array(
				'roleid' => $value['roleid'],
				'role' => $value['role'],
				'rolename' => $value['name'],
				'caseid' => $caseid	
			);
			$this->db->set($roleinfo);
			$this->db->insert('roles');
		}
		
		//Insert into the tasks, relations, dependencies, inputs, outputs
		foreach($case['tasks'] as $row)
		{
			//Insert into the tasks 
			$taskinfo = array(
				'caseid' => $caseid,
			    'taskid' => $row['taskid'],
				'taskname' => $row['taskname'],
			 	'description' => isset($row['description']) ? $row['description'] : '',
				'isparent' => isset($row['isparent']) ? $row['isparent'] : '',
				'ismilestone' => isset($row['ismilestone']) ? $row['ismilestone'] : '',
				'iscritical' => $row['iscritical'],
				'duration' => isset($row['duration']) ? $row['duration'] : '',
				'earlystart' => $row['earlystart'],
				'earlyfinish' => $row['earlyfinish'],
				'latestart' => $row['latestart'],
				'latefinish' => $row['latefinish'],
			);
			$this->db->set($taskinfo);
			$this->db->insert('tasks');	
			
			//Insert into relations
			if(isset($row['parentid']) && $row['parentid'] != '')
			{
				$relation = array(
					'caseid' => $caseid,
					'childid' => $row['taskid'],
					'parentid' => $row['parentid']
				);
				$this->db->set($relation);
				$this->db->insert('relations');
			}
			
			//Insert into resources
			if(isset($row['resourceids']) && $row['resourceids'] != '')
			{
				$resids_array = preg_split('/\,/', $row['resourceids']);
				$resource = array(
					'caseid' => $caseid,
					'taskid' => $row['taskid']
				);
				
				foreach ($resids_array as $resource['resourceid'])
				{
					$this->db->set($resource);
					$this->db->insert('resources');
				}
			}
			
			//Insert into dependencies
			if(isset($row['predecessorids']) && $row['predecessorids'] != '')
			{
				$ids_array = preg_split('/\,/', $row['predecessorids']);
				$dependency = array(
					'caseid' => $caseid,
					'successorid' => $row['taskid']
				);
				foreach($ids_array as $dependency['predecessorid'])
				{
					$this->db->set($dependency);
					$this->db->insert('dependencies');
				}
			}
			
			//Insert into inputs
			if(isset($row['inputs']) && $row['inputs'] != '')
			{
				$inputs = preg_split('/\,/', $row['inputs']);
				$input = array(
					'caseid' => $caseid,
					'taskid' => $row['taskid']
				);
				foreach($inputs as $input['input'])
				{
					$this->db->set($input);
					$this->db->insert('inputs');
				}
			}
			
			//Insert into outputs
			if(isset($row['outputs']) && $row['outputs'] != '')
			{
				$outputs = preg_split('/\,/', $row['outputs']);
				$output = array(
					'caseid' => $caseid,
					'taskid' => $row['taskid']
				);
				foreach($outputs as $output['output'])
				{
					$this->db->set($output);
					$this->db->insert('outputs');
				}
			}
		}	

		$this->db->trans_complete();	
		
		if($this->uploadedfile->createFolder_case($caseid) == FALSE){
			$this->deleteCase($caseid);
			$msg = $this->xmlmodel->returnXmlFactory('-1',"上传失败");
			return FALSE;
		}
		else if(mysql_error() == '')
			return TRUE;
		else{
			$this->deleteCase($caseid);
			$msg = $this->xmlmodel->returnXmlFactory('-1',"上传失败");
			return FALSE;	
		}
	}
	

// ------------------------------------------------------------------------

/**
 * Delete Case
 *
 *
 * @access	public
 * @param	int	    uid of case
 * @return	bool
 */	
	function deleteCase($caseid)
	{
		$this->db->trans_start();
		//Delete from inputs
		$this->db->trans_start();
		$this->db->where('caseid', $caseid);
		$this->db->delete('inputs');
		
		//Delete from outputs
		$this->db->trans_start();
		$this->db->where('caseid', $caseid);
		$this->db->delete('outputs');
		
		//Delete from dependencies
		$this->db->trans_start();
		$this->db->where('caseid', $caseid);
		$this->db->delete('dependencies');
		
		//Delete from relations
		$this->db->trans_start();
		$this->db->where('caseid', $caseid);
		$this->db->delete('relations');
		
		//Delete from tasks
		$this->db->trans_start();
		$this->db->where('caseid', $caseid);
		$this->db->delete('tasks');
		
		//Delete from roles
		$this->db->where('caseid', $caseid);
		$this->db->delete('roles');
		
		//Delete from cases
		$this->db->where('uid', $caseid);
		$this->db->delete('cases');
		
		$this->db->trans_complete();	
		
		if(mysql_error() == '')
			return TRUE;
		else 
			return FALSE;
	}
	
// ------------------------------------------------------------------------

/**
 * Active Case
 *
 *
 * @access	public
 * @param	int	    uid of case
 * @return	bool
 */	
	function activeCase($caseid)
	{
		$this->db->set('status', 0);
		$this->db->where('uid', $caseid);
		$this->db->update('cases');
		if(mysql_error() == '')
			return TRUE;
		else 
			return FALSE;
		
	}
	
// ------------------------------------------------------------------------

/**
 * Deactive Case
 *
 *
 * @access	public
 * @param	int	    uid of case
 * @return	
 */	
	function deactiveCase($caseid)
	{
		$this->db->set('status', 1);
		$this->db->where('uid', $caseid);
		$this->db->update('cases');
		if(mysql_error() == '')
			return TRUE;
		else 
			return FALSE;
	}

// ------------------------------------------------------------------------

/**
 * Update Case
 *
 *
 * @access	public
 * @param	int	    uid of case
 * @return	bool
 */	
	function updateCase($data)
	{
		$caseid = $data['uid'];
		$this->db->set($data);
		$this->db->where('uid', $caseid);
		$this->db->update('cases');
		if(mysql_error() == '')
			return TRUE;
		else 
			return FALSE;
	}
	
	
	
	
// ------------------------------------------------------------------------
/**
 * function getCaseURL()
 * 功能：返回上传的案例所在的文件夹地址
 * @access	public        	
 * @return	string
 */
	function getCaseURL(){
		return $this->case_url;
	}
	
	
	

	
	
// ------------------------------------------------------------------------

/**
 * Get Instances By Caseid
 *
 *
 * @access	public
 * @param	int	    uid of caseid
 * @param   bool         
 * @return	array
 */
	function getInstancesByCaseid($caseid, $isfinished = 0)
	{
		$sql = "SELECT DISTINCT instances.uid, `caseid` , `instancename` ,
		                        `username` AS creator, instances.status, 
		                        `creationtime` , `finishtime` , `progress` , isfinished
						FROM instances, users
						WHERE users.uid = instances.creatorid
						AND instances.caseid = $caseid
						AND instances.isfinished = $isfinished";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
// ------------------------------------------------------------------------

/**
 * Get Instances By Casename
 *
 *
 * @access	public
 * @param	int	    uid of caseid
 * @param   bool         
 * @return	array
 */
	function getInstancesByCasename($casename, $isfinished = 0)
	{
		$this->db->where('casename', $casename);
		$this->db->where('isfinished', $isfinished);
		$query = $this->db->get('instances');
		return $query->result_array();
	}
	

	
// ------------------------------------------------------------------------

/**
 * Check Instancename
 *
 * check where have existed instancename in the table
 *
 * @access	public
 * @param   int         uid of case
 * @param	string	    name of instancese
 * @return	rool
 */
	function checkInstancename($caseid, $instancename)
	{
		$this->db->where('caseid', $caseid);
		$this->db->where('instancename', $instancename);
		if($this->db->get('instances')->num_rows() > 0 )
			return TRUE;
		else 
			return FALSE;	
	}
	
// ------------------------------------------------------------------------

/**
 * Add Instance
 *
 *
 * @access	public
 * @param	array   data of instance	
 * @return	
 * 
 * $instance组成：['instancename','caseid','creatorid']
 * instancename:新建的instance的名称
 * caseid:新建的instance所使用的caseid
 * creatorid:创建者的id
 */	
	function addInstance($instance)
	{
		$result = $this->db->query("SELECT NOW()")->row_array();
		$instance['creationtime'] = $result['NOW()'];
		$this->db->trans_start();
		$this->db->set($instance);
		$this->db->insert('instances');
		
		$instanceid = $this->db->insert_id();
		

		//Initilizing all tasks and roles of the instance
		if (!$this->initializeInstance($instanceid))
			return FALSE;

		//Update the value of startedinstances int the case table
		//startedinstances = startedinstances + 1
		$caseid = $this->getCaseid($instanceid);

		$this->db->query("
		UPDATE	cases
		SET instances = instances + 1
		WHERE uid = $caseid");
		
		$this->db->trans_complete();
		if(mysql_error() == '')
			return $instanceid;
		else 
			return -1;
	}
	
// ------------------------------------------------------------------------

/**
 * Delete Instance
 *
 *
 * @access	public
 * @param	int    uid of instance	
 * @return	bool
 */	
	function deleteInstance($instanceid)
	{
		$this->db->trans_start();
		//delete instance_task
		$this->db->where('instanceid', $instanceid);
		$this->db->delete('instance_task');
		//delete instance_role
		$this->db->where('instanceid', $instanceid);
		$this->db->delete('instance_role');
		//delete user_instance
		$this->db->where('instanceid', $instanceid);
		$this->db->delete('user_instance');
		//delete applications
		$this->db->where('instanceid', $instanceid);
		$this->db->delete('applications');
		//delete comments
		$this->db->where('instanceid', $instanceid);
		$this->db->delete('comments');
		//delete instances
		$this->db->where('uid', $instanceid);
		$this->db->delete('instances');
		
		$this->db->trans_complete();
		
		if(mysql_error() == '')
			return TRUE;
		else 
			return FALSE; 
		
	}

// ------------------------------------------------------------------------

	/**
	 * Initialize Instances
	 *
	 *
	 * @access	private  
	 * @param	int     uid of instance   	
	 * @return	bool
	 */	
	private function initializeInstance($instanceid)
	{
		
		$caseid = $this->getCaseid($instanceid);
			
		$this->db->where('instanceid', $instanceid);
		$query = $this->db->get('instance_task');
		if($query->num_rows() == 0)
		{
			//Get taskids from the tasks table
			$this->db->where('caseid', $caseid);
			$result = $this->db->get('tasks')->result_array();
		
			//Insert instance_task
			$taskinfo['instanceid'] = $instanceid;
			foreach($result as $key => $value)
			{
				$taskinfo['taskid'] = $value['taskid'];
				$this->db->set($taskinfo);
				$this->db->insert('instance_task');
			}
		}
		
		$this->db->where('instanceid', $instanceid);
		$query = $this->db->get('instance_role');
		if($query->num_rows() == 0)
		{
			//Get roleids from the roles table
			$this->db->where('caseid', $caseid);
			$result = $this->db->get('roles')->result_array();
	
			//Insert instance_role
			$roleinfo['instanceid'] = $instanceid;
			foreach($result as $key => $value)
			{
				$roleinfo['roleid'] = $value['roleid'];
				$this->db->set($roleinfo);
				$this->db->insert('instance_role');
			}
		}
		
		
		
		//create file system for submit
		
		return 	TRUE;
			
	}
	
	function getCaseid($instanceid)
	{
		$this->db->where('uid', $instanceid);
		$result = $this->db->get('instances')->row_array();
		if(!$result)
			return FALSE;
		return  $result['caseid'];
	}
// ----------------------------------------------------------------------------	
/**
* Comsearch
*
* @access	public  
* @param	int     uid of user   	
* @return	array
*/			
	function comsearch($array) 
	{
		if(empty($array['uploadtime']))
		{
			if($array['uploadtimecomp'] == 'less')
			{
				$array['uploadtime']=date("Y-m-d h:m:s");
			}
			else 
				$array['uploadtime']="0";
		}
			
		if(empty($array['useno']))
		{
			if($array['usenocomp'] == 'less')
				$array['useno']="99999999999";
			else 
				$array['useno']="0";
		}
		
		if($array['usenocomp'] == 'less')
		{
			$array['usenocomp'] = '<';
		}
		
		if($array['uploadtimecomp'] == 'less')
		{
			$array['uploadtimecomp'] = '<';
		}
	
		$sql ="select * from cases
			   where casename like '%{$array['casename']}'
			   and status='{$array['status']}'
			   and uploader like '%{$array['uploader']}'
			   and author like '%{$array['author']}'
			   and casetype='{$array['casetype']}'
			   and uploadtime {$array['uploadtimecomp']} '{$array['uploadtime']}'
			   and instances {$array['usenocomp']} '{$array['useno']}'
			   order by {$array['sortkey']} {$array['sort']}";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0 )
        {
        	return $query->result_array();
        }
		else return false;
								
	}
	
// --------------------------------------------------------------------------------	
/**
* PruneCase
*
* @access	public  
* @param	array      	
* @return	array
*/			
	function pruneCase($array) 
	{
		if(empty($array['uploadtime']))
		{
			if($array['uploadtimecomp'] == 'less')
			{
				$array['uploadtime']=date("Y-m-d h:m:s");
			}
			else 
				   $array['uploadtime']="0";
		}
		if(empty($array['useno']))
		{
			if($array['usenocomp'] == 'less')
				   $array['useno']="99999999999";
			   else 
			    $array['useno']="0";
		}
		if($array['usenocomp'] == 'less')
			$array['usenocomp'] = '<';
	
			
		if($array['uploadtimecomp'] == 'less')
		{
			$array['uploadtimecomp'] = '<';
		}
		
		if($array['operation'] == 'deactive')  //处理operation为deactive的操作
		{
			$sql = "update cases set status=1";
		}
		else 
		{
			$sql = "delete cases";
		}
		$sql .= " where casename like '%{$array['casename']}'
			   and uploader like '%{$array['uploader']}'
			   and author like '%{$array['author']}'
			   and status='{$array['status']}'
			   and casetype='{$array['casetype']}'
			   and instances {$array['usenocomp']} '{$array['useno']}'
			   and uploadtime {$array['uploadtimecomp']} '{$array['uploadtime']}'";
//		echo $sql;
//		die();
		$this->db->query($sql);								
	}
}