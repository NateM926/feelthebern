<?php header('access-Control-Allow-Origin: *');


	/* Print Posted Data */

	$host="localhost";
	$id="root";
	$pw="mysql";
	$db="bouy";
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

	$result = mysql_query ("SELECT * FROM $table"); //Execute the query

	while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{print_r($row);}






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
