<?php 

class Evaluationmodel extends Model
{
	function Evaluationmodel()
	{
		parent::Model();
	}
	
	
/**
 * Get System Sscore
 * 
 * 取得系统积分
 * @access public
 * @param uid
 * @return score
 */	
	
	function getSystemScore($user_id)
	{
		$userid = $user_id;
		$this->db->select('score');
		$this->db->where('uid',$userid);
		$result_array = $this->db->get('users')->row_array();
	    if(!$result_array)
		{
			return False;
		}
		return $result_array['score'];
	}
	
/**
 * Get Online Time
 * get online time in pbcls system
 * @access public
 * @param uid
 * @return onlinetime
 */	
	
	function getSystemOnlineTime($user_id)
	{
		$userid = $user_id ;
		$this->db->select('onlinetime');
		$this->db->where('uid',$userid);
		$result_array = $this->db->get('users')->row_array();
	    if(!$result_array)
		{
			return False;
		}
		return $result_array['onlinetime'];
	}
	
	
/**
 * Get Grade
 * 
 * get grade in pbcls system
 * 
 * @access public
 * @param uid
 * @return grade
 */	
	
	function getSystemGrade($user_id)
	{
		$userid = $user_id ;
		$this->db->select('finisheds');
		$this->db->where('uid',$userid);
		$result_array = $this->db->get('users')->row_array();
		if(!$result_array)
		{
			return False;
		}
		$finisheds = $result_array['finisheds'];
		$grade = "0";
		if($finisheds == 0)
		{
			$grade = 1;
			return $grade;
		}
		elseif ($finisheds>=1 && $finisheds<=5) 
		{
			$grade = 2;
			return $grade;
		}
		elseif ($finisheds>=6 && $finisheds<=15)
		{
			$grade = 3;
			return $grade;
		}
		elseif ($finisheds>=16 && $finisheds<=30)
		{
			$grade = 4;
			return $grade;
		}
		elseif ($finisheds>=31 && $finisheds<=50)
		{
			$grade = 5;
			return $grade;
		}
		elseif ($finisheds>=51) 
		{
			$grade = 6;
			return $grade;
		}
	}
}
















































?>