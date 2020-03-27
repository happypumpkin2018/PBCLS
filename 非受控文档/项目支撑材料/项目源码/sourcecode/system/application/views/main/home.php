<?php $this->load->view('main/header');?>
<div class="maincontent">
        <div class="main_nav">
            现在位置：PBCLS >> Home
        </div>
    <div class="sidebar">
    	<?php echo img('/img/u25.jpg');?>
        <p><a href=<?php echo site_url("per/mail")?>>邮件</a></p>
        <p><a href=<?php echo site_url("per/ins")?>>我的实例</a></p>
        <p><a href=<?php echo site_url('evaluation')?>>我的评价</a></p>
    </div>
    
    <div class="per_status">
	  <table width="700" border="0" cellpadding="5" align="center">
        <caption>正在学习的案例</caption>
        <tr>
      	  <th width="7%" align="center" bgcolor="#DDDDDB"><p>序号</p></th>
       	  <th width="17%" align="center" bgcolor="#DDDDDB"><p>案例名称</p></th>
          <th width="17%" align="center" bgcolor="#DDDDDB"><p>实例名称</p></th>
          <th width="10%" align="center" bgcolor="#DDDDDB"><p>创建者</p></th>
          <th width="8%" align="center" bgcolor="#DDDDDB"><p>角色</p></th>
          <th width="12%" align="center" bgcolor="#DDDDDB"><p>创建时间</p></th>
          <th width="7%" align="center" bgcolor="#DDDDDB"><p>进度</p></th>
       	  <th width="77" align="center" bgcolor="#DDDDDB"><p>操作</p></th>
        </tr>
        <?php
        	$index = 1;
			foreach($learning_ins as $row)
			{
		?>
        <tr>
        	<td><?php echo $index++?></td>
        	<td><p><?php echo $row['casename']?></p></td>
            <td><p><?php echo $row['instancename']?></p></td>
            <td><p><?php echo $this->usermodel->getUsername($row['creatorid'])?></p></td>
            <td><p><?php echo $row['role']?></p></td>
            <td><p><?php echo $row['creationtime']?></p></td>
            <td><p><?php echo $row['progress']?></p></td>
            <td valign="middle">
			<?php if($user_id == $row['creatorid']) echo "<a href=".site_url('ins/charge/'.$row['instanceid']).">管理</a>|"; ?>
            <a href="<?php echo site_url('project/index/'.$row['instanceid']);?>">进入</a>|<a href="">退出</a></td>
        </tr>
        <?php
			}
		?>
        </table>
        <br />
<table width="700" border="0" cellpadding="5" align="center">
        	<caption>正在指导的案例</caption>
         
            <tr>
            <th width="8%" bgcolor="#DDDDDB"><p>序号</p></th>
            <th width="16%" bgcolor="#DDDDDB"><p>案例名称</p></th>
            <th width="16%" bgcolor="#DDDDDB"><p>实例名称</p></th>
            <th width="10%" bgcolor="#DDDDDB"><p>创建者</p></th>
            <th width="16%" bgcolor="#DDDDDB"><p>创建时间</p></th>
            <th width="10%" bgcolor="#DDDDDB"><p>进度</p></th>
              <th width="85" bgcolor="#DDDDDB"><p>操作</p></th>
      </tr>
            <?php
            $index = 1;
			foreach($indicating_ins as $row)
			{
			?>
            <tr>
                <td><?php echo $index++?></td>
	        	<td><p><?php echo $row['casename']?></p></td>
	            <td><p><?php echo $row['instancename']?></p></td>
	            <td><p><?php echo $this->usermodel->getUsername($row['creatorid'])?></p></td>
	            <td><p><?php echo $row['creationtime']?></p></td>
	            <td><p><?php echo $row['progress']?></p></td>
	            <td><a href="">进入</a>|<a href="">退出</a>|</td>
            </tr>
            <?php
					}
			?>
        </table>
        <br />
        <table width="700" border="0" cellpadding="5" align="center">
        <caption>正在旁观的案例</caption>
        <tr>
       	 <th width="8%" bgcolor="#DDDDDB"><p>序号</p></th>
       	  <th width="16%" bgcolor="#DDDDDB"><p>案例名称</p></th>
          <th width="16%" bgcolor="#DDDDDB"><p>实例名称</p></th>
          <th width="10%" bgcolor="#DDDDDB"><p>创建者</p></th>
          <th width="16%" bgcolor="#DDDDDB"><p>创建时间</p></th>
          <th width="10%" bgcolor="#DDDDDB"><p>进度</p></th>
          <th width="85" bgcolor="#DDDDDB"><p>操作</p></th>
        </tr>
        <?php
   	        $index = 1;
			foreach($observing_ins as $row)
			{
		?>
        	<tr>
            	<td><?php echo $index++?></td>
	        	<td><p><?php echo $row['casename']?></p></td>
	            <td><p><?php echo $row['instancename']?></p></td>
	            <td><p><?php echo $this->usermodel->getUsername($row['creatorid'])?></p></td>
	            <td><p><?php echo $row['creationtime']?></p></td>
	            <td><p><?php echo $row['progress']?></p></td>
	            <td><a href="">进入</a>|<a href="">退出</a>|</td>
            </tr>
        <?php 
			}
		?>
        </table>
    </div>
  </div>

<?php $this->load->view('main/footer')?>