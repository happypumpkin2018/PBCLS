<?php
class Usermodel extends Model
{
	
	function Usermodel() 
	{
		parent::Model();
	}
	
// ------------------------------------------------------------------------

/**
 * Get Userid
 *
 * get userid by username
 *
 * @access	public
 * @param	string	    username
 * @return	int
 */
	function getUserid($username)
	{
		$this->db->where('username', $username);
		$result_array = $this->db->get('users')->row_array();
		if(!$result_array)
			return FALSE;
		return $result_array['uid'];
	}

// ------------------------------------------------------------------------

/**
 * Get All User By Uid
 * get all users sorted by uid
 * @access	public
 * return array
 */	
	function getAlluserbyuid()
	{
		$this->db->order_by("uid", "asc"); 
		$query = $this->db->get('users');
		return $query->result_array();
	}
	
// ------------------------------------------------------------------------	

/**
 * Get All User By Uid
 * get all users sorted by uid
 * @access	public
 * return array
 */	
	function getAlluserbyusername()
	{
		$this->db->order_by("username", "asc"); 
		$query = $this->db->get('users');
		return $query->result_array();
	}
	
// ------------------------------------------------------------------------	

/**
 * Get All User By Uid
 * get all users sorted by uid
 * @access	public
 * return array
 */	
	function getAlluserbyemail()
	{
		$this->db->order_by("email", "asc"); 
		$query = $this->db->get('users');
		return $query->result_array();
	}
	
// ------------------------------------------------------------------------	

/**
 * Get All User By Uid
 * get all users sorted by uid
 * @access	public
 * return array
 */	
	function getAlluserbyregtime()
	{
		$this->db->order_by("registertime", "asc"); 
		$query = $this->db->get('users');
		return $query->result_array();
	}
	
// ------------------------------------------------------------------------	
/**
 * Get All User By Uid
 * get all users sorted by uid
 * @access	public
 * return array
 */	
	function getAlluserbyusertype()
	{
		$this->db->order_by("groupid", "asc"); 
		$query = $this->db->get('users');
		return $query->result_array();
	}
	
// ------------------------------------------------------------------------	
/**
 * Get All User By Uid
 * get all users sorted by uid
 * @access	public
 * return array
 */	
	function getAlluserbystatus()
	{
		$this->db->order_by("status", "asc"); 
		$query = $this->db->get('users');
		return $query->result_array();
	}
	
// ------------------------------------------------------------------------		
	
/**
 * Get Username
 *
 * get username by userid
 *
 * @access	public
 * @param	int	    userid
 * @return	string
 */
	function getUsername($userid)
	{
		$this->db->where('uid',$userid);
		$result_array = $this->db->get('users')->row_array();
		return $result_array['username'];
	}
	
// ------------------------------------------------------------------------

/**
 * Authen
 *
 * Authen username and password
 *
 * @access	public
 * @param	string	    username
 * @param   string      password
 * @return	rool
 */
	function authen($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('users');
		if($query->num_rows() > 0 )
			return TRUE;
		else
			return FALSE;
	}
	
// ------------------------------------------------------------------------

/**
 * Get Groupid
 *
 * get groupid of a user
 *
 * @access	public
 * @param	string	    username
 * @return	int
 */
	function getGroupid($username)
	{
		$this->db->where('username', $username);
		$result_array = $this->db->get('users')->row_array();
		return $result_array['groupid'];
	}
	
// ------------------------------------------------------------------------

/**
 * Get Username By id
 *
 *
 * @access	public
 * @param	int	    userid
 * @return	string
 */
	function getUsernameByUserid($userid)
	{
		$this->db->where('uid', $userid);
		$result_array = $this->db->get('users')->row_array();
		return $result_array['username'];
	}
	
// ------------------------------------------------------------------------

/**
 * Get User
 *
 * get a record of a user
 *
 * @access	public
 * @param	int	    uid of a user
 * @return	array
 */
	function getUser($userid)
	{
		$this->db->where('uid', $userid);
		return $this->db->get('users')->row_array();
	}
	
// ------------------------------------------------------------------------
/**
 * Get User By Name
 * 
 * get a record of a uer
 * @access	public
 * @param	int	    uid of a user
 * @return	array
 * @wmc 2009/11/17
 */
	
