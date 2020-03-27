<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class uploadedfile
{
	//上传目录的服务器地址
	private $upload_url = "./system/application/uploadedfile";
	//目前能上传的文件类型后缀名
	private $file_type = array('doc','rar','docx','pdf','jpg');
/*
|--------------------------------------------------------------------------
| is_exist_?
|--------------------------------------------------------------------------
|
| 判断文件或者目录在uploaded目录下是否存在
|
|	@access	public
|	@param	id:case、instance、task、filename
|			$type:
|	@return TRUE or FALSE
|
*/	
	function is_exist_case($id){
		$name = "case_".$id;
		if(is_dir($this->upload_url.'/'.$name) == TRUE){
			return TRUE;
		}
		else{
			echo "无法打开存取目录"."case_".$id;
			return FALSE;
		}
		/*
		if($handle = opendir($this->upload_url)){
			while(FALSE!==($file=readdir($handle))){
				if(strcmp($file,$name) == '0'){
					closedir($handle);
					return TRUE;
				}
			}
			closedir($handle);
		}
		else{
			echo "无法打开存取目录"."case_".$id;
			return FALSE;
		}
		*/
		
	}
	
	function is_exist_instance($caseid,$insid){
		$name = "ins_".$insid;
		$path = $this->upload_url."/"."case_".$caseid;
		if(is_dir($path.'/'.$name) == TRUE){
			return TRUE;
		}
		else{
			echo "无法打开存取目录"."ins_".$insid;
			return FALSE;
		}
		/*
		if($handle = opendir($path)){
			while(false!==($file=readdir($handle))){
				if(strcmp($name,$file) == '0'){
					closedir($handle);
					return TRUE;
				}
				closedir($handle);
			}
		}
		else{
			echo "无法打开存取目录"."ins_".$insid;
			return FALSE;
		}
		*/
	}
	
	function is_exist_task($taskid,$insid,$caseid){
		$name = "task_".$taskid;
		$path = $this->upload_url."/"."case_".$caseid."/"."ins_".$insid;
		if(is_dir($path.'/'.$name) == TRUE){
			return TRUE;
		}
		else{
//			echo "无法打开存取目录:"."task_".$taskid;
			return FALSE;
		}
		/*
		if($handle = opendir($path)){
			while(false!==($file=readdir($handle))){
				if(strcmp($name,$file) == '0'){
					closedir($handle);
					return TRUE;
				}
				closedir($handle);
			}
		}
		else{
			echo "无法打开存取目录:"."task_".$taskid;
			return FALSE;
		}
		*/
	}
	function check_folder($case_id,$ins_id,$task_id){
		if($this->is_exist_case($case_id) == FALSE || $this->is_exist_instance($case_id,$ins_id) == FALSE
		 || $this->is_exist_task($task_id,$ins_id,$case_id) == FALSE){
			return FALSE;
		}
		return TRUE;
	}
	function is_exist_file($filename,$taskid,$insid){
		$this->load->model('instancemodel');
		$caseid = $this->instancemodel->getCaseid($insid);
		$name = $filename;
		$path = $upload_url."/".$caseid."/".$insid."/".$taskid.'/'.$name;
		return file_exists($path);		/*
		$handle = opendir($path);
		while($file=readdir($handle) != false){
			if(strcmp($name,$file) == '0'){
				closedir($handle);
				return TRUE;
			}
			closedir($handle);
			return FALSE;
		}
		*/
	}
/*
|--------------------------------------------------------------------------
| createFolder_?
|--------------------------------------------------------------------------
|
| 新建相应的目录或者文件
|
|	@access	public
|	@param	case_id、ins_id、task_id、filename
|			
|	@return TRUE or FALSE
|
|	注：需要在外部进行是否存在该folder，否则会发生错误
*/	
	function createFolder_case($case_id){
		$name = "case_".$case_id;
		$fullpath = $this->upload_url.'/'.$name;
		if(file_exists($this->upload_url.'/'.$name) && is_dir($this->upload_url.'/'.$name)){
			return true;
		}else{ 
			if(false == mkdir("$fullpath",0777)){
				$this->deleteFolder_case($case_id);
				return false;
			}
			return true;
		}
	}
	/*
			$this->load->model('casemodel');
			$tasks = $this->casemodel->getTasksByCaseid($case_id);
			foreach($tasks as $task){
				$task_name = "task_".$task['taskid'];
				if(false == $this->createFolder_task($task['taskid'],$ins_id,$case_id)){
					$this->deleteFolder_ins($ins_id,$case_id);
					return false;
				}
				*/
	function createFolder_ins($ins_id,$case_id){
		$name = "ins_".$ins_id;
		$case_name = "case_".$case_id;
		if(file_exists($this->upload_url.'/'.$case_name.'/'.$name) && is_dir($this->upload_url.'/'.$case_name.'/'.$name)){
			return true;
		}else{
			if(false == mkdir($this->upload_url.'/'.$case_name.'/'.$name,0777)){
				$this->deleteFolder_ins($ins_id,$case_id);
				return false;
			}
			return true;	
		}
		
	}
	
	private function createFolder_task($task_id,$ins_id,$case_id){
		$name = "task_".$task_id;
		$ins_name = "ins_".$ins_id;
		$case_name = "case_".$case_id;
		if(file_exists($this->upload_url.'/'.$case_name.'/'.$ins_name.'/'.$name) &&
		is_dir($this->upload_url.'/'.$case_name.'/'.$ins_name.'/'.$name)){
			return true;
		}
		else{
			if(false == mkdir($this->upload_url.'/'.$case_name.'/'.$ins_name.'/'.$name,0777)){
				$this->deleteFolder_task($task_id,$ins_id,$case_id);
				return false;
			}
			return true;
		}
	}
	
	private function deleteFolder_task($task_id,$ins_id,$case_id){
		if($this->is_exist_task($task_id,$ins_id,$case_id))
			return rmdir($this->upload_url.'/'.$case_name.'/'.$ins_name.'/'.$name);
		else return true;
	}
	
	function deleteFolder_ins($ins_id,$case_id){
		if($this->is_exist_instance($case_id,$ins_id)){
			$ins_name = "ins_".$ins_id;
			$case_name = "case_".$case_id;
			$dir = $this->upload_url.'/'.$case_name.'/'.$ins_name;
			if($handle = opendir($dir)){
				while(false !== ($file = readdir($handle))){
					if($file!='.' && $file !='..'){
						$fullpath = $dir.'/'.$file;
						if(is_dir($fullpath)){
							$task_id = explode('_',$file);
							if(false == $this->deleteFolder_task($task_id[1],$ins_id,$case_id)){
								return false;
							}
						}
					}
				}
				close($handle);
				return true;
			}
			else{
				echo "无法打开文件夹".$handle;
				return false;
			}
		}else{
			return true;
		}
	}
	
	function deleteFolder_case($case_id){
		if($this->is_exist_case($case_id)){
			$case_name = "case_".$case_id;
			$dir = $this->upload_url.'/'.$case_name;
			if($handle = opendir($dir)){
				while(false !== ($file = readdir($handle))){
					if($file !='.' && $file != '..'){
						$fullpath = $dir.'/'.$file;
						if(is_dir($fullpath)){
							$ins_id = explode('_',$file);
							if(false == $this->deleteFolder_ins($ins_id[1],$case_id)){
								return false;
							}
						}
					}
				}
				close($handle);
				return true;
			}	
			else{
				echo "无法打开文件夹".$handle;
				return false;
			}
		}
		else{
			return true;
		}
	}

	function fileext($file_name){
		return substr(strrchr($file_name,'.'),1);
	}
	
	function correctFile($file_name){
		if(!in_array(strtolower($this->fileext($file_name)),$this->file_type)){
			return FALSE;
		}
		return TRUE;
	}
/*
|--------------------------------------------------------------------------
| 函数filetype
|--------------------------------------------------------------------------
| 功能：
| 返回现在所能够接受的文件类型
*/	
	function filetype(){
		return implode(',',$this->file_type);
	}

/*
|--------------------------------------------------------------------------
| 函数random_name
|--------------------------------------------------------------------------
| 功能：
| 生成随机文件名，以保证文件名不重名
|
| @param $length:文件名的长度
*/	
	private function random_name($length){
		$hash = 'CR-';
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
		$max = strlen($chars) -1;
		mt_srand((double)microtime() * 1000000);
		for($i = 0; $i < $length; $i++)
        {
                $hash .= $chars[mt_rand(0, $max)];
        }
        return $hash;
		
	}
/*
|--------------------------------------------------------------------------
| 函数movefile
|--------------------------------------------------------------------------
| 功能：
| 将文件移动到$upload_url目录下的指定case,instantce,task下.
| @param 
|	ins_id：指定的instance的ID的文件夹
|	task_id：指定的task的ID的文件夹
|	tmp_path：文件原来存放处
|	file_name:文件名
|
| 返回：
|	文件新的路径和文件名
*/
	function movefile($case_id,$ins_id,$task_id,$tmp_path,$file_name){
		
		if($this->check_folder($case_id,$ins_id,$task_id) == FALSE){
			if(false == $this->createFolder_case($case_id))
				return '-1';
			if(false == $this->createFolder_ins($ins_id,$case_id))
				return '-1';
			if(false == $this->createFolder_task($task_id,$ins_id,$case_id))
				return '-1';
		}
		$new_path = $this->upload_url.'/'."case_".$case_id.'/'."ins_".$ins_id.'/'."task_".$task_id.'/';
		do{
			$new_name = $this->random_name('20').'.'.$this->fileext($file_name);
		}while(file_exists($new_path.$new_name));
		if(move_uploaded_file($tmp_path,$new_path.$new_name) == TRUE){
			return $new_path.$new_name;
		}
		else{
			return '-1';
		}
		
	}
}