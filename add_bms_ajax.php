<?php
require_once('./business/bookmark_fns.php');
session_start();
$new_url=$_POST['new_url'];
try {
    check_valid_user();
    if (!filled_out($_POST)) {
        throw new Exception("Form not completely filled out");
    }

    if (mb_strstr($new_url, 'http://')===false) {
        $new_url="http://".$new_url;
    }

    if (!(@fopen($new_url, 'r'))) {
        throw new Exception("Not valid URL");
    }

    add_bm($new_url);
    echo "true";

    if ($url_array=get_user_urls($_SESSION['valid_user'])) {
        display_user_urls($url_array);
    }

} catch (Exception $e) {
    echo "false";
}