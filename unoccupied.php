<html>
<body>
<?php
		session_start();
			$con = mysqli_connect("localhost","root","root","hotelproject");

		if (!$con)

		{

		die('Could not connect: ' . mysqli_error($con));

		}
		mysqli_select_db($con,"hotelproject");
		$sql = "SELECT * FROM roomdetail";
		$result =mysqli_query($con,$sql);

		echo "<table border='1'>
		<tr>
		<th>roomno</th>
		<th>categoryid</th>
		<th>specification</th>
		</tr>";

		while($row =mysqli_fetch_array($result))
		{
			echo "<tr> <td>" . $row['roomno'] . "</td>";
			echo "<td>" . $row['categoryid'] . "</td>";
			echo "<td>" . $row['specification'] . "</td>";
			"</tr>";
		};
		echo "</table>";

		mysqli_close($con);
?>
<form class="myform" action="home.php" method="post">
		</h1>
			<input name="back" type="submit" id="logout_btn" value="Back"/><br>
			
		</form>

</body>
</html>