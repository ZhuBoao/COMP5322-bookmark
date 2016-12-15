<?php
//include function files for this application
require_once('./business/bookmark_fns.php');
session_start();
//create short variable names
if(empty($_SESSION['valid_user'])){
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    try {
        login($username,$passwd);
        //login
        $_SESSION['valid_user']=$username;
    } catch (Exception $e) {
        //unsucessful login
        do_html_header('Problem:');
        echo "You could not log in.";
        do_jump_url("error.php?code=3001",1);
        do_html_footer();
        exit;
    }
}
else{
    $username = $_SESSION['valid_user'];
}
do_html_view_header('PHP Bookmark');
check_valid_user();
display_page_nav();
?>

    <section class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Bookmarks List</h2>
                <div class="table-responsive">
                    <?php
                    if ($url_array=get_user_urls($_SESSION['valid_user'])) {
                        display_bookmark_list($url_array);
                    }
                    else{
                        display_user_menu();
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="addModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Add Bookmark</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" name="bm_table">
                        <div class="form-group">
<!--                            <label for="url"><span class="glyphicon glyphicon-user"></span> URL</label>-->
                            <input type="text" class="form-control" id="url" placeholder="Enter Bookmark URL">
                        </div>
                        <a id ="addUrlBtn" class="btn btn-default btn-block"><span class="glyphicon glyphicon-plus"></span>ADD</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./resources/jquery/jquery.js"></script>
    <script src="./resources/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./public_html/script/page.js"></script>
<?php
do_html_footer();
?>