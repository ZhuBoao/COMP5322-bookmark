<?php
require_once('./business/bookmark_fns.php');
session_start();
do_html_header('Change Password');

//create short variable names
$old_passwd=$_POST['old_passwd'];
$new_passwd=$_POST['new_passwd'];
$new_passwd2=$_POST['new_passwd2'];

try {
	check_valid_user();
	if (!filled_out($_POST)) {
		do_jump_url("error.php?code=4002",1);
        do_html_footer();
		exit;
	}
	if (strcmp($new_passwd,$new_passwd2)) {
        do_jump_url("error.php?code=4003",1);
        do_html_footer();
        exit;
	}
	if ((strlen($new_passwd)>16)||(strlen($new_passwd)<6)) {
        do_jump_url("error.php?code=4004",1);
        do_html_footer();
        exit;
	}
	change_password($_SESSION['valid_user'],$old_passwd,$new_passwd);
	do_jump_url("information.php?code=2003",1);
} catch (Exception $e) {
    do_jump_url("error.php?code=4002",1);
    do_html_footer();
    exit;
}
do_html_footer();
