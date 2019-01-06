<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Online Cosmetic Collection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Less styles -->
    <!-- Other Less css file //different less files has different color scheam
     <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
     -->
    <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
    <script src="themes/js/less.js" type="text/javascript"></script> -->

    <!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
    <!-- Bootstrap style responsive -->
    <link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 4/2/2018
 * Time: 12:16 PM
 */include ('includes/header.php');
?>

<form class="form-horizontal" method="post" action="" >
    <h3>Login</h3>

        <div class="control-group">
        <label class="control-label" for="input_email">Username</label>
        <div class="controls">
          <input type="text" id="input_uname" name="uname" placeholder="Username">
        </div>
      </div>

    <div class="control-group">
        <label class="control-label" for="inputPassword1">Password </label>
        <div class="controls">
          <input type="password" id="inputPassword1" name="pw" placeholder="Password">
        </div>
        </div>

    <div
            class="g-recaptcha" data-sitekey="6LdG7FIUAAAAACcTQdou8eVrzHC0nV1VrCJH0bOx">

    </div>




<!--    <div class="control-group">-->
<!--        <td><input type="submit" class="btn btn-success" disabled="disabled" id="setCaptcha" value="" /></td>-->
<!--        <td><input type="text" name="captcha" placeholder="Enter code above" id="captcha" class="form-control" /></td>-->
<!--        </tr>-->
<!--    </div>-->
<!--    -->
    <div class="control-group">
            <div class="controls">
                <input class="btn btn-large btn-success" type="submit" name="login" value="Login" />
            </div>
        </div>

         <div class="control-group">
            <div class="controls">
                <input class="btn btn-large btn-success" type="submit" name="login_admin" value="Login as Admin" />
            </div>
        </div>
    </form>

<?php
include ('includes/class/login.php');
include ('includes/class/adminLogin.php');
    if(isset($_POST['login']))
    {
        $uname= $_POST['uname'];
        $pw= $_POST['pw'];
        $encpw= md5($pw);

        $l= new login();
        $l->authenticate($uname,$encpw);

    }

    if (isset($_POST['login_admin'])) {
         $uname= $_POST['uname'];
        $pw= $_POST['pw'];
        $encpw= md5($pw);

        $a= new adminlogin();
        $a->authenticate($uname,$encpw);
    }

?>
<?php
    session_start();
    if(isset($_SESSION['logincust']))
    {
        header('Location: Home.php');
    }
    else
    {
        session_unset();
    }
?>
<?php
            echo '';
            include_once 'loginG.php';
            if(isset($_GET['code'])){
                $gClient->authenticate($_GET['code']);
                $_SESSION['token'] = $gClient->getAccessToken();
                header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
            }
            if (isset($_SESSION['token'])) {
                $gClient->setAccessToken($_SESSION['token']);
            }
            if ($gClient->getAccessToken()) 
            {
                $gpUserProfile = $google_oauthV2->userinfo->get();
                $_SESSION['oauth_provider'] = 'Google'; 
                $_SESSION['oauth_uid'] = $gpUserProfile['id']; 
                $_SESSION['first_name'] = $gpUserProfile['given_name']; 
                $_SESSION['last_name'] = $gpUserProfile['family_name']; 
                $_SESSION['email'] = $gpUserProfile['email'];
                $_SESSION['logincust']='yes';
            } else {
                $authUrl = $gClient->createAuthUrl();
                $output= '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/loging.png" alt="Sign in with Google+" width=222/></a>';
            }
            echo $output;
        ?>

</div>
</html>


<?php
include ('includes/footer.php');
?>
