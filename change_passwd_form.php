<?php
 require_once('./business/bookmark_fns.php');
session_start();
do_html_view_header('Change password - PHP Bookmark');
check_valid_user();
display_page_nav();
?>

    <section class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="table-responsive">
                    <form action="./change_passwd.php" method="post">
                        <table class="table">
                            <tr><td>Old password:</td>
                                <td><input type="password" name="old_passwd" class="form-control"
                                           size="16" maxlength="16"/></td>
                            </tr>
                            <tr><td>New password:</td>
                                <td><input type="password" name="new_passwd" class="form-control"
                                           size="16" maxlength="16"/></td>
                            </tr>
                            <tr><td>Repeat new password:</td>
                                <td><input type="password" name="new_passwd2" class="form-control"
                                           size="16" maxlength="16"/></td>
                            </tr>
                            <tr><td colspan="2" align="center">
                                    <input type="submit" class="btn btn-default" value="Change password"/>
                                </td></tr>
                        </table>
                </div>
            </div>
        </div>
    </section>
    <script src="./resources/jquery/jquery.js"></script>
    <script src="./resources/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./public_html/script/page.js"></script>
<?php
do_html_footer();
?>