	function getUserbyname($name)
	{
		$this->db->where('username', $name);	
		$result = $this->db->get('users');
		if($result->num_rows() > 0)
		{
		    return $result->row_array();
		}
		  
		else return null;

	}	
	
// ------------------------------------------------------------------------
/**
 * Check Username
 *
 * check whether the username has existed
 *
 * @access	public
 * @param	string	    
 * @return	bool
 */
	function checkUsername($username)
	{
		$this->db->where('username', $username);
		if($this->db->get('users')->num_rows() > 0)
			return TRUE;
		else 
			return FALSE;
	}
	
// ------------------------------------------------------------------------
/**
 * Check checkUserEmail
 *
 * check whether the username has existed
 *
 * @access	public
 * @param	string	    
 * @return	bool
 */
	function checkUserEmail($userEmail){
		$this->db->where('email', $userEmail);
		if($this->db->get('users')->num_rows() > 0)
			return TRUE;
		else 
			return FALSE;
	}
	
// ------------------------------------------------------------------------

/**
 * Check Userid
 *
 * check whether the userid has existed
 *
 * @access	public
 * @param	string	    
 * @return	bool
 */
	function checkUserid($userid)
	{
		$this->db->where('uid', $userid);
		if($this->db->get('users')->num_rows() > 0)
			return TRUE;
		else 
			return FALSE;
	}
	
// ------------------------------------------------------------------------

/**
 * Get All Users
 *
 * get all records of users
 *
 * @access	public
 * @param		    
 * @return	array
 */
	function getAllUsers()
	{
		return $this->db->get('users')->result_array();
	}

// ------------------------------------------------------------------------

/**
 * Get All Inactive users
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/13
 */	
	function getAllInactiveUsers()
	{
		$this->db->where('status','1');
		return $this->db->get('users')->result_array();
	}
	
//  ------------------------------------------------------------------------	

/**
 * Get Ban Email
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/23
 */	
	function getBanemail()
	{
		return $this->db->get('ban_emaillist')->result_array();
	}
	
//  ------------------------------------------------------------------------

/**
 * Get Ban Email Info
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/25
 */	
	function getBanemailinfo($email)
	{
		$this->db->where('email',$email);
		return $this->db->get('ban_emaillist')->result_array();		
	}
	
//  ------------------------------------------------------------------------
/**
 * Get Delete Ban Email
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/25
 */	
	function deleteBanemail($email)
	{
		$this->db->where('email',$email);
		$this->db->delete('ban_emaillist');
		if($this->db->affected_rows() > 0)
			return TRUE;
		else
			return FALSE;
			
	}
	
//  ------------------------------------------------------------------------

/**
 * Add Ban Email
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/24
 */	
	function addBanemail($user)
	{
		$data = $user;
		$this->db->insert('ban_emaillist',$data);
		if($this->db->affected_rows() > 0)
			return TRUE;
		else
			return FALSE;
	}
	
//  ------------------------------------------------------------------------

/**
 * Get Ban Email
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/23
 */	
	function getBanip()
	{
		return $this->db->get('ban_iplist')->result_array();
	}
	
//  ------------------------------------------------------------------------

/**
 * Get Ban IP Info
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/25
 */	
	function getBanipinfo($ip)
	{
		$this->db->where('ip',$ip);
		return $this->db->get('ban_iplist')->result_array();		
	}
	
//  ------------------------------------------------------------------------
/**
 * Get Delete Ban Email
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/25
 */	
	function deleteBanip($ip)
	{
		$this->db->where('ip',$ip);
		$this->db->delete('ban_iplist');
		if($this->db->affected_rows() > 0)
			return TRUE;
		else
			return FALSE;
			
	}
	
//  ------------------------------------------------------------------------

/**
 * Add Ban IP
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/25
 */	
	function addBanip($user)
	{
		$data = $user;
		$this->db->insert('ban_iplist',$data);
		if($this->db->affected_rows() > 0)
			return TRUE;
		else
			return FALSE;
	}
	
//  ------------------------------------------------------------------------
	
/**
 * Get Ban Regname
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/25
 */	
	function getBanregname()
	{
		return $this->db->get('ban_regnamelist')->result_array();
	}
	
//  ------------------------------------------------------------------------

/**
 * Get Ban Regname Info
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/25
 */	
	function getBanregnameinfo($name)
	{
		$this->db->where('name',$name);
		return $this->db->get('ban_regnamelist')->result_array();		
	}
	
//  ------------------------------------------------------------------------
/**
 * Delete Ban Regname
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/25
 */	
	function deleteBanregname($name)
	{
		$this->db->where('name',$name);
		$this->db->delete('ban_regnamelist');
		if($this->db->affected_rows() > 0)
			return TRUE;
		else
			return FALSE;
			
	}
	
//  ------------------------------------------------------------------------

/**
 * Add Ban Regname
 * @access	public
 * @param		    
 * @return	array
 * writer wmc
 * @date 2009/11/25
 */	
	function addBanregname($user)
	{
		$data = $user;
		$this->db->insert('ban_regnamelist',$data);
		if($this->db->affected_rows() > 0)
			return TRUE;
		else
			return FALSE;
	}
	
//  ------------------------------------------------------------------------	
/**
 * Get Total
 * 
 * get total user number
 * 
 * @access public
 * @param
 * @return integer
 */
function get_total(){
       $query = $this->db->get('users');
       $total = $query->num_rows($query); 
       return $total;
     }
//  -----------------------------------------------------------------------
/**
 * Get Per Data
 * 
 * get per data / page
 * @param $per
 * @param $offset
 * @return array
 */
     
