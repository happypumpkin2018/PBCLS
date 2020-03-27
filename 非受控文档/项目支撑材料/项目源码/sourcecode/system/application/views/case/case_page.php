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
    	现在位置：PBCLS >> 案例库
    </div>
    <div class="sidebar">
            <div class="case_list">
            	<form id="frm" name="frm" method="post" action="">
                	<select size="10" id="caseList" class="case_ins_list" >
                    </select>
                </form>
            </div>	
			
                <form id="cre" name="cre" method="post">
            	<fieldset>
				<legend>新建实例</legend>
            <div class="ins_cre">
				<label for="instance_name">实例名：</label>
                <br/>
                <input type="text" id="ins_name" name="ins_name" value="" size="30" />
                <p align="left">实例名由6--30个字母、数字或者下划线组成，由字母开头</p>
                <p align="right"><input type="button" id="ins_cre" name="ins_cre" value="新建" disabled="disabled"/></p>
            </div>
				</fieldset>
                </form>
    </div>
    <div class="case_info">
    	<table width="700" border="0" cellpadding="5" cellspacing="0" align="center">
        <caption>案例详情</caption>
            <tr>
				<td width="140" valign="top"><div align="right">案例名称：</div></td>
              <td width="540"><div align="left" id="caseName"></div></td>
          </tr>
            <tr>
            	<td valign="top"><div align="right">上传时间：</div></td>
              <td><div align="left" id="uploadTime"></div></td>
          </tr>
            <tr>
				<td valign="top"><div align="right">案例描述：</div></td>
              <td><div align="left"><textarea id="description" cols="60" rows="5" readonly="readonly"></textarea></div></td>
          </tr>
            <tr>
				<td valign="top"><div align="right">玩家上限：</div></td>
              <td><div align="left" id="maxPlayer"></div></td>
          </tr>
            <tr>
				<td valign="top"><div align="right">已完成：</div></td>
              <td><div align="left" id="caseUsed"></div></td>
          </tr>
            <tr>
				<td valign="top"><div align="right">案例类型：</div></td>
              <td><div align="left" id="caseType"></div></td>
          </tr>
            <tr>
				<td valign="top"><div align="right">状态：</div></td>
              <td><div align="left" id="caseStatus"></div></td>
          </tr>
          <tr>
          	<td>
            </td>
            <td>
            	<div align="right" id="caseUrl"></div>
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
</html>
<script src="/js/jquery.min.js" type="text/javascript">
</script>
<script language="javascript">
	$(document).ready(function(){
		$("#ins_cre").attr("disabled",true);
		<?php 
			$count = 0;
			foreach($case_list as $row)
			{
				$count++;
		?>
		$('#caseList').append("<option value="+"<?php echo  $row['uid'];?>"+">"+"<?php echo $count.'.'.$row['casename'];?>"+" </option>");
		<?php
			}
		?>
							   });
	
	$("#caseList").click(function(){
							var selectObject =$("#caseList option:selected");
							var selected = selectObject.get(0).value;
							$.ajax({
								   type: "post",
								   data: "caseId=" + selected,
								   url:"<?php echo site_url();?>/cc/getCcInfor",
								   dataType: 'xml',
								   success: function(result)
 		                           {
									 $("#caseUrl").html('');
									 $("#caseName").fadeTo("slow", 0.85).fadeIn("normal").html($(result).find("caseName").text());
									 $("#uploadTime").html($(result).find("uploadTime").text());
									 $("#description").html($(result).find("description").text());
									 $("#maxPlayer").html($(result).find("maxPlayer").text());
									 $("#caseUsed").html($(result).find("caseUsed").text());
									 $("#caseType").html($(result).find("caseType").text());
									 $("#caseStatus").html($(result).find("caseStatus").text());
									 var Url = "<a href=" + $(result).find("caseUrl").text() + ">详细信息</a>";
									 $("#caseUrl").append(Url);
									 $("#ins_cre").attr("disabled",false);
  		                           },              
      		                      error: function()
                              	  {
                                          alert("ajax error");
                              	  }
								   });
								  });
	
	$("#ins_cre").click(function(){	
					var insname = $("#ins_name").val();
					if(insname == "" || insname.length < 6 || insname.length > 30){
						alert("实例名非法，请重新输入");
						$("#ins_name").val('');
						$("#ins_name").focus();
					}			
					else{
							reg=/^[a-zA-Z]\w{5,29}$/;     
						   if(!reg.test(insname)){          
							   alert("实例名非法，请重新输入");
								$("#ins_name").val('');
								$("#ins_name").focus();   
						   }
						   else{
								alert("创建成功，正在准备跳转");
								var selectObject =$("#caseList option:selected");
								var selected = selectObject.get(0).value;
								var target = "<?=site_url("ins/crins")?>/" + selected;
								$("#cre").attr("action",target);
								document.getElementById('cre').submit();
							}
					}
								});
</script>  