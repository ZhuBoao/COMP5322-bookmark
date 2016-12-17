<?php
require_once('./business/bookmark_fns.php');
do_html_header('PHP Bookmark');
?>
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
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
                        <a class="page-scroll" href="#login">Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Code</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">PHP Bookmark</h1>
                        <p class="intro-text">Store your bookmarks online with us!
                            <br>COMP 5322 Project</p>
                        <a href="#login" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Login Section -->
    <section id="login" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-6">
                <h2>PHP Bookmark</h2>
                <p>Store your bookmarks online with us!</p>
                <p>See what other users use!</p>
                <p>Share your favorite links with others!</p>
                <button id="registerBtn" class="btn btn-default">Join Us</button>
            </div>
            <div class="col-lg-6">
                <form class="form-horizontal" action="./member.php" method="post">
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="username">Username:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="username" placeholder="Enter username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="passwd">Password:</label>
                        <div class="col-lg-6">
                            <input type="password" class="form-control" name="passwd" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-8">
                            <button type="submit" class="btn btn-default">Login</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                            <a id="forgetBtn" class="btn btn-default">I Forget</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>View Source Code</h2>
                    <p>You can view our project source code on Github.</p>
                    <a target="_blank" href="https://github.com/ZhuBoao/COMP5322-bookmark" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Our Team Member</h2>
                <div class="row">
                    <div class="col-lg-5"><p>Gong Qing:</p></div>
                    <div class="col-lg-6"><p><a href="mailto:queen-gina.gong@connect.polyu.hk">queen-gina.gong@connect.polyu.hk</a></p></div class="col-lg-4">
                </div>
                <div class="row">
                    <div class="col-lg-5"><p>Li   Jian:</p></div>
                    <div class="col-lg-6"><p><a href="mailto:leonardo.li@connect.polyu.hk">leonardo.li@connect.polyu.hk</a></p></div class="col-lg-4">
                </div>
                <div class="row">
                    <div class="col-lg-5"><p>Zhu  Boao:</p></div>
                    <div class="col-lg-6"><p><a href="mailto:boao.zhu@connect.polyu.hk">boao.zhu@connect.polyu.hk</a></p></div class="col-lg-4">
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Build For PolyU COMP5322</p>
        </div>
    </footer>

    <div class="modal fade" id="registerModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2>Join Us Now</h2>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" name="bm_table" action="register_new.php" method="post">
                        <div class="form-group">
                            <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email address:</label>
                            <input type="text" class="form-control" name="email" size="30" maxlength="100" placeholder="Enter E-mail Address">
                        </div>
                        <div class="form-group">
                            <label for="username"><span class="glyphicon glyphicon-user"></span> Preferred username (max 16 chars):</label>
                            <input type="text" class="form-control" name="username" size="16" maxlength="16" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="passwd"><span class="glyphicon glyphicon-eye-open"></span> Password (between 6 and 16 chars):</label>
                            <input type="password" class="form-control" name="passwd" size="16" maxlength="16" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <label for="passwd"><span class="glyphicon glyphicon-eye-open"></span> Confirm password:</label>
                            <input type="password" class="form-control" name="passwd2" size="16" maxlength="16" placeholder="Enter Password">
                        </div>
                        <button type="submit" class="btn btn-default btn-block"><span class="glyphicon glyphicon-ok"></span>Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="forgetModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2>Forget Password</h2>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form action="forgot_passwd.php" method="post">
                        <div class="form-group">
                            <label for="username"><span class="glyphicon glyphicon-user"></span> Enter Your Username :</label>
                            <input type="text" class="form-control" name="username" size="16" maxlength="16" placeholder="Enter Username">
                        </div>
                        <button type="submit" class="btn btn-default btn-block"><span class="glyphicon glyphicon-ok"></span>Get Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="./resources/jquery/jquery.js"></script>

    <script src="./resources/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="./public_html/script/index.js"></script>

<?php
//display_site_info();
//display_login_form();
do_html_footer();
?>