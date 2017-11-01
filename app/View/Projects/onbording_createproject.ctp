<?php 
$cal_prog_per = 0;
$comp_steps = 0;
if($is_active_proj){
	$comp_steps++;
	$cal_prog_per +=33;
}
if($totalusers >1){
	$comp_steps++;
	$cal_prog_per +=33;
}
//if(isset($projectuser_count) && $projectuser_count>=1){
//	$comp_steps++;
//	$cal_prog_per +=25;
//}
if(isset($task_crted) && $task_crted>=1){
	$comp_steps++;
	$cal_prog_per +=34;
}
$autorefreshflag =0;
?>
<div class="steps_os">
	<div class="steps_usr">
		<h1 style="color: #428BCA;">مرحباً <?php echo USERNAME; ?>!<br/> الرجاء البدء بأعمال الإدارة مع نظام إدارة المهام</h1>
		<h6 style="color: #D67866;font-size: 17px;"> مجرد 3 خطوات بسيطة للبدء بإكتشاف إدارة المهام والمتابعة!</h6>
	</div>
	<table cellpadding="0" cellspacing="0" border="0" style="width:97%;padding-top: 20px;">
		<tr>
			<td class="onbrd_lt">
				<table class="onbrd_lt_tbl">
					<tr>
						<th>
							<?php if($is_active_proj){?>
							<img src="<?php echo HTTP_ROOT;?>img/html5/icons/create_Project_inactive.png" />
							<?php }else{?>
							<img src="<?php echo HTTP_ROOT;?>img/html5/icons/create_Project_active.png" />
							<?php }?>

						</th>
						<td class="<?php if($is_active_proj){?>inactive_ttl<?php }else{?>active_ttl <?php }?>">
							<h4>إنشاء وتعيين المشروع</h4>
							<div class="det_text">
								<ul style="list-style: square;">
									<li>اسم المشروع الخاص بك بشكل مناسب وحدد اسم قصير  مطابق له </li>
									<li>سيتم تعيينك كمشرف تلقائيا للمشاريع والعمليات التي سوف يتم إنشائها  </li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<th>
							<?php if($totalusers>1){?>
								<img src="<?php echo HTTP_ROOT;?>img/html5/icons/invite_user_inactive.png" />
							<?php }else{?>
								<img src="<?php echo HTTP_ROOT;?>img/html5/icons/invite_user_active.png" />
							<?php }?>

						</th>
						<td class="<?php if($totalusers>1){?>inactive_ttl<?php }else{?>active_ttl <?php }?>">
							<div id="InvitedUserWithoutLnk" <?php if($totalusers<=1){ ?> onmouseover="showInvitedUserLnk('InvitedUserWithoutLnk','InvitedUserLnk');" <?php } ?> ><h4>دعوة مستخدم</h4></div>
							<div id="InvitedUserLnk" style="display:none;"><a href="javascript:void(0);" <?php if(ACCOUNT_STATUS!=2){?> onclick="newUser('menuid1','loaderid1');" <?php }?> style="text-decoration: underline;" onmouseout="hideInvitedUserLnk('InvitedUserWithoutLnk','InvitedUserLnk');"><h4>دعوة مستخدم</h4></a></div>
							<div class="det_text">
								<ul style="list-style: square;">
									<li>إرسال دعوة إلى زملاء العمل </li>
									<li>يحتاج المستخدمون إلى إعداد حسابهم باستخدام البريد الإلكتروني للدعوة</li>
									<li>ثم، يمكن للمشرف إضافتهم إلى العمليات</li>
								</ul>
							</div>
						</td>
					</tr>
					<tr>
						<th>
							<?php if(isset($task_crted) && $task_crted>=1){?>
								<img src="<?php echo HTTP_ROOT;?>img/html5/icons/create_task_inactive.png" />
							<?php }else{?>
								<img src="<?php echo HTTP_ROOT;?>img/html5/icons/create_task_active.png" />
							<?php }?>

						</th>
						<td class="<?php if(isset($task_crted) && $task_crted>=1){?>inactive_ttl<?php }else{?>active_ttl <?php }?>">
							<div id="CreateTaskWithoutLnk" <?php if((!isset($task_crted)) || ($task_crted==0)){ ?> onmouseover="showInvitedUserLnk('CreateTaskWithoutLnk','CreateTaskLnk');"<?php } ?> ><h4>إنشاء المهمة</h4></div>
							<div id="CreateTaskLnk" style="display:none;"><a href="javascript:void(0);" onclick="open_new_case();" style="text-decoration: underline;" onmouseout="hideInvitedUserLnk('CreateTaskWithoutLnk','CreateTaskLnk');"><h4>إنشاء المهمة</h4></a></div>
							<div class="det_text">
								<ul style="list-style: square;">
									<li>يمكنك إنشاء مهمة تحت مشروع</li>
									<li>حدد العنوان، ووضع تاريخ الاستحقاق، تعيين الأولوية</li>
									<li>تعيين المهمة إلى المنفذ</li>
								</ul>
							</div>
						</td>
					</tr>
				</table>
			</td>
			<td class="onbrd_rt">
				<div class="steps_progbar" style="padding-top: 0px;margin-top:0px; ">
					<div class="progbar_outer1">
						<div class="progbar_outer"><div class="progbar_in" style="width: <?php echo $cal_prog_per;?>%"></div></div>
					</div>
					<h6 style="text-align:center"><?php echo $comp_steps;?> of 3 Steps Completed</h6>
				</div>
				<div style="padding-top:0px;text-align:center">
				<?php if(!$is_active_proj){?>					
				<h4 style="text-shadow:none; font-size: 26px;text-align:center">إنشاء مشروعك الأول، وبدء الاستخدام<br/></h4>
					<div class="on_brd_blue" style="margin-top:20px"  <?php if(ACCOUNT_STATUS!=2){?> onclick="newProject('menupj','loaderpj');" <?php }?>>
						<img src="<?php echo HTTP_ROOT;?>img/wright_icon.png" />
						<a href="javascript:void(0);"  style="text-decoration: none;color: #fff; font-weight: bold;">إنشاء مشروع</a>
					</div>
				<?php }elseif($totalusers<=1){?>
					<h4 style="text-shadow:none; font-size: 26px;text-align:center">لقد وصلت  إلى هنا، مما يعني أن الخطوة الأولى تمت بنجاح <br/>
					نظــام إدارة المهــام والمتابعـة، يعمل بشكل أفضل عند إضافة زمـلاء العمـل</h4>
				<div class="on_brd_blue" style="margin-top:20px" <?php if(ACCOUNT_STATUS!=2){?> onclick="newUser('menuid1','loaderid1');" <?php }?>>					
					<img src="<?php echo HTTP_ROOT;?>img/wright_icon.png" />
					<a href="javascript:void(0);"  style="text-decoration: none;color: #fff; font-weight: bold;" > دعوة مستخدم</a>
				</div>
				<?php }elseif((!isset($task_crted)) || ($task_crted==0)){ ?>
						<h4 style="text-shadow:none; font-size: 26px;text-align:center">الخطوة النهائية، إنشاء مهمة وتعيين، المنفذ!</h4>
						<div class="on_brd_blue" style="margin-top:20px" onclick="open_new_case();" >
							<img src="<?php echo HTTP_ROOT;?>img/wright_icon.png" />
							<a href="javascript:void(0);" style="text-decoration: none;color: #fff; font-weight: bold;" >إنشاء المهمة</a>
						</div>
				<?php }else{ $autorefreshflag =1;?>
						<h4 style="text-shadow:none; font-size: 26px;text-align:center">لقد أكملت جميع الأساسيات <br/>
						الآن تستطيع البدء بإستعمال نظام إدارة العمليات والمتابعة</h4><br/>
						<h6>
							 <span id="seccnt">25</span>Seconds<br> ستتم إعادة توجيه هذه الصفحة تلقائيا إلى لوحة التحكم ضمن
							<a href="<?php echo HTTP_ROOT;?>dashboard">انقر هنا</a> لإعادة التوجيه إلى صفحة لوحة التحكم.
						</h6>
				<?php }?>
				</div>
			</td>
		</tr>
	</table>
				
