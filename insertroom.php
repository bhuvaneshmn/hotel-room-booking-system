<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>transperent Login form</title>
		<link rel="stylesheet" href="style3.css">
	</head>
	<body>
		<div class="bg">
		<div class="loginbox">
			<h2>Details</h2>
			<form method="post" action="roominsert.php">

				<p>Roomno</p>
				<input type="text" name="roomno" placeholder="Enter roomno" required>
			
				<p>CategoryID</p>
				<select name="sel">
				<option value="1111">1111</option>
				<option value="1112">1112</option>
				<option value="1113">1113</option>
				<option value="1114">1114</option>
				<option value="1115">1115</option>
				<option value="1116">1116</option>
				<option value="1117">1117</option>
				<option value="1118">1118</option>
</select> <br><br><br>
				
				<p>Specification</p>
				<select name="sel1">
	<option value="AC,WiFi">AC,WiFi</option>
	<option value="AC,WiFi,Music">AC,WiFi,Music</option>
	<option value="AC">AC</option>
	<option value="Non AC">Non AC</option>
</select> <br><br><br>
				<input type="submit" name="login" value="Add">
				
			</form>
			<a href="adminhome.php"><input type="submit" name="" value="Back"></a>
		</div>
	</div>


</body>
</html>