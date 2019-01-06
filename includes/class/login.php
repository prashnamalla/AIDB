<?php

/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 4/9/2018
 * Time: 7:31 AM
 */

class login
{

    function __construct()
    {

    }

    function authenticate($uname,$pw)
    {


        include ("../../db_connect.php");

        $this->uname=$uname;
        $this->pw=$pw;
        //$encpw=md5($this->pw);
        //echo $this->uname;
        //echo $this->pw;

        $query="SELECT * FROM `user` WHERE uname='$this->uname' AND password='$this->pw'";
        $res=mysqli_query($conn,$query);
        $num= mysqli_num_rows($res);

        if($num>0)
        {

            $_SESSION['login']="true";
            $_SESSION['UserName']="$this->uname";

            echo "<script> window.location.href ='user.php';</script>";

        }
        else
        {
           // header('location:.php');
            echo "<font color='red' ><h5> LOGIN FAILED.</h5> </font>";
        }
    }
}

?>