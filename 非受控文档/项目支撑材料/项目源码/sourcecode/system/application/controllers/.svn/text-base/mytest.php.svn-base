<?php

class Mytest extends Controller {

	function Mytest()
	{
		parent::Controller();
		$this->load->helper('file');
		$this->load->model('sysmodel');
		$this->load->model('evaluationmodel');
		
	}
	
	function index()
	{
//		echo "here";
//	    $backfile= "system/store/"."20100120-102136.sql";
////	    $data['result'] = get_dir_file_info("system/store/");
////	    print_r($data['result']);
//        $length = filesize($backfile);
////        echo $length;
//        $file= fopen($backfile,"r");
//        $contents = fread($file,$length);
//        fclose($file);
//        $lines = explode(";",$contents);
//        $count = 0;
//        foreach ($lines as $line)
//        {
//        	$tmp = trim($line);
//        	if($tmp != ''){
//	        	$sql = $tmp.';';
///*	        	echo $sql;
//	        	echo "<br/><br/><br/>";
//	        	$sql = '';
//        		*/
//	        	if($this->db->query($sql))
//	        	{
//	        		$count++;
//	        		echo "$count:$sql query OK<br/>";
//	        	}else{
//	        		echo "$count:$sql query error<br/>";
//	        	}
//        	}
//    	    
//        }
//          $filename= "system/store/1.gz";        
//          $zp   =   gzopen($filename,   "w9");    //   open   file   for   writing   with   maximum   compression          
//          $s   =   "Only   a   test,   test!\n";              
//          gzwrite($zp,   $s);                     //   write   string   to   file 
//          gzclose($zp);                           //   close   file   
           
               
//            $data['result'] = get_dir_file_info("system/store/");
//            print_r($data['result']);

						
//		    $filenamepath= "system/store/".$filename;        
//                        $zp   =   gzopen($filenamepath,   "w9");    //   open   file   for   writing   with   maximum   compression          
//                        $string = read_file($path);             
//                        gzwrite($zp,   $sting);                     //   write   string   to   file 
//                        gzclose($zp);
//	    $filename = "system/store/20100121-081232.sql.gzip";
//	    $zip = new ZipArchive;           
//        $res = $zip->open($filename);      //打开zip文档
//        if ($res === TRUE) 
//        {
//            $zip->extractTo("system/store/temp/");    //将zip文档解压到“system/store/temp”文件夹下
//            $zip->close();
//            return 1;
//
//        }
//        else {
//            return 0;
//        }
          //   open   file   for   reading  
//  $filename = "system/store/20100121-081232.sql.gzip"; 
////  $num = filesize($filename);
////  echo $num;
//  $num= getcwd();
//  echo $num;
//  echo $this->db->db['default']['username'];
//    $result=$this->evaluationmodel->getsystemscore();
//    $result=$this->evaluationmodel->getonlinetime();
//    $result=$this->evaluationmodel->getgrade();
      $ym = 1264504000;
      $y = time();
      $yy =timespan($ym,$y);
      echo $yy;
//		echo $result;
//    print_r($result);
//    $data['user_gid']=$this->session->userdata('user_gid');
//    $this->load->view('admin/sys_list',$data);
		
  
//  print_r($result);
  

    
  //   read   3   char   
//  echo   gzread($zp,   3);   
    
  //   output   until   end   of   the   file   and   close   it.   
//  gzpassthru($zp);   
//  gzclose($zp);   
		


      
          
	}
	
/**
 * 功能：压缩一个文件
 */
	
	function zipfile()
	{
		$this->load->library('zip');       //引入ZIP类;
        $file= "system/store/20100120-102136.sql";
		$this->zip->read_file($file);       //读取一个已经存在的文档
//		$this->zip->download('my_backup.zip'); //下载到桌面上
        $this->zip->archive('system/store/my_backup.zip'); //将文档压缩在某个地址
	}
	
/**
 * 功能：备份功能
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
				$filename= $name.".gzip";
				switch ($op)
				{
					case 1:
						break;
					case 2:
						break;
					case 3:
						break;
				}				
				break;
			case 2:   
				$filename= $name.".zip";                //文件类型是Zip格式的   
				switch ($op)
				{
					case 1:
						$this->sysmodel->DBBackup();
						
						
						
						break;
					case 2:
						break;
					case 3:
						break;
				}	
				break;
			case 3:                            //文件类型是Text格式的
				switch ($op)
				{
					case 1:
						break;
					case 2:
						break;
					case 3:
						break;
				}	
				break;
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	
}
