
<?php
	
	$connect = mysqli_connect("localhost","id5805163_root","prashna123","id5805163_cosmeticshop");

	$sql = "SELECT * FROM user";

	$result = mysqli_query($connect, $sql);

	$json_array = array();

	while ($row = mysqli_fetch_assoc($result))
	{
		$json_array[] = $row;
	}

	/*echo '<pre>';
	print_r($json_array);
	echo '</pre>';*/

	echo json_encode($json_array);

?>
</br></br>
<?php
$connect = mysqli_connect("localhost","root","","cosmeticshop");

$result = mysqli_query($connect,"SELECT * FROM user");

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Username</th>
<th>Email</th>
<th>Password</th>
<th>Address</th>
<th>Phone</th>
<th>Answer</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['uname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['ans'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($connect);
?>
<a href='javascript:self.history.back();' class="btn btn-warning">Go Back</a>