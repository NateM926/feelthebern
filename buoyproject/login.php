<?php header('access-Control-Allow-Origin: *');


	/* Print Posted Data */

	$host="localhost";
	$id="root";
	$pw="mysql";
	$db="buoy";
	$table="users";
	$status="Login Failed";
	$success="window.open(main.shtml)";

	print '<Pre>';
	print_r($_POST);
	print '</pre>';


	$username = $_POST['username'];
	$password = $_POST['password'];
	$manageruser = "admin";
	$managerpwd = "1q2w3e4r";
	$employeeuser = "user";
	$employeepwd = "password";

	if ($username = $manageruser and $password = $managerpwd)
	{
		print $success;
	}
	elseif ($username = $employeeuser and $password = $employeepwd)
	{
		print $success;
	}
	else
		print="login failed";
//	$link = mysqli_connect($host, $id); //connect to database
	
	//mysql_select_db ($db); //select db
	
//	$query = "SELECT * FROM $table"; // define query

	//$query = mysql_query ("SELECT id FROM $table where username='".$username."' and password='".$password."'"); //Execute the query
	//$query = str_replace("\'","",$query);
	
//   $query = "SELECT * FROM users WHERE username='".$username."'";
//	$result = mysqli_query($link,$query);
//	while ($row = $result->fetch_assoc()) {
//		print $row;	
//	}




/*	{ if ($row != $username) 
		{ 
			void exit ([$status ] );
		} 
			elseif ($row != $password) 
			{
				void exit ([$status ] );
			} 
				else 
				{ 
					print $success
				}
	};
*/
?>
