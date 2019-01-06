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
	<link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FONT AWESOME ICONS  -->
	<link href="admin/assets/css/font-awesome.css" rel="stylesheet" />
	<!-- CUSTOM STYLE  -->
	<link href="admin/assets/css/style.css" rel="stylesheet" />
	<!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
<!---->
<!--				<img src="admin/assets/img/633222.jpeg" height='70px' width="70px"/>-->
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
									<img src="admin/assets" alt="" class="img-rounded" />
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
							<a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="admin/editprofile.php" class="btn btn-danger btn-sm">Logout</a>

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
						<li><a href="search.php">SEARCH</a></li>
						<li><a href="useredit.php">EDIT PROFILE</a></li>
						<li><a href="uploadfile.php">UPLOAD TIPS</a></li>
						<li><a href="includes/logout.php">LOGOUT</a></li>

					</ul>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- MENU SECTION END-->



<?php
/**
 * Created by PhpStorm.
 * User: Hp
 * Date: 4/9/2018
 * Time: 9:50 AM
 */
//session_start();
//
//if (($_SESSION["login"])!="true") {
//	header('Location:index.php');
//
//}

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

//echo "WELCOME TO USER DASHBOARD".$_SESSION['UserName']; //$_SESSION['UserName'];
//
//echo "<a href='includes/logout.php'> LOGOUT </a>";
//
//
//?>

<h2>USER DASHBOARD</h2>
<table class="table table-bordered">
<?php
    include ('admin/product/action.php');
?>
    <tr>

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

            <td><?php echo $row["pname"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
            <td><?php echo $row["quantity"]; ?></td>
            <td><?php echo $row["detail"]; ?></td>

            <td><a href="admin/product/upload.php?upload=1&productID=<?php echo $row["productID"]; ?>"
                   class="btn btn-info">View<br> Image </a></td>
        </tr>
        <?php
    }
    ?>
</table>


<?php
include ('admin/footer.php');
?>