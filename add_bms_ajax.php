<?php
require_once('./business/bookmark_fns.php');
session_start();
$new_url=$_POST['new_url'];
try {
    check_valid_user();
    if (!filled_out($_POST)) {
        throw new Exception("Form not completely filled out");
    }

    if (strstr($new_url, 'http://')===false) {
        $new_url="http://".$new_url;
    }

    if (!(@fopen($new_url, 'r'))) {
        throw new Exception("Not valid URL");
    }

    add_bm($new_url);
    echo "true";
} catch (Exception $e) {
    echo "false";
}