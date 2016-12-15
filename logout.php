<?php
//include files for this application
require_once('./business/bookmark_fns.php');
session_start();
$old_user=$_SESSION['valid_user'];

unset($_SESSION['valid_user']);
$result_dest=session_destroy();

do_html_header('Logging out');

if (!empty($old_user)) {
	if ($result_dest) {
        do_jump_url("information.php?code=1001",1);
	} else {
        do_jump_url("error.php?code=3002",1);
	}
	
} else {
    do_jump_url("error.php?code=3002",1);
	}
do_html_footer();

