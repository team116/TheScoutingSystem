<html>
    <head>
        <form name="form 1" method="post" action="">
            box: <input type="text" name="textbox" value="">
            <input type="submit" name="button">
        </form>
    </head>
    <body>
        <p>
            <?php
            session_start();
            echo "Your session ID is ".session_id();
            setcookie("ID","PASSWORD" ,time() +3600, "/" ,"localhost"); 
            // this line will get rid of error warnings, only use when this file is completely tested
            error_reporting(E_ERROR);
            if (isset($_POST['textbox'])) {
                $text = $_POST['textbox'];
            }
            $button = $_POST['button'];

            // establish connection to the mysql database
            $connection = mysql_connect('localhost', 'root', '')
            or die('Could not connect. Mysql error: ' . mysql_error());
            echo "Established mysql connection.  ";

            if (!mysql_select_db('my_db')) {
                echo "No existing database.  ";
                $sql = "CREATE DATABASE my_db";
                if (!mysql_query($sql, $connection)) {
                    die("Could not create new database: " . mysql_error($connection));
                }
            }
            echo "Successfully found a database.  ";
            ?>
        </p>
    </body>
</html>