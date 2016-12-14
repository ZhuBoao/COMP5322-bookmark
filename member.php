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
        do_html_url('login.php','login');
        do_html_footer();
        exit;
    }
}
else{
    $username = $_SESSION['valid_user'];
}
do_html_view_header('PHP Bookmark');
check_valid_user();
?>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="member.php">
                    <i class="fa fa-play-circle"></i> <span class="light">PHP</span> Bookmark
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="member.php">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll modalBtn" href="#">Add Bookmark</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Bookmarks List</h2>
                <div class="table-responsive">
                    <?php
                    if ($url_array=get_user_urls($_SESSION['valid_user'])) {
                        display_bookmark_list($url_array);
                    }
                    display_user_menu();
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
                    <form role="form" name="bm_table" action="./add_bms_ajax.php" method="post">
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> URL</label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter Bookmark URL">
                        </div>
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-plus"></span>ADD</button>
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