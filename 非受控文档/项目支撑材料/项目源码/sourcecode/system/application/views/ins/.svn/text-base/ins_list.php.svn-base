<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="/css/main.css" />
</head>

<body>
<div class="container">
    <div class="header">
      <div class="logo">
        <div class="per_info">
        	<p><?php echo $this->session->userdata('user_name')	;?>，good morning</p>
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
	<div class="main_nav">
    	现在位置：PBCLS >> 实例列表
    </div>
    <div class="sidebar">
    			<! function form_open should be change.	>
            <div class="case_list">
            	<form id="frm" name="frm" method="post" action="">
                	<select size="20" id="insList" class="case_ins_list">
                    </select>
                </form>
            </div>	
    </div>
    <div class="case_info">
    	<b>实例详情</b>
<table width="700" border="0" cellpadding="5" cellspacing="0" align="center">
        
            <tr>
				<td width="140" valign="top"><div align="left">实例创建者：</div></td>
              <td width="540"><div align="left" id="creator"></div></td>
          </tr>
            <tr>
            	<td valign="top"><div align="left">创建时间：</div></td>
              <td><div align="left" id="creatTime"></div></td>
          </tr>
            <tr>
				<td valign="top"><div align="left">现有玩家数：</div></td>
              <td><div align="left" id="playerNum"></div></td>
          </tr>
            <tr>
				<td valign="top"><div align="left">实例状态：</div></td>
              <td><div align="left" id="insStatus"></div></td>
          </tr>
            <tr>
				<td valign="top"><div align="left">父案例：</div></td>
              <td><div align="left" id="fromCase"></div></td>
          </tr>
          <tr>
          	<td>
            </td>
            <td>
            	<div align="right" id="insUrl"></div>
            </td>
          </tr>
        </table>
    </div>
</div>
  </div>
    <div class="footer">
      <hr />
        <p align="center">Copyright 2009 PBCLS Team. All Rights Reserved.</p>
    </div>
</div>
</body>
<script src="/js/jquery.min.js" type="text/javascript">
</script>
<script language="javascript">
	$(document).ready(function(){
		<?php 
		$count = 0;
		foreach($insList as $row)
		{
			$count++;
		?>
	$("#insList").append("<option value="+"<?php echo  $row['uid'];?>"+">"+"<?php echo $count.'.'.$row['instancename'];?>"+"</option>");
		<?php 
			}
		?>
				
							   });
	
		$("#insList").click(function(){
								 var selectObject = $("#insList option:selected");
								 var selected = selectObject.get(0).value;
								 $.ajax({
										type: "post",
										data: "insId=" + selected,
										url: "<?php echo site_url()?>/insAjax/getInsInfor",
										dataType: "xml",
										success: function(xml){
										   $("#insUrl").html('');
										   $("#creator").html($(xml).find("creator").text());
										   $("#creatTime").html($(xml).find("creatTime").text());
										   $("#playerNum").html($(xml).find("playerNum").text());
										   $("#insStatus").html($(xml).find("insStatus").text());
										   $("#fromCase").html($(xml).find("fromCase").text());
										   var Url = "<a href=" + $(xml).find("insUrl").text() + ">详细信息</a>"
										   $("#insUrl").append(Url);
										},
										 error: function(){
											 alert("ajax error.");
										 }
										 });
								 });

</script>