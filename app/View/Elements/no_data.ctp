<?php
if ($nodata_name == 'caselist') {
    $imageClass = 'icon-no-archive';
    $msgHead = 'لم يتم أرشفة أية مهام حتى الآن';
    $msgDesc = 'ستظهر جميع المهام المؤرشفة لجميع المشاريع هنا';
} else if ($nodata_name == 'filelist') {
    $imageClass = 'icon-no-archive';
    $msgHead = 'لم يتم أرشفة أية ملفات بعد ';
    $msgDesc = 'جميع الملفات المؤرشفة لجميع المشاريع سوف تظهر هنا';
} else if ($nodata_name == 'activity') {
    $imageClass = 'icon-no-activity';
    $msgHead = 'لا توجد أنشطة أو مهمات في هذا المشروع';
    $msgDesc = ' تظهر هنا جميع أنشطة هذا المشروع ';
} else if ($nodata_name == 'files') {
    $imageClass = 'icon-no-files';
    $msgHead = 'لم تتم مشاركة أي ملفات أو تحميلها في هذا المشروع';
    $msgDesc = 'ستظهر جميع الملفات المشتركة في هذا المشروع هنا';
} else if ($nodata_name == 'files-search') {
    $imageClass = 'icon-no-files';
    $msgHead = 'لا توجد ملفات';
    $msgDesc = '';
} else if ($nodata_name == 'milestonelist') {
    $imageClass = 'icon-no-milestone';
    //$msgHead = 'لم يتم إنشاء أي معلم (حدث) في هذا المشروع';
    //$msgDesc = 'سيظهر كل معلم (حدث) تم إنشاؤه في هذا المشروع هنا';
	$msgHead = 'لا يوجد معالم أحداث في هذا المشروع';
    $msgDesc = '';
}else if ($nodata_name == 'tasklist') {
	$imageClass = 'icon-no-task';
	if($case_type=='overdue'){
		$msgHead = 'لا يوجد مهمة متأخرة في هذا المشروع';
	}elseif($case_type=='highpriority'){
		$msgHead = 'لم يتم إنشاء مهمة ذات أولوية عالية في هذا المشروع';
	}elseif($case_type=='assigntome'){
		$msgHead = 'لا يوجد مهمات خاصة بي  في هذا المشروع';
	}elseif($case_type=='delegateto'){
		$msgHead = 'لم يتم تنفيذ أي مهمة في هذا المشروع';
	}else{
		$msgHead = 'لم يتم إنشاء أية مهام في هذا المشروع';
	}
    $msgDesc = 'ستظهر جميع المهام التي تم إنشاؤها على هذا المشروع هنا';
}
?>
<div class="fl col-lg-12 not-fonud ml_not_found">
	<div class="icon_con <?php echo $imageClass;?>"></div>
	<h2><?php echo $msgHead; ?></h2>
	<div><?php echo $msgDesc; ?></div>
<?php if ($nodata_name == 'milestonelist') {?>
	<div style="padding-top:10px;">
		<button class="btn btn_blue" value="Add" type="button" onclick="addEditMilestone(this);" style="margin:0;">
			أنشاء معلم (حدث)
		</button>
	</div>
<?php }?>
</div>