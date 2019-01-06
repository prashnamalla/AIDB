
<?php
	
	/** create XML file */ 
		$mysqli = new mysqli("localhost", "id5805163_root", "prashna123", "id5805163_cosmeticshop");

	/* check connection */
		if ($mysqli->connect_errno) {

		   echo "Connect failed ".$mysqli->connect_error;

		   exit();
		}



	/**Select data from database */

		$query = "SELECT userID, fname, lname, uname, email, address, phone FROM user";

		$usersArray = array();

		if ($result = $mysqli->query($query)) {

		    /* fetch associative array */
		    while ($row = $result->fetch_assoc()) {

		       array_push($usersArray, $row);
		    }
		  
		    if(count($usersArray)){

		         createXMLfile($usersArray);

		     }

		    /* free result set */
		    $result->free();
		}

		/* close connection */
		$mysqli->close();




		function createXMLfile($usersArray){
  
		   $filePath = 'user.xml';

		   $dom     = new DOMDocument('1.0', 'utf-8'); 

		   $root      = $dom->createElement('user'); 

		   for($i=0; $i<count($usersArray); $i++){
		     
		     $userId        =  $usersArray[$i]['userID'];  

		     $FirstName      =  $usersArray[$i]['fname']; 

		     $LastName    =  $usersArray[$i]['lname']; 

		     $UserName     =  $usersArray[$i]['uname']; 

		     $Email      =  $usersArray[$i]['email']; 

		     $Address  =  $usersArray[$i]['address'];	

		     $Phone  =  $usersArray[$i]['phone'];


		     $user = $dom->createElement('user');


		     $user->setAttribute('userID', $userId);

		     $fname     = $dom->createElement('fname', $FirstName); 

		     $user->appendChild($fname); 

		     $lname   = $dom->createElement('lname', $LastName); 

		     $user->appendChild($lname); 

		     $uname    = $dom->createElement('uname', $UserName); 

		     $user->appendChild($uname); 

		     $email     = $dom->createElement('email', $Email); 

		     $user->appendChild($email); 
		     
		     $address = $dom->createElement('address', $Address); 

		     $user->appendChild($address);

		     $phone = $dom->createElement('phone', $Phone); 

		     $user->appendChild($phone);

		 
		     $root->appendChild($user);

		   }

		   $dom->appendChild($root); 

		   $dom->save($filePath); 

		   echo "Your xml file has been generated successfully";

		   
 } 

?>
<a href='javascript:self.history.back();' class="btn btn-warning">Go Back</a>