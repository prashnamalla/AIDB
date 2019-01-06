<?php
	
	if(isset($_POST['contact']))
		{
			$name= $_POST['name'];
			$email= $_POST['email'];
			$subject= $_POST['subject'];
			$msg= $_POST['msg'];
			
		$to= 'prashna.malla@gmail.com';
		
		mail('prashna.malla@gmail.com',$subject,$msg);
		
		echo "Email Sent Successfully";
		}
	


?>