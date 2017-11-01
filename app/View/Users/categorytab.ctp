<table cellpadding="0" cellspacing="0" class="col-lg-12 tab_cse">
    <tr>
	<th>&nbsp;</th>
	<td rowspan="6" style="text-align: left;"> 
	   اختر الفلاتر التي تريد عرضها في تبويب المهام في لوحة التحكم.<br/><br/>
	    <img src="<?php echo HTTP_ROOT . 'img/images/category_tab.png'; ?>"/>
	</td>
    </tr>
    <?php
    $tablists = Configure::read('DTAB');
    foreach ($tablists AS $tabkey => $tabvalue) {
	?>
        <tr>
	    <td class="tab_cls">
		<div class="tb_div_en">
		    <input type="checkbox" <?php if ($tabkey & ACT_TAB_ID) { ?>checked="true"<?php } if ($tabkey == 1 || $tabkey == 2) { ?>disabled="disabled"<?php } ?> value="<?php echo $tabkey; ?>" class="cattab_cls" style="cursor: pointer;">
	    &nbsp;&nbsp;<?php echo $tabvalue["ftext"]; ?>
		</div>
	</td>
        </tr>
<?php } ?>
    <tr>
	<td></td>
	<td class="btn_align">
	    <span id="btn_cattype">
		<button type="button" value="Save" name="addcattab" class="btn btn_blue" onclick="savecategorytab();"><i class="icon-big-tick"></i>حفظ</button>
		<!--<button class="btn btn_grey reset_btn" type="button" name="cancel" onclick="closePopup();" ><i class="icon-big-cross"></i>إلغاء</button>-->
        <span class="or_cancel"><a name="cancel" onclick="closePopup();">إلغاء</a></span>
	    </span>
	    <span id="tab_ldr" style="display:none;">
		<img src="<?php echo HTTP_IMAGES; ?>images/case_loader2.gif">
	    </span>
	</td>
    </tr>
</table>