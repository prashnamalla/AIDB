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

<!--                <img src="../../assets/img/633222.jpeg" height='70px' width="70px"/>-->
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
                        <li><a href="../product/view.php">PRODUCT LIST</a></li>
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
<!-- MENU SECTION END-->

<?php
    include ('action.php');
?>
<h2>Edit Product and Add Product Here</h2>

<div class="limiter">
    <div class="container-table100">
        <div class="wrap-table100"></div>
            <table class="table table-bordered">
               
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Product Detail</th>
                </tr>


                <?php
                $myrow = $obj->fetch_record("product");
                foreach ($myrow as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row["productID"]; ?></td>
                        <td><?php echo $row["pname"]; ?></td>
                        <td><?php echo $row["price"]; ?></td>
                        <td><?php echo $row["quantity"]; ?></td>
                        <td><?php echo $row["detail"]; ?></td>
                       <td><a href="edit.php?update=1&productID=<?php echo $row["productID"]; ?>"
                               class="btn btn-info">Edit</a></td>
                        <td><a href="action.php?delete=1&productID=<?php echo $row["productID"]; ?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td><a href="upload.php?upload  =1&productID=<?php echo $row["productID"]; ?>"
                               class="btn btn-info">View<br>Image</a></td>
                    </tr>
                    <?php
                }
                    ?>
                      </table>
                    </div>
                    </div>
                    </div>
</body>

</html>
<style>
    table {
        color: #333; /* Lighten up font color */
        font-family: Helvetica, Arial, sans-serif; /* Nicer font */
        width: 640px;
        border-collapse:
                collapse; border-spacing: 0;
    }

    td, th { border: 1px solid #CCC; height: 30px; } /* Make cells a bit taller */

    th {
        background: #F3F3F3; /* Light grey background */
        font-weight: bold; /* Make sure they're bold */
    }

    td {
        background: #FAFAFA; /* Lighter grey background */
        text-align: center; /* Center our text */
    }
</style>

<form method="post" action="action.php" >
    <table class="table table-hover">
         <th><h3>  Add New Product Here</h3></th>
        <tr>
            <td>Product Name</td>
            <td><input type="text" class="form-control" name="pname" placeholder="Enter Product name" required/></td>
        </tr>

        <tr>
            <td>Product Price</td>
            <td><input type="text" class="form-control" value="<?php echo $row["price"]; ?>" name="price" placeholder="Enter Product Price"></td>
        </tr>

        <tr>
            <td>Product Quantity</td>
            <td><input type="number" class="form-control" value="<?php echo $row["quantity"]; ?>" name="quantity" placeholder="Enter Product Quantity" required></td>
        </tr>

        <tr>
            <td>Product Details</td>
            <td><textarea  rows="2" cols="50" class="form-control" value="<?php echo $row["detail"]; ?>" name="detail" placeholder="Enter Product Details" required></textarea></td>
        </tr>

        <tr>
                <td><input type="hidden" name="size" value="1000000"></td>
                <td><input type="file" name="image"></td>
        </tr>

        <tr>
            <td colspan="2" align="center"><input type="submit" class="btn btn-primary" name="submit" value="Store"></td>

        </tr>
    </table>
</form>


