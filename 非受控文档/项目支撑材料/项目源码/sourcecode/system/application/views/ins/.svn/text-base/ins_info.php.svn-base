<?php $this->load->view('main/header');?>
<script language="javascript">
	function manage(ins_id){
		var path = "<?php echo site_url("ins/charge/");?>" + "/" + ins_id;
		alert('正在跳转');
		window.location.href = path;
	}

	function apply(ins_id){
		var path = "<?php echo site_url("ins/charge/");?>" + "/" + ins_id;
		alert('正在跳转');
		window.location.href = path;
	}
	function enter(ins_id){
		var path = "<?php echo site_url("project/index/");?>" + "/" + ins_id;
		alert('正在跳转');
		window.location.href = path;
	}

</script>
<link rel="stylesheet" type="text/css" href="/css/main.css" />
  <div class="maincontent">
  	<div class="main_nav">
    现在位置：PBCLS >>实例详情
    </div>
   	  <div class="ins_details">
      <table border="0" align="center" cellpadding="5" cellspacing="0">
      	<caption>实例详情</caption>
        <tr>
        	<td width="83">
            	<p>实例名称：</p>
            </td>
            <td width="374">
            	<p><?php echo $ins_info['ins_name'];?></p>
            </td>
        </tr>
        <tr>
        	<td>
            	<p>实例状态：</p>
            </td>
            <td>
            	<p><?php echo $ins_info['ins_status'];?></p>
            </td>
        </tr>
        <tr>
        	<td>
            	<p>实例创建者：</p>
            </td>
            <td>
            	<p><?php echo $ins_info['ins_creator'];?></p>
            </td>
        </tr>
        <tr>
        	<td>
            	<p>创建时间：</p>
            </td>
            <td>
            	<p><?php echo $ins_info['ins_cre_time'];?></p>
            </td>
        </tr>
        <tr>
        	<td>
            	<p>实例进度：</p>
            </td>
            <td>
            </td>
        </tr>
        <tr>
        	<td>
            <img name="ins_progress" src="" width="32" height="32" alt="" />
            </td>
        </tr>
      </table>
      </div>
        <div class="about_case">
        <table border="0" align="center" cellpadding="5" cellspacing="0">
        <caption>案例信息</caption>
        	<tr>
            	<td width="80">
                	<p align="right">From Case：</p>
                </td>
                <td width="372">
                	<p align="left"><?php echo $ins_info['from_case'];?></p>
                </td>
            </tr>
            <tr>
                <td>
                	<p align="right">案例描述：</p>
                </td>
                <td>
                </td>
			</tr>
            <tr>
                <td colspan="2">
                	<textarea cols="50" rows="10" readonly="readonly"><?php echo $ins_info['case_descri'];?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                	<p align="right">玩家上限：</p>
                </td>
                <td>
                	<p align="left"><?php echo $ins_info['max_player'];?></p>
                </td>
            </tr>
            <tr>
				<td>
                </td>
                <td>
                	<p align="right"><a href=<?=site_url("cc/ccshow")."/".$ins_info['case_id'];?>>More informations</a></p>
                </td>
            </tr>
            <tr>
            	<td>
                </td>
                <td align="right">
                <?php if($ins_info['is_started'] == '1'){
						if($ins_info['creator_id']==$this->session->userdata('user_id'))
							{
				?>
                <input type="button" value="管理" onclick="manage('<?=$ins_id?>')" />
                <input type="button" value="继续学习" onclick="enter('<?=$ins_id?>')" />
                 <?php
							}
							else
							{
								if($isInProject == true){
				?>
                <input type="button" value="继续学习" onclick="enter('<?=$ins_id?>')" />
                 <?php
								}else{
								?>
                <input type="button" value="申请" onclick="apply(<?=$ins_id?>)" />
                 <?php					
								}
							}
				}
				else{
						if($ins_info['creator_id']==$this->session->userdata('user_id'))
							{
				?>
                <input type="button" value="管理" onclick="manage(<?=$ins_id?>)" />
                <?php
							}
							else
							{
				?>
                <input type="button" value="申请" onclick="apply(<?=$ins_id?>)" />
               	<?php
							}
				}
				?>
                
                </td>
            </tr>
        </table>
        </div>
  </div>
    <div class="footer">
    	<hr />
       <p align="center">Copyright 2009 PBCLS Team. All Rights Reserved.</p>
    </div>
</div>
</body>
</html>