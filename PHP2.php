<?php
			
			$Email=$_POST["Email"];
			$Password2=$_POST["My_Password"];
		$con=mysqli_connect("localhost","root","");
			if (!$con)
			die("Not connected".mysqli_connect_errno());
			//else echo"Successfully<br>";
			mysqli_select_db($con,"Orange")or die (mysql_error($con));
			
			$statment="SELECT * FROM Creataccount WHERE Email='$Email' AND My_Password='$Password2'";
				$result=mysqli_query($con,$statment);
				$check =mysqli_fetch_array($result);
				if (!isset($check)) die("your password don't match with your Email"); 
				else  header("location:http://localhost/Orange full projecr/Home.php"); 
		mysqli_close($con);

?>