
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
		$sql = "call rooms()";
		//"SELECT r.roomno,rc.categoryid,categorytype,specification FROM roomdetail r,roomcategory rc WHERE rc.categoryid=r.categoryid AND r.roomno not in (SELECT roomno FROM confirmation) ORDER BY r.roomno";
		$result =mysqli_query($con,$sql);

		echo "<table>";
		echo "<tr><th>ROOMNO</th><th>CATEGORYID</th><th>CATEGORYTYPE</th><th>SPECIFICATION</th></tr>";

		while($row =mysqli_fetch_array($result))
		{
			echo "<tr> <td>" . $row['roomno'] . "</td>";
			echo "<td>" . $row['categoryid'] . "</td>";
			echo "<td>" . $row['categorytype'] . "</td>";
			echo "<td>" . $row['specification'] . "</td>";
			"</tr>";
		};
		echo "</table>";

		mysqli_close($con);
?>
<form action="adminhome.php" method="post">

	
			<input name="" type="submit" value="Back"/><br>
		

</body>
</html>