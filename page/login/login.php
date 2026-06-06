 
<?php 

include "config/config.php";
include "layout/header_lib.php";
$db=new database();
?>

<link rel="stylesheet" type="text/css" href="page/login/style/style.css">
<script type="text/javascript" src="page/login/js/script.js"></script>
<script type="text/javascript" src="page/login/js/ajax.js"></script>

<!DOCTYPE html>
<html>
<head>
  <title>Login || <?php echo $db->site_name; ?></title>
</head>

<body style="background-size: 100%;">
<div class="container" style="width: 100%">

  <div class="row">
    <div class="col-md-4  col-sm-12"></div>
    <div class="col-md-4 col-sm-12">
    <div id="login-box" style="margin-top: 45px;">
        <div class="header_box">Login Your ID</div>
        <div class="logo">
            <h1 class="logo-caption"><?php echo $db->site_name; ?></h1>
        </div>
        <div id="loader_area" style="display: none;"><?php loader(); ?></div>
        <div class="controls" id="login_body">
            <div id="error_msg" class="error_msg" style="color: #F64343;display: none;">
              <span class="glyphicon glyphicon-remove error_icon"></span><br/>
              <span id="error_msg_text"></span>
            </div>
            
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" autocomplete="off" type="text" placeholder="Username" id="uname" name="uname">
            </div>
            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" id="pass" name="pass" placeholder="Password">
            </div>
            
            <button type="submit" style="font-size: 16px;" id="login_btn" onclick="login()" name="login" class="btn btn-default btn-block btn-custom">Login</button> 
        </div>

        <div class="footer_login">Developed By: <a class="a_footer" href="https://github.com/mai-g0">Yvonne Maigo</a></div>
        
    </div>
</div>

</div>
<div id="particles-js"></div>
</div>

</body>
</html>


<?php

function loader(){
  ?>
<center>  
<div class="lds-css ng-scope"><div style="width:100%;height:100%" class="lds-ellipsis"><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div></div>
 </center>

  <?php
}

?>

<style type="text/css">

body, html {
    background: linear-gradient(135deg, #0a0a2e, #1a0030);
    background-size: cover;
}

#login-box {
    background: rgba(0, 20, 60, 0.95) !important;
}

.header_box {
    background: #4CAF82 !important;
}

.icon {
    background: #4CAF82 !important;
}

#login-box button.btn-custom {
    background: #4CAF82 !important;
    border-color: #4CAF82 !important;
}

#login-box button.btn-custom:hover {
    background: #3d9e6e !important;
}

.a_footer {
    color: #4CAF82 !important;
}

</style>