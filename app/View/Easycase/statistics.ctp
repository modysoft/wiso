<div class="listdv">
    <div class="fl stas_icn stas_red"><?php if(isset($statistics['0']['task_without_due_date']['task_without_due_date']) && !empty($statistics['0']['task_without_due_date']['task_without_due_date'])){ echo $statistics['0']['task_without_due_date']['task_without_due_date'];} else { echo 0;}?></div>
    <div class="fl stas_cnt_db">مهمة بدون تاريخ الاستحقاق</div>
    <div class="cb"></div>
</div>
<?php /*?><div class="lstbtndv"></div>
<div class="listdv">
    <div class="fl stas_icn stas_red"><?php if(isset($statistics['0']['task_have_no_hours']['task_have_no_hours']) && !empty($statistics['0']['task_have_no_hours']['task_have_no_hours'])){ echo $statistics['0']['task_have_no_hours']['task_have_no_hours'];} else { echo 0;}?></div>
    <div class="fl stas_cnt_db">مهمة ليس فيها ساعات عمل مبذولة</div>
    <div class="cb"></div>
</div><?php */?>
<div class="lstbtndv"></div>
<div class="listdv">
    <div class="fl stas_icn stas_green"><?php if(isset($statistics['0']['hours_spent']['hours_spent']) && !empty($statistics['0']['hours_spent']['hours_spent'])){ echo $statistics['0']['hours_spent']['hours_spent'];} else { echo 0;}?></div>
    <div class="fl stas_cnt_db">  ساعات عمل مبذولة</div>
    <div class="cb"></div>
</div>
<div class="lstbtndv"></div>
<div class="listdv">
    <div class="fl stas_icn stas_green"><?php if(isset($statistics['0']['task_hours']['task_hours']) && !empty($statistics['0']['task_hours']['task_hours'])){ echo $statistics['0']['task_hours']['task_hours'];} else { echo 0;}?></div>
    <div class="fl stas_cnt_db"> <?php echo $task_type_name;?> ساعات عمل مبذولة على </div>
    <div class="cb"></div>
</div>
<!--
<div class="lstbtndv"></div>
<div class="listdv">
    <div class="fl stas_icn stas_green">47</div>
    <div class="fl stas_cnt_db">مهمة بدون تاريخ الاستحقاق</div>
    <div class="cb"></div>
</div>
<div class="lstbtndv"></div>
<div class="listdv">
    <div class="fl stas_icn stas_orange">47</div>
    <div class="fl stas_cnt_db">مهمة بدون تاريخ الاستحقاق</div>
    <div class="cb"></div>
</div>
-->