</div>
<!----------- Add User Popup -------------->
<div id="backgroundPopup"></div>
<div id="popupContact" style="height:425px;width:750px;top:10px;" class="inner">
<table cellspacing="0" cellpadding="0" width="700px" class="div_pop" align="center">
	<tr>
		<td style="padding-left:10px;" valign="middle" class="ms_hd">
			<div style="float:left;padding-top:3px;">
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td>
							<h1 style="margin:0;padding:0;" class="popup_head">إضافة مستخدم</font></h1>
						</td>
						<td style="padding:0 10px">
							<img src="<?php echo HTTP_IMAGES;?>html5/icons/icon_breadcrumbs.png" />
						</td>
						<td>
							<h1 class="popup_head" id="projectname"  style="margin:0;padding:0;color:#666666"></h1>
						</td>
					</tr>
				</table>
			</div>
			<div style="float:right;padding-right:5px;">
				<button class="green" id="inviteusr" onclick="newUser('menuid','loaderid','add_user');" style="margin-top:1px;height: 27px; padding-top: 1px;color:#CCCCCC">دعوة مستخدم</button>
				<img src="<?php echo HTTP_IMAGES;?>images/del.gif" alt="Loading..." title="Loading..." id="loadinginvt" style="display:none;position:relative;"/>
				&nbsp;&nbsp;&nbsp;
				<img src="<?php echo HTTP_IMAGES;?>images/popup_close.png" alt="Close" title="Close" onclick="usPopupClose()" style="cursor:pointer" />
			</div>
		</td>
	</tr>
	<tr>
		<td style="padding:5px 11px;" align="right">
			<span id="usersrch" style="display:none;">
             	<div class="find_prj_ie">Enter User Name</div>
				<?php echo $this->Form->text('name',array('size'=>'35','class'=>'text_field','style'=>'padding:4px 26px 4px 5px;width: 190px;','id'=>'name','maxlength'=>'100','onkeyup'=>'searchuserkey()','placeholder'=>'Enter User Name')); ?>
				<div class="src_img"><img src="<?php echo HTTP_IMAGES; ?>images/srch.png" /></div> 
			</span>
		</td>
	</tr>
	<tr>
		<td align="center">
			<!--<div id="popup_head" style="border-bottom:1px solid #F2F2F2;margin-bottom:5px;"><h1 class="toplink">إضافة مهمة</h1></div>-->
			<span id="popupload" style="display:none;position:absolute;top:17%;left:40%;">Loading users... <img src="<?php echo HTTP_IMAGES;?>images/del.gif" title="Loading..." alt="Loading..."/></span>
			
			<div id="loadcontent" style="width:97%;text-align:center;height:350px;overflow:auto;padding-left: 10px;"></div>
			
			<div id="popup_head" style="text-align:center;width:100%;height:40px;margin-top:20px;">
			<div id="userloader" style="display:none;text-align:center;padding-top:10px;">
				<img src="<?php echo HTTP_IMAGES; ?>images/del.gif" alt="loading..." title="loading..."/> 
			</div>
			<div id="confirmuser" style="display:block">
			<table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
			<tr>
			<td valign="middle" style="width:500px" align="center" class="nwa">
				<span id="confirmbtn" style="display:block;">
					<button class="blue small" id="confirmusercls" style="margin-left:3px;width:75px" value="Confirm" type="button" onclick="assignuser(this)">إضافة</button>
					Or <button class="blue small" id="confirmuserbut" style="margin-left:3px;width:150px" value="Confirm" type="button" onclick="assignuser(this)">إضافة و إكمال</button>
					Or <a id="javascript:void(0);" style="font-size:14px;" onclick="fbPopupClose()">إلغاء</a>
				</span>
				<span id="closebtn" style="display:block;">
					<?php /*?>Or <a id="javascript:void(0);" style="font-size:14px;" onclick="fbPopupClose()">إلغاء</a><?php */?>
				</span>
				<span id="excptAddContinue" style="display:none;">
					<button class="blue small" id="confirmusercls" style="margin-left:3px;width:75px" value="Confirm" type="button" onclick="assignuser(this)">أضف</button>
					Or <a id="javascript:void(0);" style="font-size:14px;" onclick="fbPopupClose()">إلغاء</a>
				</span>
			</td>
			</tr>
			</table>
			</div>
			</div>
		</td>
	</tr>
