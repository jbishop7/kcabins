<?php		

		$dbHost = "localhost";

		$dbName = "huronsho_kincab";

		$dbLogin = "huronsho_kinc";

		$dbPass = "-dwo?[}gAaEl";



		//connect

		//$link = mysql_connect($dbHost, $dbLogin, $dbPass);
        $mysqli = new mysqli($dbHost, $dbLogin, $dbPass, $dbName);

        if ($mysqli -> connect_errno){
            echo"Failed to connect to SQL: ".$mysqli -> connect_error;
            exit();
        }


		//select db to work with

		//mysql_select_db($dbName);

		

?>