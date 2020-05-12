<?php

$conn = mysqli_connect("localhost", "root", "", "nace_database");
if ($conn-> connect_error){
	die("connection failed:". $conn-> connect_error);
}


$sql = "SELECT * FROM users";


$result = $conn-> query($sql);



?>

<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>
	<table width="600" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>fname</th>
			<th>sname</th>
			<th>email</th>
			<th>number</th>
			<th>address</th>
			<th>password</th>
			<th>reg_date</th>
			<th>action</th>
		</tr>

<?php


while ($users = mysqli_fetch_assoc($result)) {
	echo "<tr>";

	echo "<td>".$users['fname']."</td>";

	echo "<td>".$users['sname']."</td>";

	echo "<td>".$users['email']."</td>";

	echo "<td>".$users['number']."</td>";

	echo "<td>".$users['address']."</td>";

	echo "<td>".$users['password']."</td>";

	echo "<td>".$users['reg_date']."</td>";

	echo "<td> <a href='Edit.php?id=".$users['id']."'>edit</a></td>";

	echo "</tr>";
}
//end while

?>

	</table>
</body>
</html>