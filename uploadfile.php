<?php
include_once 'db_connect.php';
if(isset($_POST['btn-upload']))
{

    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    $folder="uploads/";

    // new file size in KB
    $new_size = $file_size/1024;
    // new file size in KB

    // make file name in lower case
    $new_file_name = strtolower($file);
    // make file name in lower case

    $final_file=str_replace(' ','-',$new_file_name);

    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$final_file','$file_type','$new_size')";
        mysqli_query($sql);
        ?>
        <script>
            alert('successfully uploaded');
            window.location.href='user.php?success';
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('error while uploading file');
            window.location.href='index.php?fail';
        </script>
        <?php
    }
}
?>

<?php
include_once 'db_connect.php    ';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>File Uploading With PHP and MySql</title>
    <link rel="stylesheet" href="themes/css/uploads.css" type="text/css" />
</head>
<body>
<div id="header">
    <label>Upload beauty tips</label>
</div>
<div id="body">
    <form action="uploadfile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <button type="submit" name="btn-upload">upload</button>
    </form>
    <br /><br />
    <?php
    if(isset($_GET['success']))
    {
        ?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
    }
    else if(isset($_GET['fail']))
    {
        ?>
        <label>Problem While File Uploading !</label>
        <?php
    }
    else
    {
        ?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
    }
    ?>
</div>
<div id="footer">

</div>
</body>
</html>