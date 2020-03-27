<?php
Class Sysmodel extends Model
{
	private $mysql_path;
	private $mysql;
	private $mysqldump;
    private $backup_path;
    private $bakupfile;
    private $username = "root";
    private $passwd = "admin";
    private $dbname = "pbcls";
    
	function Sysmodel()
	{
		parent::Model();
		$this->mysql_path = "d:\\xampp\\mysql";
		$this->mysql = $this->mysql_path."\\bin\\mysql";
		$this->mysqldump = $this->mysql_path."\\bin\\mysqldump";
		$this->backup_path = getcwd()."\\system\\store";
	}
	
	//return 0 means exec backup db success!
	function DBBackup($filename)
	{
//		$username =$db['default']['username'];
//		$passwd = $db['default']['password'];
//		$dbname = $db['default']['database'];
		$username = "root";
		$passwd = "admin";
		$dbname = "pbcls";
        $backupfile = $this->backup_path."\\".$filename;
		$cmd = "$this->mysqldump -u$username -p$passwd $dbname > $backupfile";
		exec($cmd,$output,$rc);
		return $rc;
	}
	
	function DBRestore($backfile) //ruturn 0 means restore is success.
	{
		$username = "root";
		$passwd = "admin";
		$dbname = "pbcls";			
		$cmd = 	"$this->mysql -u$username -p$passwd $dbname < $backfile";
		exec($cmd,$output,$rc);
		return $rc;
	}
	

}