     function get_per_data($per=1,$offset=0){
        $query = $this->db->limit($per,$offset)->get('users');
        return $query;
     }
//  ------------------------------------------------------------------------
/**
 * Add User
 *
 *
 * @access	public
 * @param	array	   $uers('name','password','email') 
 * @return	bool
 */
	function addUser($user, $groupid = 2)
	{
		$result = $this->db->query("SELECT NOW()")->row_array();
		$user['registertime'] = $result['NOW()'];
		$user['groupid'] =  $groupid;
		$this->db->insert('users', $user);
		if($this->db->affected_rows() > 0)
			return TRUE;
		else
			return FALSE;
	}
	
// ------------------------------------------------------------------------
/**
 * Delete User
 *
 *
 * @access	public
 * @param	int	     uid of the user
 * @return	bool
 */	

	function deleteUser($userid)
	{
		$this->db->where('uid', $userid);
		$this->db->delete('users');
		if($this->db->affected_rows() > 0)
			return TRUE;
		else
			return FALSE;
	}
	
// ------------------------------------------------------------------------
/**
 * Active User
 *
 *
 * @access	public
 * @param	int	     uid of the user
 * @return	bool
 */	
	function activeUser($userid)
	{
		$this->db->set('status', 0);
		$this->db->where('uid', $userid);
		$this->db->update('users');
	}
	
// ------------------------------------------------------------------------
/**
 * Deactive User
 *
 *
 * @access	public
 * @param	int	     uid of the user
 * @return	bool
 */	
	function deactiveUser($userid)
	{
		$this->db->set('status', 1);
		$this->db->where('uid', $userid);
		$this->db->update('users');
	}
// ------------------------------------------------------------------------
/**
 * Update User
 *
 *
 * @access	public
 * @param	int	     uid of the user
 * @param	array	 
 * @return	bool
 */	
	function updateUser($user)
	{
		$userid = $user['uid'];
		$this->db->set($user);
		$this->db->where('uid', $userid);
		$this->db->update('users');
		if($this->db->affected_rows() > 0)
			return TRUE;
		else
			return FALSE;
	}	
	
// ------------------------------------------------------------------------
/**
 * Change Password
 *
 *
 * @access	public
 * @param	int	     uid of the user
 * @param   string   new password 
 * @return	bool
 */	
	function changePassword($userid, $newpassword)
	{
		$this->db->set('password', $newpassword);
		$this->db->where('uid', $userid);
		$this->db->update('users');
		if($this->db->affected_rows() > 0)
			return TRUE;
		else
			return FALSE;
	}

// ------------------------------------------------------------------------

