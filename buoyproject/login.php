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
	$link = mysql_connect($host, $id); //connect to database
	
	mysql_select_db ($db); //select db
	
//	$query = "SELECT * FROM $table"; // define query

	$query = mysql_query ("SELECT id FROM $table where username='".$username."' and password='".$password."'"); //Execute the query
	$query = str_replace("\'","",$qz);
	$result = mysqli_query($link,$query);
	while ($row = mysql_fetch_array($result))
		{ echo $row['id'];}
	mysqi_close($link);






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
