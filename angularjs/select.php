<?php  
 
 $connect = mysqli_connect("localhost", "id5805163_root", "prashna123", "id5805163_cosmeticshop");
 $output = array();  
 $query = "SELECT * FROM user";  
 $result = mysqli_query($connect, $query);  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output[] = $row;  
      }  
      echo json_encode($output);  
 }  
 ?>  