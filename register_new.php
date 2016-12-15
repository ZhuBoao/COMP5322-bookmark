<?php

require_once('./business/bookmark_fns.php');

$email=$_POST['email'];
$username=$_POST['username'];
$passwd=$_POST['passwd'];
$passwd2=$_POST['passwd2'];

session_start();


try {
    do_html_header('Registration');

	if (!filled_out($_POST)) {
        do_jump_url("error.php?code=3003",1);
        do_html_footer();
        exit;
	}

	if (!valid_email($email)) {
        do_jump_url("error.php?code=3004",1);
        do_html_footer();
        exit;
	}

	if ($passwd!=$passwd2) {
        do_jump_url("error.php?code=3005",1);
        do_html_footer();
        exit;
	}
	if ((strlen($passwd)<6)||(strlen($passwd)>12) ){
        do_jump_url("error.php?code=3006",1);
        do_html_footer();
        exit;
	}

	register($username,$email,$passwd);
            
	$_SESSION['valid_user']=$username;

    do_jump_url("information.php?code=2002",1);

	do_html_footer();

} catch (Exception $e) {
	do_html_header('Problem');
    do_jump_url("error.php?code=3003",1);
	do_html_footer();
	exit;
}

