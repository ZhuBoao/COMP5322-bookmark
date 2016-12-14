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
                        <div class="col-lg-offset-2 col-lg-8">
                            <button type="submit" class="btn btn-default">Login</button>
                            <button type="reset" class="btn btn-default">Reset</button>
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
                    <a href="https://github.com/ZhuBoao/COMP5322-bookmark" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
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
                    <div class="col-lg-5"><p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a></p></div class="col-lg-4">
                </div>
                <div class="row">
                    <div class="col-lg-5"><p>Li   Jian:</p></div>
                    <div class="col-lg-5"><p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a></p></div class="col-lg-4">
                </div>
                <div class="row">
                    <div class="col-lg-5"><p>Zhu  Boao:</p></div>
                    <div class="col-lg-5"><p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a></p></div class="col-lg-4">
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2016</p>
        </div>
    </footer>

    <script src="./resources/jquery/jquery.js"></script>

    <script src="./resources/bootstrap/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="./public_html/script/index.js"></script>

<?php
//display_site_info();
//display_login_form();
do_html_footer();
?>