<?php
		session_start();


	$an = "";
	$pass = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";




			$con = mysqli_connect("localhost","root","root","hotelproject");

		if (!$con)

		{

		die('Could not connect: ' . mysqli_error($con));

		}
		mysqli_select_db($con,"hotelproject");		
		
		if(isset($_POST['login']))
		{




			$an = mysqli_real_escape_string($con, $_POST['an']);
			$pass = mysqli_real_escape_string($con, $_POST['pass']);
			
			if (empty($an))
			{
				//array_push($errors, "Customer name is required");
										echo '<script type="text/javascript">alert("Enter Data in All fields")</script>';
			}
			if (empty($pass)) 
			{
				//array_push($errors, "Password is required");
										echo '<script type="text/javascript">alert("Enter Data in All fields")</script>';
			}

			if (count($errors) == 0) 
			{
				//$password = md5($password);
				$query="SELECT * FROM admin WHERE adminname='$an' AND password='$pass'";
				$results = mysqli_query($con, $query);

				if (mysqli_num_rows($results) >= 1) 
				{
					$_SESSION['an'] = $an;
					$_SESSION['pass'] = $pass;

					$_SESSION['success'] = "You are now logged in";
					header('location:adminhome.php');
				}
				else 
				{
						// array_push($errors,"Wrong username/password combination");
						echo '<script type="text/javascript">alert("Invalid Usercode!!!")</script>';
						
				}
			}
		}
		
		
?>