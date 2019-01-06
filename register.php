<!DOCTYPE html>
<html lang="en">
<?php 
include ('includes/head.php')   
?>

<?php
include ('includes/header.php');
?>

<form class="form-horizontal" method='POST' action="">
    <h3>Registration</h3>
        <h4>Your personal information</h4>
        <div class="control-group">
        <div class="controls">
        </div>
        </div>
    <div class="control-group">
        <label class="control-label" for="inputFname1">Username </label>
        <div class="controls">
            <input type="text" id="inputFname1" name="uname" placeholder="User Name">
        </div>
    </div>
        <div class="control-group">
            <label class="control-label" for="inputFname1">First name </label>
            <div class="controls">
              <input type="text" id="inputFname1" name="fname" placeholder="First Name">
            </div>
         </div>
         <div class="control-group">
            <label class="control-label" for="inputLnam">Last name </label>
            <div class="controls">
              <input type="text" id="inputLnam" name="lname" placeholder="Last Name">
            </div>
         </div>
        <div class="control-group">
        <label class="control-label" for="input_email">Email</label>
        <div class="controls">
          <input type="email" id="input_email" name="email" placeholder="Email">
        </div>
      </div>      
    <div class="control-group">
        <label class="control-label" for="inputPassword1">Password </label>
        <div class="controls">
          <input type="password" name="password" id="inputPassword1" placeholder="Password">
        </div>
      </div>
    <div class="control-group">
        <label class="control-label" for="inputPassword1">Re-enter Password </label>
        <div class="controls">
            <input type="password" name="repassword" id="inputPassword1" placeholder="Re-enter Password">
        </div>
    </div>
        <div class="control-group">
            <label class="control-label" for="address">Address</label>
            <div class="controls">
              <input type="text" id="address" name="address" placeholder="Adress"/>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="phone">Cell phone </label>
            <div class="controls">
              <input type="text"  name="phone" id="phone" placeholder="phone"/> 
            </div>
        </div>

    <div class="control-group">
        <label class="control-label" for="phone">Your Favourite Color? (Security Question) </label>
        <div class="controls">
            <input type="text"  name="ans" id="phone" placeholder="Answer"/>
        </div>
    </div>

    <div class="g-recaptcha" data-sitekey="6LdG7FIUAAAAACcTQdou8eVrzHC0nV1VrCJH0bOx"></div>

    <div class="control-group">
            <div class="controls">
                <input type="submit" class="btn btn-large btn-success" name="Register" type="submit" value="Register" />
            </div>
        </div>

    <div>
        <h6> Already Registered?? </h6>
        <a href="login.php"><font color='green'> <h3>CLICK HERE to login</h3> </font></a>
    </div>

    </form>
</div>


<?php

    include ('includes/class/register.php');

if(isset($POST['g-recaptcha-response'])&& $_POST['g-recaptcha-response']){
    var_dump($_POST);

    $secret = "6LdG7FIUAAAAAN91lYiv9BYU8eUgcAY0gE0sziHM";
    $ip = $_SERVER['REMOTE_ADDR'];
    $captcha = $POST['g-recaptcha-response']."dsa";
    $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&captcha=$captcha&remoteip=$ip");
    var_dump($rsp);
    $arr = json_decode($rsp,true);
    if ($arr['success']){
        echo 'done';
    }
    else{
        echo 'SPam';
    }
}

    if(isset($_POST['Register']))
    {
        $uname=$_POST['uname'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $repassword=$_POST['repassword'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $ans=$_POST['ans'];
        $encpw1=md5($password);


    if ($password!=$repassword)
    {
        echo "<font color='red' ><h4> Password and Re-Password doesnot match. </h4></font>";
    }
    elseif ($uname==null || $fname==null || $lname==null || $email==null || $password==null || $repassword==null || $address==null ||
        $phone==null || $ans==null)
    {
        echo "<font color='red' ><h4> Check your fields which might be empty.</h4> </font>";
    }

    else{
        $r= new register();
        $r->addUser($uname,$fname,$lname, $email,$encpw1,$address,$phone,$ans);
    }


    }

?>



<?php
include ('includes/footer.php');
?>

</html>
