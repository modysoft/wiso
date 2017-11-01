<?php $user=ClassRegistry::init('User')->findById(SES_ID);
if(!empty($user['User']['password'])) {
    define('NO_PASSWORD',0);
}else {
    define('NO_PASSWORD',1);
}
?>

<div class="tab tab_comon">
    <ul class="nav-tabs">
        <li <?php if(PAGE_NAME == 'profile') {?>class="active" <?php }?>>
            <a href="<?php echo HTTP_ROOT.'users/profile';?>" id="sett_my_profile">
                <div class="fl sett_my_prof"></div>
                <div class="fl">ملفــي</div>
                <div class="cbt"></div>
            </a>
        </li>
        <li <?php if(PAGE_NAME == 'changepassword') {?>class="active" <?php }?>>
            <?php if(NO_PASSWORD) {?>
            <a href="<?php echo HTTP_ROOT.'users/changepassword';?>" id="sett_cpw_prof">
                <div class="fl sett_cpw"></div>
                <div class="fl">عيـن كلمـة سـر</div>
                <div class="cbt"></div>
            </a>
                <?php }else {?>
            <a href="<?php echo HTTP_ROOT.'users/changepassword';?>" id="sett_cpw_prof">
                <div class="fl sett_cpw"></div>
                <div class="fl">تغيير كلمــة الســر</div>
                <div class="cbt"></div>
            </a>
                <?php }?>
        </li>
        <li <?php if(PAGE_NAME == 'email_notifications') {?>class="active" <?php }?>>
            <a href="<?php echo HTTP_ROOT.'users/email_notifications';?>" id="sett_mail_noti_prof">
                <div class="fl sett_mail_noti"></div>
                <div class="fl">التنبيهــات</div>
                <div class="cbt"></div>
            </a>
        </li>
        <li <?php if(PAGE_NAME == 'email_reports') {?>class="active" <?php }?>>
            <a href="<?php echo HTTP_ROOT.'users/email_reports';?>" id="sett_mail_repo_prof">
                <div class="fl sett_mail_repo"></div>
                <div class="fl">التقاريــر البريدســـة</div>
                <div class="cbt"></div>
            </a>
        </li>
        <div class="cbt"></div>
    </ul>
</div>
