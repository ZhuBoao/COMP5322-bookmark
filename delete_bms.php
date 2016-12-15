<?php
require_once('./business/bookmark_fns.php');
session_start();

//create short variable names
$del_me=$_POST['del_me'];
$valid_user=$_SESSION['valid_user'];

do_html_header('Deleting bookmark');
check_valid_user();

if (!filled_out($_POST)) {
	do_jump_url("error.php?code=4005",1);
	do_html_footer();
	exit;

} else {
	if (count($del_me)>0) {
		foreach ($del_me as $del) {
			if (delete_bm($valid_user,$del)) {
				echo "delete ".htmlspecialchars($del)."<br/>";
				// echo "delete ".$del."<br/>";
			} else {
				echo "Could not delete ".htmlspecialchars($del)."<br>";
			}
			
		}
		
	} else {
		echo "No bookmarks selected for deletion";
	}
}

//get the bookmarks this user have saved
if ($url_array=get_user_urls($valid_user)) {
	display_user_urls($url_array);
}
do_jump_url("information.php?code=2004",1);
do_html_footer();

