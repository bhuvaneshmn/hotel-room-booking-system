<html>
<body>
<link rel="stylesheet" href="style.css">
<?php
		session_start();
			$con = mysqli_connect("localhost","root","root","hotelproject");

		if (!$con)

		{

		die('Could not connect: ' . mysqli_error($con));

		}
		mysqli_select_db($con,"hotelproject");
		$sql = "SELECT * FROM login";
		$result =mysqli_query($con,$sql);

		echo "<table border='1'>
		<tr>
		<th>usercode</th>
		<th>username</th>
		<th>email</th>
		<th>phone</th>
		</tr>";

		while($row =mysqli_fetch_array($result))
		{
			echo "<tr> <td>" . $row['usercode'] . "</td>";
			echo "<td>" . $row['username'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['phone'] . "</td>";
			"</tr>";
		};
		echo "</table>";

		mysqli_close($con);
?>
<form class="myform" action="home.php" method="post">
		<h1>
			<input name="back" type="submit" id="logout_btn" class="btn" value="Back"/><br>
		</h1>	
		</form>

</body>
</html>