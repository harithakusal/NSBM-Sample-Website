<?php

			
			
					// connect to the database
					$con = mysqli_connect('localhost','root','','nsbm');

					if(mysqli_connect_errno())
					{
						die("Connection failed" . mysqli_connect_errno());
					}	
					else
					{
						//echo "connection successful </br>";
					}


					if (isset($_POST['name'], $_POST['dob'], $_POST['address'], $_POST['mail'], $_POST['no']))
					{
						// receive all input values from the form
						$name = $_POST['name'];
					  	$dob = $_POST['dob'];
					 	$address = $_POST['address'];
					 	$mail = $_POST['mail'];
					  	$phone = $_POST['no'];	

					  	$insert = "INSERT INTO enroll VALUES('{$name}','{$dob}','{$address}','{$mail}','{$phone}')";

					  	$result = mysqli_query($con, $insert);

					  	if($result)
					  	{
					  		//echo "values inserted";	
					  	}
					  	else
					  	{
					  		echo "insert failed";
					  	}
					  	

						mysqli_close($con);

						header("refresh:1 url=../enrollnow.html");
					}
						  
					

?>

