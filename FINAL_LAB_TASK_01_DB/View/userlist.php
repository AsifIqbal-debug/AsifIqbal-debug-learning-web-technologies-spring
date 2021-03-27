<?php
	$title = "User List Page";
	include('header.php');
?>

	<a href="home.php">Back</a> |
	<a href="../controller/logout.php">logout</a>	
	<br>
	
	<h1>User list</h1>

	echo "<table border="1">
		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ACTION</td>
		</tr>
		<tr>
			<td>1</td>
			<td>Kritanjali</td>
			<td>kdhar@gmail.com</td>
			<td>
				<a href="edit.php?id=1"> EDIT</a> |
				<a href="delete.php?id=1"> DELETE</a>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>XYZ</td>
			<td>XYZ@GMAIL.COM</td>
			<td>
				<a href="edit.php?id=2"> EDIT</a> |
				<a href="delete.html"> DELETE</a>
			</td>
		</tr>
		<tr>
			<td>3</td>
			<td>ALEX</td>
			<td>ALEX@GMAIL.COM</td>
			<td>
				<a href="edit.php?id=3"> EDIT</a> |
				<a href="delete.html"> DELETE</a>
			</td>
		</tr>
		</table>";
	
	while($row = mysqli_fetch_assoc($result)) {

		echo 	"<tr>
					<td>{$row['ID']}</td>
					<td>{$row['NAME']}</td>
					<td>{$row['EMAIL']}</td>
					<td>{$row['ACTION']}</td>
				</tr>";
	}

<?php
	include('footer.php');
?>