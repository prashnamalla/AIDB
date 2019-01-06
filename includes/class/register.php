<?php

	
	/**
	* 
	*/
	class register
	{
		
		function __construct()
		{
			# code...
		}

		function addUser($uname,$fname,$lname, $email,$encpw1,$address,$phone,$ans)
		{
            include ("../../db_connect.php");

		    $this->uname=$uname;
		    $this->fname=$fname;
		    $this->lname=$lname;
		    $this->email=$email;
		    $this->encpw1=$encpw1;
            $this->address=$address;
            $this->phone=$phone;
            $this->ans=$ans;

          //echo $this->encpw1;
            //$encpw=md5($this->password);

           $query="INSERT INTO `user` (`userID`, `fname`, `lname`, `uname`, `email`, `password`, `address`, `phone`, `ans`)
VALUES (NULL, '$this->fname', '$this->lname', '$this->uname', '$this->email', '$this->encpw1', '$this->address', '$this->phone', '$this->ans')";

            if (mysqli_query($conn,$query))
            {
                //header('register.php');
                echo "<font color='green' >Registered Succesfully</font>";
            }
            else{
               echo "<font color='red' ><h4>Could not register new user</h4></font>";
            }

            mysqli_close($conn);
		}

	}


?>