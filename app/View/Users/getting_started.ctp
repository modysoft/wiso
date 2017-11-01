<?php  ?>
<style type="text/css">
    .breadcrumb_div{display:none}
</style>
<div class="get_started_outer">
    <?php if(SES_TYPE<3) { ?>
    <div class="get_hd_bg">إبـدء من هنـــا</div>
    <div class="get_det">
        <div class="fl get_img get_prj_bg" onclick="newProject();" style="cursor: pointer;">
            <div class="get_prj"></div>
            <div class="get_img_txt">المشاريع</div>
        </div>
        <div class="get_text fl">
            <div class="get_title"><?php echo $this->Html->link('إنشاء وتعيين المشروع','javascript:void(0);',array('onclick'=>'newProject();','class'=>'get_title'));?> <?php echo !empty($projects)?$this->Html->image('yes.png'):'';?> </div>
            <ul style="padding:5px 15px;margin-top:0px;">
                <li>
                     حدد اسم المشروع الخاص بك بشكل مناسب، واختر اسم قصير وفقا لذلك
                </li>
                <li>
               أضف أعضاء فريقك الذين سوف يعملون معك في المشروع
                </li>

            </ul>
        </div>
        <div class="cb"></div>
    </div>
    <div class="get_det">
        <div class="fl get_img get_usr_bg" onclick="newUser();" style="cursor: pointer;">
            <div class="get_user"></div>
            <div class="get_img_txt">المستخدم</div>
        </div>
        <div class="get_text fl">
            <div class="get_title"><?php echo $this->Html->link('دعوة المستخدم','javascript:void(0);',array('onclick'=>'newUser();','class'=>'get_title'));?> <?php echo !empty($invitations)?$this->Html->image('yes.png'):'';?></div>
            <ul style="padding:5px 15px;margin-top:0px;">
                <li>
                   إرسال دعوة إلى عضو الفريق - ضع فواصل لتعريف أكثر من بريد الإلكتروني
                </li>
                <li>
                    يجب على المدعوين إعداد حسابهم باستخدام الرابط المرسل في البريد الإلكتروني
                </li>
                <li>
                    حدد المشاريع لأعضاء فريقك أثناء دعوتهم
                </li>
                <li>
                   يمكنك تعيين / إزالة المشاريع من أعضاء فريقك في أي وقت من إدارة قسم المستخدمين.
                </li>
            </ul>
        </div>
        <div class="cb"></div>
    </div>
    <div class="get_det">
        <div class="fl get_img get_tsk_bg"  onclick="creatask();" style="cursor: pointer;">
            <div class="get_task"></div>
            <div class="get_img_txt">المهام</div>
        </div>
        <div class="get_text fl">
            <div class="get_title"><?php echo $this->Html->link('إنشاء','javascript:void(0);',array('onclick'=>'creatask();','class'=>'get_title'));?> أو <?php echo $this->Html->link('إدخال المهمة','/import-export',array('class'=>'get_title'));?> <?php echo !empty($tasks)?$this->Html->image('yes.png'):'';?></div>
            <ul style="padding:5px 15px;margin-top:0px;">
                <li>
                    أدخل عنوانا، أو ضع تاريخ الاستحقاق أو عين الأولوية وأنشئ مهمة في إطار مشروع ما
                </li>
                <li>
                    تعيين مهمة لعضو الفريق، إرفاق الملفات  أثناء إنشاء مهمة
                </li>
                <li>
                    يمكنك أيضا إدخال مجموعة من المهام من ملف خازجي عبر إدارة المشروع
                </li>
            </ul>
        </div>
        <div class="cb"></div>
    </div>
    
     <div class="get_hd_bg" style="cursor:pointer" onclick="window.location='<?php echo HTTP_ROOT; ?>task-type'">أنواع المهام الخاصة</div>
    <div class="get_det">
        <div class="fl get_img get_tsk_bg" style="cursor:pointer;background:#FFAAD4" onclick="window.location='<?php echo HTTP_ROOT; ?>task-type'">
            <div class="get_email" style="background:none;color:#FFF;width:auto;font-weight:bold;font-size:15px;height:55px;">
            	Custom<br/>نوع المهمة
            </div>
        </div>
        <div class="get_text fl">
            <div class="get_title"></div>
            <ul style="padding:5px 15px;margin-top:0px;">
            	<li>
                    يمكنك تصنيف المهمة باستخدام أنواع المهام
                </li>
                <li>
                    لا يهم ما هو نشاطك،  فمن خلال النظام يمكنك تحديد نوع المهمة وإضافة المهام تحتها
                </li>
                <li>
                   يمكنك إزالة نوع المهمة الافتراضي من خلال إلغاء تحديد مربع الاختيار وحفظ التغييرات
                </li>
            </ul>
        </div>
        <div class="cb"></div>
    </div>
    
    <?php } ?>
    <div class="get_hd_bg" >جاوب من خلال بريدك الألكتروني</div>
    <div class="get_det">
        <div class="fl get_img get_eml_bg" >
            <div class="get_email"></div>
            <div class="get_img_txt">Email</div>
        </div>
        <div class="get_text fl">
            <div class="get_title"></div>
            <ul style="padding:5px 15px;margin-top:0px;">
                <li>
                    يمكنك الرد على البريد الإلكتروني للمهمة المرسلة اليك وستظهر في النظام تلقائيا، ولكن لا تغيير في موضوع الرسالة
                </li>
                <li>
                    سيتم نشر رد البريد الإلكتروني الخاص بك على النظام وفق المهمة
                </li>
                <li>
                    الرد على مهمة ممكن خلال الحركة والتنقل من هاتفك النقال عبر البريد الإلكتروني
                </li>
            </ul>
        </div>
        <div class="cb"></div>
    </div>
    <?php
	if (defined('NODEJS_HOST') && trim(NODEJS_HOST)) {
	?>
   	<div class="get_hd_bg" style="cursor:pointer" onclick="window.location='<?php echo HTTP_ROOT; ?>email_notifications'">Desktop Notification</div>
    <div class="get_det">
        <div class="fl get_img get_not_bg" style="cursor:pointer" onclick="window.location='<?php echo HTTP_ROOT; ?>email_notifications'">
            <div class="get_not" style="background:url('<?php echo HTTP_ROOT; ?>img/bell.png');height:25px;width:27px;"></div>
            <div class="get_img_txt">Notification</div>
        </div>
        <div class="get_text fl">
            <div class="get_title"></div>
            <ul style="padding:5px 15px;margin-top:0px;">
                <li>
                   The Desktop Notification works on heigher versions of most of the browsers.
                   Firefox 22 and above, Chrome 32 and above, Safari 6 on Mac OSX 10.8+
                </li>
                <li>
                   You'll see a pop-up when a new task or reply arrives so you can keep track of your Tasks even when you're not looking at Orangescrum.
                </li>
                <li>
                    Turn the desktop notification On or Off in the "<?php echo $this->Html->link('Notifications','/users/email_notifications');?>" page.
                </li>
            </ul>
        </div>
        <div class="cb"></div>
    </div>
    <?php
	}
	?>
    <div class="get_hd_bg">الإعدادات</div>
    <div class="get_det">
		<a class="get_title" href="<?php echo HTTP_ROOT; ?>users/profile" style="font-size: 14px;">
        <div class="fl get_img get_tm_bg">
            <div class="get_time"></div>
            <div class="get_img_txt">الإعدادات</div>
        </div>
	</a>
        <div class="get_text fl">
            <div class="get_title"><?php echo $this->Html->link('الملف الشخصي','/users/profile',array('class'=>'get_title'));?></div>
            <ul style="padding:5px 15px;margin-top:0px;">
                <li>
                   إضفاء الطابع الشخصي على حسابك الخاص  عن طريق إعداد تفاصيل ملفك الشخصي والمنطقة الزمنية.
                </li>
                <li>
                    أضف صورتك أو الصورة التي تعبر عنك لتكون دالة عن عملك
                </li>
            </ul>
        </div>
        <div class="cb"></div>
    </div>
    <div class="get_det">
	<a class="get_title" href="<?php echo HTTP_ROOT; ?>users/email_notifications" style="font-size: 14px;">
        <div class="fl get_img get_not_bg">
            <div class="get_not"></div>
            <div class="get_img_txt">التنبيهات</div>
        </div>
	</a>
        <div class="get_text fl">
            <div class="get_title"><?php echo $this->Html->link('التنبيهات','/users/email_notifications',array('class'=>'get_title'));?></div>
            <ul style="padding:5px 15px;margin-top:0px;">
                <li>
                    يتم تعيين إشعار البريد الإلكتروني إلى "لا" بشكل افتراضي، للحصول على البريد الإلكتروني لتلك المهمة  فقط عند تحديد المرسل لهم عند نشر المهمة
                </li>
                <li>
تعيين إلى "نعم"، للحصول على جميع رسائل البريد الإلكتروني ذات الصلة بالمهام من جميع المشاريع الخاصة بك والمشارك بها                </li>

            </ul>
        </div>
        <div class="cb"></div>
    </div>
    <div class="get_det" style="border-bottom:none">
	<a class="get_title" href="<?php echo HTTP_ROOT; ?>users/email_reports" style="font-size: 14px;">
        <div class="fl get_img get_emlrpt_bg">
            <div class="get_emlrpt"></div>
            <div class="get_img_txt">التقارير</div>
        </div>
	</a>
        <div class="get_text fl">
            <div class="get_title"><?php echo $this->Html->link('التقارير البريدية','/users/email_reports',array('class'=>'get_title'));?></div>
            <ul style="padding:5px 15px;margin-top:0px;">
                <li>
                    تخصيص إعدادات تقارير البريد الإلكتروني
                </li>
                <li>
                    حدد المشاريع وحدد إعدادات التحديث اليومية
                </li>
            </ul>
        </div>
        <div class="cb"></div>
    </div>
</div>