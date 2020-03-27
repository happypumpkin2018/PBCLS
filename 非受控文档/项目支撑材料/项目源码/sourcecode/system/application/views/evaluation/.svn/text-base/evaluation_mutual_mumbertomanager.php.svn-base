<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="/system/application/views/game.css" />
<link rel="stylesheet" type="text/css" href="/system/application/views/main.css" />
<link rel="stylesheet" type="text/css" href="/system/application/views/message.css" />
<link rel="stylesheet" type="text/css" href="/system/application/views/css/bbs.css" />

<script type="text/javascript" src="/system/application/views/admin/main.js">
</script>

</head>

<body>

<?php 

	$msg = $this->session->flashdata('msg');
	if($msg)
		echo "<script language=\"JavaScript\">alert(\"$msg\");</script>"; 

?>
<div class="container">
    <div class="header">
      <div class="logo">
      <div class="per_info" align="center">
        	<p><?php echo $this->session->userdata('user_name')	;?>，欢迎回来！</p>
            <p>积分：<?php echo $this->session->userdata('score');  ?>分 | 等级：<?php               
			switch($this->session->userdata('grade'))			
            {
				case 1: echo "新手上路";break;
				case 2: echo "初学乍练";break;
				case 3: echo "略有小成";break;
				case 4: echo "渐入佳境";break;
				case 5: echo "炉火纯青";break;
				case 6: echo "登峰造极";break;
			}
			?>    |   
            在线时间：<?php echo $this->session->userdata('onlinetime');?>
            </p>
            <a href="http://10.214.29.18/pbcls/">关于我们</a>
            <a href=<?php echo site_url('home/quit/')?>>退出</a>
        </div>
      </div>
      <ul class="nav">
        <li><a href=<?php echo site_url("home/index")?>><strong>首 页</strong></a></li>
        <li><a href=<?php echo site_url("cc/index")?>><strong>案 例</strong></a></li>
        <li><a href=<?php echo site_url("ins/index")?>><strong>实 例</strong></a></li>
        <li><a href=<?php echo site_url("per/index")?>><strong>个人空间</strong></a></li>
      </ul>
    </div>
    <div class="maincontent">
   		<div class="sidebar">
        	<?php echo img('system/image/u25.jpg');?>
            <ul class="sidebar_nav">
                <li><a href=#><strong>我的评价</strong></a></li>
                <li><a href=<?php echo site_url("evaluation/selfevaluation") ?>>自评</a></li>
                <li><a href=<?php echo site_url("evaluation/selfevaluation")?>>互评</a></li>
                <li><a href=<?php echo site_url("evaluation/selfevaluation")?>>老师评价</a></li>
            </ul>
   	</div>

        <div class="mainbody">
			<div class="game_nav">
   	    PBCLS >> 任务详情 >> 评价 >> 互评</div>
            <p>在这里您可以对您项目项目经理前一阶段的情况进行评价。</p>
          <div class="main" align="center">
            <table border="0" cellspacing="0" cellpadding="5" width="300">
            <tr>
            	<td>
                	<p>任务名称：</p>
                </td>
                <td>
                	<p><?php echo $task['taskname'];?>
                </td>
            </tr>
            <tr>	
            	<td>
                	<p>任务需求：</p>
                </td>
                <td>
                	<p><?php echo $task['require'];?></p>
                </td>
            </tr>
            <tr>	
            	<td>
                	<p>提交的文档：</p>
                </td>
                <td>
                	<p><?php echo $task['require'];?></p>
                </td>
            </tr>
            </table>
         <br />
             
             <form name="evaluationformanager" method="post" action="">
             <table style="font-size:12px" border="1" width="400">
              <tr><th colspan="4" align="center">互评</th></tr>
              <tr align="center"><th width="80">评价对象</th><th width="100">评价项目</th>
              <th width="40">权重%</th><th width="160">等级</th></tr>
              <tr align="center"><td rowspan="9" width="80">对项目经理</td>
               <td>学习态度</td>
              <td>10</td>
              <td>
              <input type="radio" name="status" value="1" />A<input type="radio" name="status" value="2" />B
              <input type="radio" name="status" value="3" />C<input type="radio" name="status" value="4" />D
              </td></tr>  
               <tr align="center"><td>专业能力</td>
               <td>16</td><td>
              <input type="radio" name="technique" value="1" />A<input type="radio" name="technique" value="2" />B
              <input type="radio" name="technique" value="3" />C<input type="radio" name="technique" value="4" />D
              </td></tr>
              <tr align="center"><td>沟通能力</td>
              <td>16</td><td>
              <input type="radio" name="communication" value="1" />A<input type="radio" name="communication" value="2" />B
              <input type="radio" name="communication" value="3" />C<input type="radio" name="communication" value="4" />D
              </td></tr>
              <tr align="center"><td>协作能力</td>
              <td>16</td>
              <td>
              <input type="radio" name="cooperation" value="1" />A<input type="radio" name="cooperation" value="2" />B
              <input type="radio" name="cooperation" value="3" />C<input type="radio" name="cooperation" value="4" />D
              </td></tr>   
              <tr align="center"><td>组织能力</td>
              <td>16</td><td>
              <input type="radio" name="cooperation" value="1" />A<input type="radio" name="cooperation" value="2" />B
              <input type="radio" name="cooperation" value="3" />C<input type="radio" name="cooperation" value="4" />D
              </td></tr> 
              <tr align="center"><td>决策能力</td>
              <td>16</td><td>
              <input type="radio" name="cooperation" value="1" />A<input type="radio" name="cooperation" value="2" />B
              <input type="radio" name="cooperation" value="3" />C<input type="radio" name="cooperation" value="4" />D
              </td></tr>             
              <tr align="center"><td>对自己的帮助</td>
              <td>10</td><td>
              <input type="radio" name="helpme" value="1" />A<input type="radio" name="helpme" value="2" />B
              <input type="radio" name="helpme" value="3" />C<input type="radio" name="helpme" value="4" />D
              </td></tr>
              <tr align="center"><td width="100">综合评价</td><td colspan="2"><input type="text" name="" value="" /></td></tr>               <tr align="center"><td colspan="4"><input type="submit" name="submit" value="提交" /></td></tr>   
            </table>
            </form>
            <br />
          </div>
        </div>
  </div>
    <class class="footer">
    	<hr />
        <p align="center">Copyright 2009 PBCLS Team. All Rights Reserved.</p>
</div>
</div>
</body>
</html>