<?php
error_reporting(-1); // display all faires
ini_set('display_errors', 1);  // ensure that faires will be seen
ini_set('display_startup_errors', 1); // display faires that didn't born

session_start();

if (isset($_SESSION["team"]))
{
    header("Location: index.php");
    exit(); // stop sending html, creates unnecessary load time
}
else if(isset($_POST["team"]))
{
    if ($_POST["team"] == "" || $_POST["password"] == "")
    {
        echo "Requires team number and password.";
    }
    else
    {
        $connection = mysqli_connect("localhost", "root", "", "users");
        $result = $connection->query("SELECT * FROM teams WHERE number = ".$_POST["team"].";");

        if ($result->num_rows == 1)
        {
            // TODO: read the hash algorithm & salt to be used from a file
            // if we are going to hide the hash algorithm in a file, we should implement constant time hashing & password checking
            $hash = hash("sha512", "salt".$_POST["password"]);
            $row = $result->fetch_assoc();

            if ($hash == $row["id"])
            {
                $_SESSION["team"] = $_POST["team"];

                // redirect to main page
                header("Location: index.php");
                exit();
            }
            else
            {
                echo "Incorrect team number or password.";
            }
        }
        else
        {
            echo "Incorrect team number or password.";
        }
    }
}
else if (isset($_POST["new_team"]))
{
    $new_team = $_POST["new_team"];
    $new_password = $_POST["new_password"];
    if ($new_team == "" || $new_password == "")
    {
        echo "Requires a team number and password.";
    }
    else
    {
        $connection = mysqli_connect("localhost", "root", "", "users");
        $result = $connection->query("SELECT * FROM teams WHERE number = " . $new_team . ";");

        if ($result->num_rows == 0) // if that user doesn't already exist
        {
            // TODO: read the hash algorithm & salt to be used from a file
            // if we are going to hide the hash algorithm in a file, we should implement constant time hashing & password checking
            $connection->query("INSERT INTO teams VALUES (" . $new_team . ", '" . hash("sha512", "salt" . $new_password) . "');");
            echo "Go ahead and try logging in.";
        }
        else
        {
            echo "Sorry, that account is already taken.";
        }
    }
}
// else print page normally
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="http://use.edgefonts.net/bitter:n4,i4,n7:all;lobster-two:n7,i4,i7,n4:all.js"></script>
        <link type="text/css" rel="stylesheet" href="main.css" />
        <title>Log In</title>
    </head>
    <body>
        <h1>Log in</h1>
        <!-- The action attribute will contain where to send the login-currently nowhere-->
        <form action="" method="post">
        Team: <input type="number" name="team"/> 
        Password: <input type="password" name="password"/> 
        <input type="submit" name="Log In"/> 
        </form> <br>
        <p>OR</p>
        <h1>Create An Account</h1>
        <form action="" method="post">
            Team Number: <input type="number" name="new_team"/>
            Password: <input type="password" name="new_password"/> 
            <input type="submit"/>
        </form>
        <br>
        <a href="index.html">Home</a>
    </body>
</html>