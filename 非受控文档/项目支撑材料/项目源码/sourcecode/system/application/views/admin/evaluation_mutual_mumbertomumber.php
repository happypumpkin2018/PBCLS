<!--
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>�ҵİ���</title>
<link rel="stylesheet" type="text/css" href="/system/application/views/admin/main.css" />
<link rel="stylesheet" type="text/css" href="/system/application/views/admin/admin.css" />
<script type="text/javascript" src="/system/application/views/admin/main.js">
</script>
</head>
<body>
<?php
$msg = $this->session->userdata('msg');
if($msg)
{
	echo "<script language=\"JavaScript\">alert(\"$msg\");</script>"; 
	$this->session->set_userdata('msg',''); 	
}
?> 
<div class="container">
    <div class="header">
      <div class="logo">
      <div class="per_info" align="center">
        	<p><?php echo $this->session->userdata('user_name').",��ӭ������"?></p>
            <a href="http://10.214.29.18/pbcls/">��������</a>
            <a href="<?php echo site_url("home/quit/")?>">�˳�</a>        </div>
      </div>
      <ul class="nav">
        <li><a href="<?php echo site_url("admin/homeadmin")?>"><strong>��̨��ҳ</strong></a></li>
        <li><a href="<?php echo site_url("admin/caseadmin")?>"><strong>�������</strong></a></li>
        <li><a href="<?php echo site_url("admin/useradmin")?>"><strong>�û�����</strong></a></li>
        <li><a href="<?php echo site_url("admin/sysadmin")?>"><strong>ϵͳ����</strong></a></li>
      </ul>
    </div>
-->
<?php $this->load->view('admin/admin_header'); ?>
    <div class="maincontent">
        <div class="sidebar">
          <div class="sidebox">
            <p1><strong>�������</strong></p1>
            <hr />
               <table align="left" height="" width="100">
            <tr>
            <td height="20" width="100" align="left"><a href="<?php echo site_url("admin/caseadmin/casesearch")?>"><p>���Ұ���</p></a></td>
            </tr>
            <tr>
            <td height="20" width="100" align="left"><a href="<?php echo site_url("admin/caseadmin")?>"><p>�����б�</p></a></td>
            </tr>
            <tr>
            <td height="20" width="100" align="left"><a href="<?php echo site_url("admin/caseadmin/inactivecase")?>"><p>����İ���</p></a>            </td></tr>
                         <tr>
            <td height="20" width="100" align="left"><a href="<?php echo site_url("admin/caseadmin/uploadcase")?>"><p>�����ϴ�</p></a>           </td>
            </tr>
            <tr>
            <td height="20" width="100" align="left"><a href="<?php echo site_url("admin/caseadmin/prunecase")?>"><p>�ü�����</p></a>            </td>
            </tr>
            </table>           
         </div>     
        </div>


        <div class="mainbody">
          <br />
          <h3>�����б�</h3>
          <p>�����г�������ϵͳ�����еİ��������ɾ����.</p>
          <br />
          
           <table style="font-size:12px" border="1" width="400">
            <tr><td colspan="4" align="center">����</td></tr>
              <tr><td rowspan="10" width="80">����ԱA</td>
              <td width="100">ѧϰ̬��</td><td width="30">20��</td><td><input type="text" name="" value="" /></td></tr>
              <tr><td width="100">רҵ����</td><td width="30">20��</td><td><input type="text" name="" value="" /></td></tr>
              <tr><td width="100">��ͨ����</td><td width="30">20��</td><td><input type="text" name="" value="" /></td></tr>
              <tr><td width="100">Э������</td><td width="30">20��</td><td><input type="text" name="" value="" /></td></tr>
              <tr><td width="100">���Լ��İ���</td><td width="30">20��</td><td><input type="text" name="" value="" /></td></tr>
              <tr><td width="100">�ۺ�����</td><td width="30">����</td><td><input type="text" name="" value="" /></td></tr>             
            </table>
          
            <table style="font-size:12px" border="1" width="400">
            <tr><td colspan="4" align="center">����</td></tr>
              <tr><td rowspan="10" width="80">����ԱB</td>
              <td width="100">ѧϰ̬��</td><td width="30">20��</td><td><input type="text" name="" value="" /></td></tr>
              <tr><td width="100">רҵ����</td><td width="30">20��</td><td><input type="text" name="" value="" /></td></tr>
              <tr><td width="100">��ͨ����</td><td width="30">20��</td><td><input type="text" name="" value="" /></td></tr>
              <tr><td width="100">Э������</td><td width="30">20��</td><td><input type="text" name="" value="" /></td></tr>
              <tr><td width="100">���Լ��İ���</td><td width="30">20��</td><td><input type="text" name="" value="" /></td></tr>
              <tr><td width="100">�ۺ�����</td><td width="30">����</td><td><input type="text" name="" value="" /></td></tr>             
            </table>
            
             <br />
             
             <table style="font-size:12px" border="1" width="400">
              <tr><td colspan="4" align="center">����</td></tr>
              <tr><td rowspan="9" width="80">����Ŀ����</td>
               <td width="100">ѧϰ̬��</td><td width="30">10��</td><td><input type="text" name="" value="" /></td>
              </tr>
              <tr><td width="100">��֯����</td><td width="30">16��</td><td><input type="text" name="" value="" /></td></tr>  
              <tr><td width="100">Э������</td><td width="30">16��</td><td><input type="text" name="" value="" /></td></tr>
              <tr><td width="100">��ͨ����</td><td width="30">16��</td><td><input type="text" name="" value="" /></td></tr>  
              <tr><td width="100">��������</td><td width="30">16��</td><td><input type="text" name="" value="" /></td></tr> 
              <tr><td width="100">רҵ����</td><td width="30">16��</td><td><input type="text" name="" value="" /></td></tr> 
              <tr><td width="100">���Լ��İ���</td><td width="30">10��</td><td><input type="text" name="" value="" /></td></tr> 
              <tr><td width="100">�ۺ�����</td><td width="30">����</td><td><input type="text" name="" value="" /></td></tr>                      
            </table>
          

        </div>
    </div>
        
    
    
<?php $this->load->view('admin/footer'); ?>