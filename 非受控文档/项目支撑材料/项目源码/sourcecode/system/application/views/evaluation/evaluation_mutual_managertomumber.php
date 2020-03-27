<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/pbcls/system/application/views/game.css" />
<link rel="stylesheet" type="text/css" href="game.css" />
<title>项目开始</title>
</head>
<script src="/pbcls/system/application/js/quitgame.js">
</script>
<body>
<div class="container">
	<div class="header">
	  
    </div>
    <div class="maincontent">
    	<div class="navbar">
        	<div class="self_info">
            <?php echo img('system/image/u25.jpg');?>
            <p>Role:<?php echo $rolename;?></p>
            </div>
            <ul class="nav">
				<li><a href="<?php echo site_url('project/index/');?>">自 评</a></li>
                <li><a href="<?php echo site_url('project/mytask/');?>">互 评</a></li>
                <li><a href="<?php echo site_url('project/files/');?>">老师评价</a></li>
       	  </ul>
            <div class="team">
            </div>
      </div>
        <div class="newsbar">
        	<div class="pro_news">
            <table width="190" cellpadding="5" cellspacing="0">
            <tr>
           	  <td align="center" bgcolor="#E7E7E7">项目最新消息
       		  </td>
            </tr>
            <tr>
                <td>
                	正在建设中！
                </td>
            </tr>
            </table>
          </div>
            <div class="im_news">
              <table width="190" cellpadding="5" cellspacing="0">
                <tr>
                  <td align="center" bgcolor="#E7E7E7">即时通讯模块 </td>
                </tr>
                <tr>
                  <td> 正在建设中！ </td>
                </tr>
              </table>
          </div>
            <div class="ins_out">
            <input type="button" value="退出游戏" onclick="quitIns()" />
            <input type="button" value="退出系统" onclick="quitSys()" />
          </div>
        </div>
        <div class="mainbody">
			<div class="game_nav">
            	PBCLS >> 任务详情 >> 评价 >> 自我评价
            </div>
            <p>在这里您可以对您项目小组成员前一阶段的情况进行评价。</p>
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
            
            <form name="evaluationformumber" method="post" action="">
            <table style="font-size:12px" border="1" width="400">
            <tr><th colspan="4" align="center">互评</th></tr>
              <tr align="center"><th width="80">评价对象</th><th width="100">评价项目</th>
              <th width="40">权重%</th><th width="160">等级</th></tr>
              <tr align="center"><td rowspan="10">对组员A</td>
              <td>学习态度</td>
              <td>10</td>
              <td>
              <input type="radio" name="status" value="1" />A<input type="radio" name="status" value="2" />B
              <input type="radio" name="status" value="3" />C<input type="radio" name="status" value="4" />D
              </td>
              </tr>
              <tr align="center"><td>专业能力</td>
               <td>10</td><td>
              <input type="radio" name="technique" value="1" />A<input type="radio" name="technique" value="2" />B
              <input type="radio" name="technique" value="3" />C<input type="radio" name="technique" value="4" />D
              </td></tr>
              <tr align="center"><td>沟通能力</td>
              <td>10</td><td>
              <input type="radio" name="communication" value="1" />A<input type="radio" name="communication" value="2" />B
              <input type="radio" name="communication" value="3" />C<input type="radio" name="communication" value="4" />D
              </td></tr>
              <tr align="center"><td>协作能力</td>
              <td>10</td>
              <td>
              <input type="radio" name="cooperation" value="1" />A<input type="radio" name="cooperation" value="2" />B
              <input type="radio" name="cooperation" value="3" />C<input type="radio" name="cooperation" value="4" />D
              </td></tr>   
              <tr align="center"><td>文档通过率 </td><td>5</td>
              <td>
              <input type="radio" name="status" value="1" />A<input type="radio" name="status" value="2" />B
              <input type="radio" name="status" value="3" />C<input type="radio" name="status" value="4" />D
              </td>
              </tr>
              <tr align="center"><td>文档完成时间</td><td>5</td>
              <td>
              <input type="radio" name="status" value="1" />A<input type="radio" name="status" value="2" />B
              <input type="radio" name="status" value="3" />C<input type="radio" name="status" value="4" />D
              </td>
              </tr>        
              <tr align="center"><td>文档风格</td><td>10</td>
              <td>
              <input type="radio" name="status" value="1" />A<input type="radio" name="status" value="2" />B
              <input type="radio" name="status" value="3" />C<input type="radio" name="status" value="4" />D
              </td>
              </tr> 
              <tr align="center"><td>文档创新情况</td><td>10</td>
              <td>
              <input type="radio" name="status" value="1" />A<input type="radio" name="status" value="2" />B
              <input type="radio" name="status" value="3" />C<input type="radio" name="status" value="4" />D
              </td>
              </tr>
              <tr align="center"><td>文档正确情况</td><td>30</td>
              <td>
              <input type="radio" name="status" value="1" />A<input type="radio" name="status" value="2" />B
              <input type="radio" name="status" value="3" />C<input type="radio" name="status" value="4" />D
              </td>
              </tr>
              <tr align="center"><td>综合评价</td><td colspan="2"><input type="text" name="evaluation" value="" /></td></tr>
               <tr align="center"><td colspan="5"><input type="submit" name="submit" value="提交" /></td></tr> 
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