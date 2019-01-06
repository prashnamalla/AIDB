<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>ONLINE COSMETIC STORE</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <script src="../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <strong>Email: </strong>prashna.malla@gmail.com
                &nbsp;&nbsp;
                <strong>Support: </strong>+90-897-678-44
            </div>

        </div>
    </div>
</header>
<!-- HEADER END-->
<div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <h2>Online Cosmetic Store</h2>

                <img src="../../assets/img/633222.jpeg" height='70px' width="70px"/>
            </a>

        </div>

        <div class="left-div">
            <div class="user-settings-wrapper">
                <ul class="nav">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                        </a>
                        <div class="dropdown-menu dropdown-settings">
                            <div class="media">
                                <a class="media-left" href="#">
                                    <img src="../assets/" alt="" class="img-rounded" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Prashna Malla</h4>
                                    <h5>Web Developer & Designer</h5>

                                </div>
                            </div>
                            <hr />
                            <h5><strong>Personal Bio : </strong></h5>
                            Anim pariatur cliche reprehen derit.
                            <hr />
                            <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="editprofile.php" class="btn btn-danger btn-sm">Logout</a>

                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<section class="menu-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="../index.php">HOME</a></li>
                        <li><a href="../productlist.php">PRODUCT LIST</a></li>
                        <li><a href="../category/view.php">CATEGORY LIST</a></li>
                        <li><a href="../user/view.php">USER LIST</a></li>
<!--                        <li><a href="../editprofile.php">EDIT PROFILE</a></li>-->
                        <li><a href="../../includes/logout.php">LOGOUT</a></li>
                        <
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
    include('useraction.php');
?>

<?php

if(isset($_GET["update"])) {
//php 7
    $id = $_GET["userID"] ?? null;
    $where = array("userID" => $id,);
    $row = $obj->select_record("user", $where);
}
?>

<form method="post" action="useraction.php">
    <table class="table table-hover">
        <tr>
            <td><input type="hidden" name="userID" value="<?php echo $id; ?>"></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type="text" class="form-control" value="<?php echo $row["fname"]; ?>" name="fname" placeholder="Enter First Name" required></td>
        </tr>

        <tr>
            <td>Last Name</td>
            <td><input type="text" class="form-control" value="<?php echo $row["lname"]; ?>" name="lname" placeholder="Enter last Name" required></td>
        </tr>
        <tr>
            <td>UserName</td>
            <td><input type="text" class="form-control" value="<?php echo $row["uname"]; ?>" name="uname" placeholder="Enter user Name" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" class="form-control" value="<?php echo $row["email"]; ?>" name="email" placeholder="Enter email" required></td>
        </tr>


        <tr>
            <td>Password</td>
            <td><input type="password" class="form-control" value="<?php echo $row["password"]; ?>" name="password" placeholder="Enter password" required></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" class="form-control" value="<?php echo $row["address"]; ?>" name="address" placeholder="Enter Address" required></td>
        </tr>

        <tr>
            <td>Phone</td>
            <td><input type="text" class="form-control" value="<?php echo $row["phone"]; ?>" name="phone" placeholder="Enter phone" required></td>
        </tr>
        <tr>
            <td>Answer</td>
            <td><input type="text" class="form-control" value="<?php echo $row["ans"]; ?>" name="ans" placeholder="Enter Answer" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="edit" value="Update"></td>
        </tr>
    </table>
</form>
