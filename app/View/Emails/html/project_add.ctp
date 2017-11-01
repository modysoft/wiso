<body style="width:100%; margin:0; padding:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; background-color:#ffffff;">
<table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" style="height:auto !important; margin:0; padding:0; width:100% !important; background-color:#F0F0F0;color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:19px; margin-top:0; padding:0; font-weight:normal;">
	<tr>
		<td>
        <div id="tablewrap" style="width:100% !important; max-width:600px !important; text-align:center; margin:0 auto;">
		      <table id="contenttable" width="600" align="center" cellpadding="0" cellspacing="0" border="0" style="background-color:#FFFFFF; margin:0 auto; text-align:center; border:none; width: 100% !important; max-width:600px !important;border-top:8px solid #5191BD">
            <tr>
                <td width="100%">
                   <table bgcolor="#FFF" border="0" cellspacing="0" cellpadding="20" width="100%">
                        <tr>
                            <td width="100%" bgcolor="#FFF" style="text-align:left;">
                            	<p>
                                    السلام عليكم، <?php echo $to_name;?>
                                </p>
								
								<p><?php echo ucfirst($from_name); ?>  قام بإضافتك ل <b><?php echo $projName;?></b> في <?php echo ucfirst($company_name)?>.</p>
								
								<p>انقر على الرابط أدناه لقراءة الرسالة الأصلية، عرض التعليقات والرد وتحميل المرفقات</p>
								<?php if(!$multiple) { 
									$button = "فتح شاشة المشروع";
								}
								else {
									$button = "فتح شاشة المشاريع";
								}
								?>
								
								<a style="font-weight:bold; text-decoration:none;" href="<?php echo HTTP_ROOT.'users/login/?project='.$projUniqId;?>" target='_blank'><div style="display:block; max-width:100% !important; width:auto !important;margin:auto; height:auto !important;background-color:#0EA426;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;border-radius:10px;color:#ffffff;font-size:16px;text-align:center"><?php echo $button; ?></div></a>
								
                                <br/>
								
								<p>،مع طيب التحية<br/>
								إدارة التخطيط والمتابعة</p>
                            </td>
                        </tr>
                   </table>
                  
                   <table bgcolor="#F0F0F0" border="0" cellspacing="0" cellpadding="10" width="100%" style="border-top:2px solid #F0F0F0;margin-top:10px;border-bottom:3px solid #2489B3">
                        <tr>
                            <td width="100%" bgcolor="#ffffff" style="text-align:center;">
                            	<p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:11px; line-height:14px; margin-top:0; padding:0; font-weight:normal;padding-top:5px;">
									<!--<?php echo NEW_EMAIL_FOOTER; ?>-->

									مشروع نجـــاح هو الخطة التنفيذية، التي بموجبها تقوم وزارة المالية بتطبيق فلسفة إدارية جديدة تقوم على قياس الأداء المؤسسي للهياكل التنظيمية التابعة لها لتقدير العائد الحقيقي من الأعمال والإنجازات وتوافقها مع مستهدفات استراتيجية الوزارة بما يعزز الأولويات وترشيد الإنفاق</a>
									
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        </div>
		</td>
	</tr>
</table> 
</body>
