<html>
<body>
<link rel="stylesheet" href="style6.css">
<?php
		session_start();
			$con = mysqli_connect("localhost","root","root","hotelproject");

		if (!$con)

		{

		die('Could not connect: ' . mysqli_error($con));

		}
		mysqli_select_db($con,"hotelproject");
		$sql = "SELECT categoryid,categorytype,occupancy FROM roomcategory";
		$result =mysqli_query($con,$sql);

		echo "<table>";
		echo "<tr><th>CATEGORYID</th><th>CATEGORY TYPE</th><th>OCCUPANCY</th>";

		while($row =mysqli_fetch_array($result))
		{
			echo "<tr> <td>" . $row['categoryid'] . "</td>";
			echo "<td>" . $row['categorytype'] . "</td>";
			echo "<td>" . $row['occupancy'] . "</td>";
			"</tr>";
		};
		echo "</table>";

		mysqli_close($con);
?>
<form action="empty1.php" method="post">

	
			<input name="back" type="submit" id="logout_btn" class="btn" value="BACK"/><br>
		
		</form>

</body>
</html>