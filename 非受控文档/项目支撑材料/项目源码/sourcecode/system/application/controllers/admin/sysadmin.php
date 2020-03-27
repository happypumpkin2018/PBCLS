<?php
Class Sysadmin extends Controller
{
	function Sysadmin()
	{
		parent::Controller();
    	$this->load->model('sysmodel'); 
    	$this->load->helper('date');
    	$this->load->library('zip');
    	$this->load->helper('file');
    	$this->load->helper('download');
	}
	
	function index()
	{
		if($this->session->userdata('user_gid')!=='0')
		{
			redirect('admin/login');
		}
		$data['user_gid']=$this->session->userdata('user_gid');
		$this->load->view('admin/sys_list',$data);	
	}
	
function language_pack()
	{
	    if($this->session->userdata('user_gid')!=='0')
		{
			redirect('admin/login');
		}
		
		
		$this->load->helper('directory');  //目录辅助函数
		$map = directory_map('d:/xampp/htdocs/pbcls/system/language/',TRUE);
        if(empty($map))
          echo "empty";
        else 
          $data['result']=$map;
          $data['user_gid']=$this->session->userdata('user_gid');
		  $this->load->view('admin/language_pack',$data);
	}
	
	function admin_panel()
	{
	    if($this->session->userdata('user_gid')!=='0')
		{
			redirect('admin/login');
		}
		$data['user_gid']=$this->session->userdata('user_gid');
		$this->load->view('admin/admin_panel',$data);
	}
	
	function user_panel()
	{
	    if($this->session->userdata('user_gid')!=='0')
		{
			redirect('admin/login');
		}
		$data['user_gid']=$this->session->userdata('user_gid');
		$this->load->view('admin/user_panel',$data);
	}
	
	function admin_log()
	{
	    if($this->session->userdata('user_gid')!=='0')
		{
			redirect('admin/login');
		}
		$data['user_gid']=$this->session->userdata('user_gid');
		$this->load->view('admin/admin_log',$data);
	}
	
	function user_log()
	{
	    if($this->session->userdata('user_gid')!=='0')
		{
			redirect('admin/login');
		}
		$data['user_gid']=$this->session->userdata('user_gid');
		$this->load->view('admin/user_log',$data);
	}
	
	function error_log()
	{
	    if($this->session->userdata('user_gid')!=='0')
		{
			redirect('admin/login');
		}
		$data['user_gid']=$this->session->userdata('user_gid');
		$this->load->view('admin/error_log',$data);
	}
	
	function db_backup()
	{
	    if($this->session->userdata('user_gid')!=='0')
		{
			redirect('admin/login');
		}
		$data['user_gid']=$this->session->userdata('user_gid');
		$this->load->view('admin/db_backup',$data);
	}
	
	function db_restore()
	{
	    if($this->session->userdata('user_gid')!=='0')
		{
			redirect('admin/login');
		}
		$this->load->helper('file');  //文件辅助函数
		$data['result'] = get_dir_file_info("system/store/");
		$this->load->view('admin/db_restore',$data);
		
	}
/**
 * 功能：数据库备份
 * 参数：$operate(操作类型),mecheck(备份的数据文件类型);
 * @return unknown_type
 */	
	
    function dbbackup_action()
	{
		if($_POST)
		{
			$operate = $_POST['operate'];
			$mycheck = $_POST['mycheck'];  
			$this->db_backupOpType($mycheck,$operate);
			redirect("admin/sysadmin/db_backup");
		}		
	}
	
	private function db_backupOpType($type,$op)
	{
		$ym=date('Ym',time());                          //取得年月时间，做为contents目录下的年月目录名                     
	    $d=date('d',time());                            //取得具体的天数，做为年月目录下某天日志的名称的前一部分
	    $time=date('His',time());                       //取得分秒时，做为年月目录下某天日志的名称的后一部分
	    $name=$ym.$d.'-'.$time.".sql";                  //取得文件名
		switch($type){
			case 1:                                     //文件类型是Gzip格式的
				switch ($op)
				{
					case 1:                                        //备份并下载                       
						break;
					case 2:                                         //仅备份
						break;
					case 3:                                         //仅下载
						break;
				}				
				break;
			case 2:   
				$filename= $name.".zip";                           //文件类型是Zip格式的   
				$this->sysmodel->DBBackup($name);
                $file= "system/store/".$filename;
                $path = "system/store/".$name;
		        $this->zip->read_file($path);                     //读取文件的内容
				switch ($op)
				{
					case 1:                                        //备份并下载
                        $this->zip->archive($file);                //压缩成压缩文件
                        unlink($path);
                        $this->zip->download($filename);           //下载到桌面上						
						break;
					case 2:                                        //仅备份
                        $this->zip->archive($file);                //压缩成压缩文件
	                    unlink($path);	
						break;
					case 3:                                        //仅下载
                        unlink($path);
		                $this->zip->download($filename);           //下载到桌面上									
		                break;
				}	
				break;
			case 3:                                               //文件类型是Text格式的
				$path = "system/store/".$name;
				$this->sysmodel->DBBackup($name);
				switch ($op)
				{
					case 1:                                       //备份并下载
						$string = read_file($path);
						force_download($name, $string); 						
						break;
					case 2:                                      //仅备份
						break;
					case 3:                                      //仅下载
						$string = read_file($path);
						unlink($path);	
						force_download($name, $string);						
						break;
				}	
				break;
		}
	}
/**
 * 功能：压缩成Gzip格式
 * @param $file
 * @param $str
 * @return unknown_type
 */
	private function dogzip($file,$str)
	{
		$filename = $file;
		$string = $str;
		$zp   =   gzopen($filename,   "w9");    //打开一个文件，w9是最高压缩率，也可以是w1~8;
        gzwrite($zp,   $string);                //把数据流写入文件中
        gzclose($zp);                           //关闭文件
	}
	
/**
 * 数据库恢复界面的控制函数，实现数据库恢复和删除功能。
 * @return unknown_type
 */	
	function dbrestore_action()
	{
	    if($this->session->userdata('user_gid')!=='0')
		{
			redirect("admin/login");
		}		
		$name = $_POST['db'];                                      //取得要操作的备份数据库名称
		if($_POST['action'])
		{
			
			$action= $_POST['action'];
			if($action == 1)                                           //判断操作类型，“1”为恢复操作，“2”为删除操作
			{

				$preg1 = '/\.zip$/';                             //与ZIP格式匹配的备份文件
				$preg2 = '/\.sql$/';                             //与text格式匹配的备份文件
				if(preg_match($preg1,$name,$str1))              //如果恢复的是.zip格式的备份
				{
					$this->load->library('zip');
				    $filename="system/store/".$name;
				    if($this->exactZipDb($filename))
				    {
				    	$data['result'] = get_dir_file_info("system/store/temp");
					    foreach ($data['result'] as $row)
					    $sqlname="system/store/temp/".$row['name'];
					    if($this->dbRestorFunc($sqlname))
					    {
					    	if($this->deleDbFile($sqlname))
					    	{
					    		echo "<script>alert('Restoration zip successful!');location.href='javascript:history.back()';</script>";
					    	}
					    	else 
					    	{
					    		echo "<script>alert('Restoration zip successful but the tempfile exists!');location.href='javascript:history.back()';</script>";					 
					    	}
					    }
					    else 
					    {
					    	echo "<script>alert('Restoration zip False!');location.href='javascript:history.back()';</script>";
					    }
				    }
				    else 
				    {
				    	echo "<script>alert('Extraction False!');location.href='javascript:history.back()';</script>";
				    }
				}
				elseif(preg_match($preg2,$name,$str2))
				{
				    $filename="system/store/".$name;
				    if($this->dbRestorFunc($filename))
				    {
				    	echo "<script>alert('Restoration sql successful!');location.href='javascript:history.back()';</script>";				    	
				    }
				    else 
				    {
				    	echo "<script>alert('Restoration sql False!');location.href='javascript:history.back()';</script>";
				    }
				}             						
			}
			else //删除数据库备份
			{
				$filename="system/store/".$name;
				if($this->deleDbFile($filename))    //删除数据库备份
				{
					echo "<script>alert('Deleted successfully!');location.href='javascript:history.back()';</script>";
				}
				else 
				{
					echo "<script>alert('Deleted false!');location.href='javascript:history.back()';</script>";
				}
			}
			redirect('admin/sysadmin/db_restore');
		}
		else {
			echo "<script>alert('pls select database and operation !!');location.href='javascript:history.back()';</script>";

		}
		
	}

/**
 * 功能：对某个SQL文件进行数据库恢复操作
 * @param $file：			要恢复的数据库文件绝对地址
 * @return TRUE OR FALSE
 */
	private function dbRestorFunc($file)
	{
		$filename = $file;
		if(!$this->sysmodel->DBRestore($filename))
		{
			return 1;					 
		}
		else {
			return 0;
		}				
		
	}

/**功能：对某个数据备份的ZIP文件进行解压缩操作
 * @param $file				：ZIP格式的压缩文件
 * @return TRUE or FALSE
 */
	private function exactZipDb($file)
	{
		$filename = $file;
	    $zip = new ZipArchive;           
        $res = $zip->open($filename);      //打开zip文档
        if ($res === TRUE) 
        {
            $zip->extractTo("system/store/temp/");    //将zip文档解压到“system/store/temp”文件夹下
            $zip->close();
            return 1;

        }
        else {
            return 0;
        }
	}

/**
 * 功能：删除文件,用于删除解压缩后产生的临时文件
 * @param $file  删除文件的绝对地址
 * @return TRUE or FALSE;
 */	
	private function deleDbFile($file)
	{
		$name= $file;
		if(unlink($name))
		{
			return 1;
		}
		else return 0;
	}
}

