<?php

    session_start();

    echo "<script> alert('Logging out.'); window.location.href='../index.php'; </script>";


    session_destroy();
	
	
?>