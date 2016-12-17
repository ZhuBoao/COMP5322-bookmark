<?php
require_once('./business/bookmark_fns.php');
$errorCode=$_GET['code'];
$message = array("4001"=>"Invalid bookmark url, please check the input.",
    "4002" => "Could not change password, please check your input.",
    "4003" => "Passwords are not the same.",
    "4004" => "New password should be between 6 and 16.",
    "4005" => "You have chosen no bookmarks to delete",
    "3001" => "Invalid username or password.",
    "3002" => "Could not logout.",
    "3003" => "You have not filled the form out correctly-Go back and try again",
    "3004" => "That is not a valid email address.",
    "3005" => "The passwords do not match",
    "3006" => "Password must between 6 and 12 characters",
    "3007" => "Could not reset password."
);
do_html_view_header('PHP Bookmark');
display_page_nav();
?>
<section class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <img style="width: 20%; filter: grayscale(100%); -webkit-filter: grayscale(100%);" src="public_html/image/ezgif.com-crop.gif">
            <h2>Something error happened: </h2>
            <p><?php
                echo $message[$errorCode];
                ?>
            </p>

        </div>
    </div>
</section>

<?php
if($errorCode>4000){
    do_jump_url("member.php",3000);
}
else{
    do_jump_url("login.php",3000);
}
do_html_footer();
?>