	/**
	 * Get Applying Instances
	 *
	 *
	 * @access	public  
	 * @param	int     uid of user   	
	 * @return	array
	 */		
	private function getApplyingInstances($userid)
	{		
		$sql = "SELECT cases.casename AS casename,
					   instances.name AS instancename,
					   roles.rolename AS rolename,
					   applications.applytime AS applytime
				FROM cases,instances,roles,applications
				WHERE $userid = applications.userid AND
					  applications.ischecked = 0 AND
					  applications.instanceid = instances.uid AND
				      applications.roleid = roles.uid AND
				      instances.caseid = cases.uid";
				      
		$data = $this->db->query($sql)->result_array();
		
		$sql = "SELECT cases.name AS casename,
					   instances.name AS instancename,
					   indicators.applytime AS applytime
				FROM cases,instances,indicators
				WHERE $userid = indicators.userid AND
					  indicators.instanceid = instances.uid AND 
				      instances.caseid = cases.uid";
		$result_array = $this->db->query($sql)->result_array();
		foreach($result_array as $row)
		{
			$row['rolename'] = 'Indicator';
			$data[] = $row;
		}
		
		$sql = "SELECT cases.casename AS casename,
					   instances.name AS instancename,
					   observers.applytime AS applytime
				FROM cases,instances,observers
				WHERE $userid = observers.userid AND
					  observers.instanceid = instances.uid AND 
				      instances.caseid = cases.uid";
		$result_array = $this->db->query($sql)->result_array();
		foreach($result_array as $row)
		{
			$row['rolename'] = 'Observer';
			$data[] = $row;
		}
		
		$applytime = array();
		foreach($data as $key => $value)
		{
			$casename[$key] = $row['casename'];
			$instancename[$key] = $row['instancename'];
			$rolename[$key] = $row['rolename'];
			$applytime[$key] = $row['applytime'];
		}
		array_multisort($applytime,SORT_ASC,$data);
		return $data;

	}
	
// ------------------------------------------------------------------------

	/**
	 * Get Playing Instances
	 *
	 *
	 * @access	public  
	 * @param	int     uid of user   	
	 * @return	array
	 */		
	function getPlayingInstances($userid)
	{
		$sql = "SELECT DISTINCT 
					instances.uid AS instanceid, instances.creatorid, instances.status, roles.role, cases.casename, instances.instancename, instances.creationtime, instances.progress
				FROM cases, instances, roles, instance_role
				WHERE instance_role.actorid = $userid
				AND instance_role.instanceid = instances.uid
				AND instances.caseid = cases.uid
				AND instance_role.actorid = roles.roleid
				AND cases.uid = roles.caseid";
		$result_array = $this->db->query($sql)->result_array();
		return $result_array;
	}

// ------------------------------------------------------------------------

