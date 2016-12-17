<?php
require_once('./business/bookmark_fns.php');
do_html_header("Resetting Password");

$username=$_POST['username'];

try {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
	$password=implode($pass);
	notify_password($username,$password);
	do_jump_url("information.php?1002",1);
} catch (Exception $e) {
//    echo $e->getMessage();
    do_jump_url("error.php?3007",1);
}
do_html_footer();