</table>
</div>

<style type="text/css">
.on_brd_blue:hover {
		background-color: #648740 !important;
    	border-color: #74A844;
	}
	.on_brd_blue {
		background-image: none !important;
		border: 5px solid #FFFFFF;
		border-radius: 0;
		box-shadow: none !important;
		color: #FFFFFF !important;
		cursor: pointer;
		display: inline-block;
		margin: 0;
		position: relative;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25) !important;
		transition: all 0.15s ease 0s;
		vertical-align: middle;
		background-color: #7DAA50 !important;
		border-color: #8EBF60;
		font-size:18px;
		font-weight:normal;
		-moz-user-select: none;
		font-weight: normal;
		text-align: center;
		white-space: nowrap;
		border-width: 5px;
		line-height: 1.35;
		padding: 10px 26px;
		cursor: pointer;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25) !important;
	
	}
	.icon-ok:before{content:'\2714'; position:absolute; top:0px; left:0px}

</style>
<script type="text/javascript">
<?php if($autorefreshflag){?>
	setInterval(function(){
		window.location.href=HTTP_ROOT+"dashboard";
	},25000);
	setInterval(function(){
		if(parseInt($('#seccnt').text())>=1){
			$('#seccnt').text(parseInt($('#seccnt').text())-1);
		}
	},1000);

<?php }	?>
	
</script>