	/**
	 * Get Indicating Instances
	 *
	 *
	 * @access	public  
	 * @param	int     uid of user   	
	 * @return	array
	 */	
	function getIndicatingInstances($userid)
	{
		$sql = "SELECT DISTINCT
					   instances.uid AS instanceid,
					   instances.creatorid,
					   instances.status,
	                   cases.casename,
					   instances.instancename,
					   instances.creationtime,
					   instances.progress,
					   user_instance.accepttime
				FROM cases,instances,roles,user_instance
				WHERE $userid = user_instance.userid AND
					  user_instance.isvalid = 1 AND
					  user_instance.rolegroup = 3 AND
				      user_instance.instanceid = instances.uid AND
				      instances.caseid = cases.uid";
		$result_array = $this->db->query($sql)->result_array();
		return $result_array;
	}
	
// ------------------------------------------------------------------------

	/**
	 * Get Observering Instances
	 *
	 *
	 * @access	public  
	 * @param	int     uid of user   	
	 * @return	array
	 */		
	function getObserveringInstances($userid)
	{
		$sql = "SELECT DISTINCT 
				  	   instances.uid AS instanceid,
					   instances.creatorid,
					   instances.status,
					   cases.casename,
					   instances.instancename,
					   instances.creationtime,
					   instances.progress,
					   user_instance.accepttime
				FROM cases,instances,roles,user_instance
				WHERE $userid = user_instance.userid AND
					  user_instance.isvalid = 1 AND
					  user_instance.rolegroup = 4 AND
				      user_instance.instanceid = instances.uid AND
				      instances.caseid = cases.uid";
		$result_array = $this->db->query($sql)->result_array();
		return $result_array;
	}
	
	
// ------------------------------------------------------------------------

/**
* User  Complexsearch
*
* @access	public  
* @param	int     uid of user   	
* @return	array
*/			
	function comsearch($array) 
	{
		if(empty($array['regtime']))
		{
			if($array['regtimecomp'] == 'less')
			{
				$array['regtime']=date("Y-m-d h:m:s");
			}
			else 
				$array['regtime']="0";
		}
			
		if(empty($array['caseno']))
		{
			if($array['casenocomp'] == 'less')
				$array['caseno']="99999999999";
			else 
				$array['caseno']="0";
		}
		
		if($array['casenocomp'] == 'less')
		{
			$array['casenocomp'] = '<';
		}
		
		if($array['regtimecomp'] == 'less')
		{
			$array['regtimecomp'] = '<';
		}
	
		$sql ="select * from users
			   where username like '%{$array['username']}'
			   and status='{$array['userstatus']}'
			   and groupid='{$array['usertype']}'
			   and registertime {$array['regtimecomp']} '{$array['regtime']}'
			   and finisheds {$array['casenocomp']} '{$array['caseno']}'
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
* PruneUser
*
* @access	public  
* @param	array      	
* @return	array
*/			
	function pruneUser($array) 
	{
		if(empty($array['regtime']))
		{
			if($array['regtimecomp'] == 'less')
			{
				$array['regtime']=date("Y-m-d h:m:s");
			}
			else 
				   $array['regtime']="0";
		}
		if(empty($array['caseno']))
		{
			if($array['casenocomp'] == 'less')
				   $array['caseno']="99999999999";
			   else 
			    $array['caseno']="0";
		}
		if($array['casenocomp'] == 'less')
			$array['casenocomp'] = '<';
	
			
		if($array['regtimecomp'] == 'less')
		{
			$array['regtimecomp'] = '<';
		}
		
		if($array['operation'] == 'deactive')  //处理operation为deactive的操作
		{
			$sql = "update users set status=1";
		}
		else 
		{
			$sql = "delete users";
		}
		$sql .= " where username like '%{$array['username']}'
			   and email like '%{$array['email']}'
			   and registertime {$array['regtimecomp']} '{$array['regtime']}'
			   and finisheds {$array['casenocomp']} '{$array['caseno']}'";
//		echo $sql;
//		die();
		$this->db->query($sql);		

								
	}
	
// --------------------------------------------------------------------------------
	
	
	
}