<html>
	<head>
        <form name="form 1" method="post" action="">
            box: <input type="text" name="textbox" value="">
            <input type="submit" name="button">

            <?php
            // for error finding
            
			error_reporting(-1); // display all faires
			ini_set('display_errors', 1);  // ensure that faires will be seen
			ini_set('display_startup_errors', 1); // display faires that didn't born
			
			chdir("..");
			require("Database.php");
			
			if (!isset($connection))
			{
	        	$connection = mysqli_connect("localhost", "root", "", "users");
	    	}

        	if (!$connection->connect_errno)
        	{
	        	echo $_POST["textbox"];
	        	$result = $connection->query($_POST["textbox"])->fetch_assoc();
	        	echo $result["team_num"], $result["team_passwd"];
        	}
	        /*
	        $creds_file = fopen("/var/www/html/.credentials", "r");
	        $users_db;
	        if (gettype($creds_file) != "boolean")
	        {
	            $line = fgets($creds_file);
	            //$users_db = Connect("users", "root", substr($line, stripos("=") + 1, strlen($line)));
	            if (gettype($users_db) != "string")
	            {
	                
	            }
	            else
	            {
	                echo $users_db; // print error message
	            }
	        }
	        else
	        {
	            echo "Unable to find server credentials.";
	        }
	        */
            ?>
        </form>
	</head>
</html>