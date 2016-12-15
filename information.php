<?php
require_once('./business/bookmark_fns.php');
$informationCode=$_GET['code'];
$message = array("1001"=>"Logout Success!",
    "2002" => "Welcome! Register Success!",
    "2003" => "Change Password Success!",
    "2004" => "Delete Success!"
);
do_html_view_header('PHP Bookmark');
display_page_nav();
?>
<section class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>
                <?php
                echo $message[$informationCode];
                ?>
            </h2>
        </div>
    </div>
</section>

<?php
if($informationCode>2000){
    do_jump_url("member.php",2000);
}
else{
    do_jump_url("login.php",2000);
}
?>