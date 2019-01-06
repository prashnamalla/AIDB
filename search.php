<?php

// php code to search data in mysql database and set it in input text

if(isset($_POST['search']))
{
    // id to search
    $id = $_POST['id'];

    // connect to mysql
    $connect = mysqli_connect("localhost", "root", "","cosmeticshop");

    // mysql search query
    $query = "SELECT `pname`, `price`, `quantity`, `detail` FROM `product` WHERE `productID` = $id LIMIT 1";

    $result = mysqli_query($connect, $query);

    // if id exist
    // show data in inputs
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            $pname = $row['pname'];
            $price = $row['price'];
            $quantity = $row['quantity'];
            $detail = $row['detail'];
        }
    }

    // if the id not exist
    // show a message and clear inputs
    else {
        echo "Undifined ID";
        $pname="";
        $price="";
        $quantity="";
        $detail="";
    }


    mysqli_free_result($result);
    mysqli_close($connect);

}

// in the first time inputs are empty
else{
    $pname="";
    $price="";
    $quantity="";
    $detail="";
}


?>

<!DOCTYPE html>
<html>
<head>
</head>
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    textarea{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
   a
    {

        width: 100%;
        background-color: #4d4d4d;
        color: white;
        padding: 14px 20px;
        margin: 10px 0;
        border-radius: 10px;
        cursor: pointer;
    }
</style>
<body>

<h1>SEARCH PRODUCTS WITH THEIR CODE HERE</h1>
<a href="user.php">HOME</a><br><br><br>
<form action="search.php" method="post">

    <label for="id"><h3>Enter Product code</h3></label>
    <input type="text" name="id" required>
    <input type="submit" name="search" value="Find the product">

    <br><br>

    Product Name:<input type="text" name="pname" value="<?php echo $pname;?>"><br>

    Price:<input type="text" name="price" value="<?php echo $price;?>"><br><br>

    quantity:<input type="text" name="quantity" value="<?php echo $quantity;?>"><br><br>

    Detail: <textarea name="comment" rows="5" cols="40"><?php echo $detail;?></textarea> <br><br>


</form>

</body>

</html>