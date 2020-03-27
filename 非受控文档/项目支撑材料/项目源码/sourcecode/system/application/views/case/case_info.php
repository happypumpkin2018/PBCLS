<?php $this->load->view('main/header');?>
<link rel="stylesheet" type="text/css" href="/css/main.css" />
    <div class="maincontent">
        <div class="main_nav">
            现在位置：PBCLS >> 案例详情
        </div>
        <div class="sidebar">
            <div class="side_nav">
              <b>Case Details</b>
              <hr />
              <p><strong>>>详细信息</strong></p>
              <p><a href=<?php echo site_url("/cc/ccins/".$case_info['caseid']);?>>已有的实例</a></p>
              <p><a href=<?php echo site_url("/cc/ccdis/".$case_info['caseid']);?>>案例讨论区</a></p>
            </div>
            <div class="ins_cre">
            	<b>创建实例</b>
                <hr />
                <?php echo form_open('');?>
                <?php echo form_fieldset('新建实例');?>
                	<?php echo form_label('实例名称:');?>
                    <?php echo form_input('ins_name',set_value('instance_name'));?>
                    <div align="right"><?php echo form_submit('cre_ins','新建');?></div>
                <?php echo form_fieldset_close();?>
                <?php echo form_close('');?>
            </div>
        </div>
        <div class="case_info">
        	<p>案例信息</p>
            <div class="case_infor_table">
            	<table border="0" cellpadding="5" cellspacing="0" align="center">
                	<tr>
                    	<td width="153" valign="top">
                        <p>案例名称：</p>
                        </td>
                        <td width="527">
                        <p><?php echo $case_info['casename'];?></p>
                        </td>
                    </tr>
                    <tr>
                    <td valign="top">
                        <p>上传时间：</p>
                        </td>
                        <td>
                        <p><?php echo $case_info['upload_time'];?></p>
                </tr>
                    <tr>
                    <td valign="top">
                        <p>最大玩家数：</p>
                        </td>
                        <td>
                        <p><?php echo $case_info['max_player'];?></p>
                </tr>
                    <tr>
                    <td valign="top">
                        <p>案例描述：</p>
                        </td>
                        <td>
                        <p><textarea cols=70 rows="8"><?php echo $case_info['discriptions'];?></textarea></p>
                  </tr>
                </table>
            </div>
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