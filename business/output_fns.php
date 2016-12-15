<?php
function do_html_header($title){
?>
<html>
<head>
	<title><?php echo $title;?></title>
    <link rel="stylesheet" href="./public_html/stylesheet/index.css">
    <!-- Bootstrap Core CSS -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<?php
}
function do_html_footer() {
  // print an HTML footer
?>
  </body>
  </html>
<?php
}

function do_html_view_header($title){
?>
<html>
<head>
	<title><?php echo $title;?></title>
    <link rel="stylesheet" href="./public_html/stylesheet/main.css">
    <!-- Bootstrap Core CSS -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>


<?php
}
function do_html_heading($heading) {
  // print heading
?>
  <h2><?php echo $heading;?></h2>
<?php
}

function do_html_URL($url, $name) {
  // output URL as link and br
?>
  <br /><a href="<?php echo $url;?>"><?php echo $name;?></a><br />
<?php
}

function display_site_info() {
  // display some marketing info
?>
	<ul>
	<li>Store your bookmarks online with us!</li>
	<li>See what other users use!</li>
	<li>Share your favorite links with others!</li>
	</ul>
<?php
}

function display_login_form() {
?>
	<p><a href="./register_form.php">Not a member?</a></p>
	<form method="post" action="./member.php">
	<table bgcolor="#cccccc">
	<tr>
	 <td colspan="2">Members log in here:</td>
	<tr>
	 <td>Username:</td>
	 <td><input type="text" name="username"/></td></tr>
	<tr>
	 <td>Password:</td>
	 <td><input type="password" name="passwd"/></td></tr>
	<tr>
	 <td colspan="2" align="center">
	 <input type="submit" value="Log in"/></td></tr>
	<tr>
	 <td colspan="2"><a href="./forgot_form.php">Forgot your password?</a></td>
	</tr>
	</table></form>
<?php
}

function display_registration_form() {
?>
 <form method="post" action="./register_new.php">
 <table bgcolor="#cccccc">
   <tr>
     <td>Email address:</td>
     <td><input type="text" name="email" size="30" maxlength="100"/></td></tr>
   <tr>
     <td>Preferred username <br />(max 16 chars):</td>
     <td valign="top"><input type="text" name="username"
         size="16" maxlength="16"/></td></tr>
   <tr>
     <td>Password <br />(between 6 and 16 chars):</td>
     <td valign="top"><input type="password" name="passwd" size="16" maxlength="16"/></td></tr>
   <tr>
     <td>Confirm password:</td>
     <td><input type="password" name="passwd2" size="16" maxlength="16"/></td></tr>
   <tr>
     <td colspan=2 align="center">
     <input type="submit" value="Register"></td></tr>
 </table></form>
<?php

}

function display_bookmark_list($url_array) {
  global $bm_table;
  $bm_table = true;
?>
<form name="bm_table" action="./delete_bms.php" method="post">
  <table class="table">
  <?php
  $color = "#cccccc";
  echo "<tr bgcolor=\"".$color."\"><td><strong>Bookmark</strong></td>";
  echo "<td><strong>Delete?</strong></td></tr>";
  if ((is_array($url_array)) && (count($url_array) > 0)) {
    foreach ($url_array as $url)  {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      //remember to call htmlspecialchars() when we are displaying user data
      echo "<tr bgcolor=\"".$color."\"><td><a target=\"_blank\" href=\"".$url."\">".htmlspecialchars($url)."</a></td>
            <td><input type=\"checkbox\" name=\"del_me[]\"
                value=\"".$url."\"/></td>
            </tr>";
    }
  } else {
    echo "<tr><td>No bookmarks on record</td></tr>";
  }
?>
  </table>

<hr />
<a href="#" class="modalBtn btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add Bookmark</a> &nbsp;|&nbsp;
<?php
  // only offer the delete option if bookmark table is on this page
  global $bm_table;
  if ($bm_table == true) {
    echo "<button href=\"#\" class=\"btn btn-default\"  type='submit'><span class=\"glyphicon glyphicon-remove\"></span> Delete BM</button> &nbsp;|&nbsp;";
  }
?>
<a href="./member.php" class="btn btn-default"><span class="glyphicon glyphicon-th-list"></span> Recommend URLs</a>
<hr />
</form>
<?php
}
function display_user_menu(){
?>
<hr />
<a href="#" class="modalBtn btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add Bookmark</a> &nbsp;|&nbsp;
<?php
  // only offer the delete option if bookmark table is on this page
  global $bm_table;
  if ($bm_table == true) {
    echo "<a href=\"#\" class=\"btn btn-default\"  onClick=\"bm_table.submit();\"><span class=\"glyphicon glyphicon-remove\"></span> Delete BM</a> &nbsp;|&nbsp;";
  }
?>
<a href="./member.php" class="btn btn-default"><span class="glyphicon glyphicon-th-list"></span> Recommend URLs</a>
<hr />
<?php
}

function display_add_bm_form() {
  // display the form for people to ener a new bookmark in
?>
<form name="bm_table" action="./add_bms.php" method="post">
<table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
<tr><td>New BM:</td>
<td><input type="text" name="new_url" value="http://"
     size="30" maxlength="255"/></td></tr>
<tr><td colspan="2" align="center">
    <input type="submit" value="Add bookmark"/></td></tr>
</table>
</form>
<?php
}

function display_password_form() {
  // display html change password form
?>
   <br />
   <form action="./change_passwd.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Old password:</td>
       <td><input type="password" name="old_passwd"
            size="16" maxlength="16"/></td>
   </tr>
   <tr><td>New password:</td>
       <td><input type="password" name="new_passwd"
            size="16" maxlength="16"/></td>
   </tr>
   <tr><td>Repeat new password:</td>
       <td><input type="password" name="new_passwd2"
            size="16" maxlength="16"/></td>
   </tr>
   <tr><td colspan="2" align="center">
       <input type="submit" value="Change password"/>
   </td></tr>
   </table>
   <br />
<?php
}

function display_forgot_form() {
  // display HTML form to reset and email password
?>
   <br />
   <form action="./forgot_passwd.php" method="post">
   <table width="250" cellpadding="2" cellspacing="0" bgcolor="#cccccc">
   <tr><td>Enter your username</td>
       <td><input type="text" name="username" size="16" maxlength="16"/></td>
   </tr>
   <tr><td colspan=2 align="center">
       <input type="submit" value="Change password"/>
   </td></tr>
   </table>
   <br />
<?php
}

function display_recommended_urls($url_array) {
  // similar output to display_user_urls
  // instead of displaying the users bookmarks, display recomendation
?>
  <br />
  <table width="300" cellpadding="2" cellspacing="0">
<?php
  $color = "#cccccc";
  echo "<tr bgcolor=\"".$color."\">
        <td><strong>Recommendations</strong></td></tr>";
  if ((is_array($url_array)) && (count($url_array)>0)) {
    foreach ($url_array as $url) {
      if ($color == "#cccccc") {
        $color = "#ffffff";
      } else {
        $color = "#cccccc";
      }
      echo "<tr bgcolor=\"".$color."\">
            <td><a href=\"".$url."\">".htmlspecialchars($url)."</a></td></tr>";
    }
  } else {
    echo "<tr><td>No recommendations for you today.</td></tr>";
  }
?>
  </table>
<?php
}
function display_page_nav(){
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
                        <a class="page-scroll" href="change_passwd_form.php">Change Password</a>
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
<?php
}
function do_jump_url($url,$timeout){
?>
<script type="text/javascript">
     setTimeout(function(){
         window.location.assign("<?php echo $url?>");
     },<?php echo $timeout?>)
</script>


<?php
}

?>