<?php
$xml = simplexml_load_file('user.xml');
echo "<h2>" .$xml->getName(). "</h2><br />";
foreach ($xml->children() as $userlist){
    echo "<table border = '1'>";
    echo "<tr bgcolor='#6495ed'>";
    echo "<th>User ID</th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>User Name</th>"; 
    echo "<th>Email</th>";
    echo "<th>Address</th>";
    echo "<th>Phone</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>".$userlist->attributes()->userID."</td>";
    echo "<td>".$userlist->fname."</td>";
    echo "<td>".$userlist->lname."</td>";
    echo "<td>".$userlist->uname."</td>";
    echo "<td>".$userlist->email."</td>";
    echo "<td>".$userlist->address."</td>";
    echo "<td>".$userlist->phone."</td>";
    echo "</tr>";
    echo "</table>";
}