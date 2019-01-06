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
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
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
                        <li><a href="../index.php">SEARCH</a></li>
                        <li><a href="../product/view.php">PRODUCT LIST</a></li>
                        <li><a href="../category/view.php">CATEGORY LIST</a></li>
                        <li><a href="../user/view.php">USER LIST</a></li>
                        <li><a href="../editprofile.php">EDIT PROFILE</a></li>
                        <li><a href="../../includes/logout.php">LOGOUT</a></li>
                        <
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
    include('action.php');
?>

<?php

if(isset($_GET["update"])) {
//php 7
    $id = $_GET["categoryID"] ?? null;
    $where = array("categoryID" => $id,);
    $row = $obj->select_record("category", $where);
}
?>

<form method="post" action="action.php">
    <table class="table table-hover">
        <tr>
            <td><input type="hidden" name="categoryID" value="<?php echo $id; ?>"></td>
        </tr>
        <tr>
            <td>Category Name</td>
            <td><input type="text" class="form-control" value="<?php echo $row["category_name"]; ?>" name="name" placeholder="Enter Category Name"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="edit" value="Update"></td>
        </tr>
    </table>
</form>
