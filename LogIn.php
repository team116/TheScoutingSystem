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

                
                Username: <input type="text" name="user" /> 
                Password: <input type="password" name="password" /> 
                <input type="submit" name="Log In"/> 
               <?php 
                error_reporting(E_ERROR);
                if(isset($_POST["user"])) {
                    $text = $_POST["user"];

                    // compatible with linux & windows when using the two commands
                    chdir("Users");
                    chdir("Team116");
                    
                    $username = file_get_contents ("username.txt");
                    $password = file_get_contents ("password.txt");
                    print $username;
                    print $password;   
                    
                    if($_POST["user"] == $username && $_POST["password"] == $password)
                    {
                        echo "Success!!!!";
                    }
                }
                ?>  
            </form> <br>
        <p>OR</p>
        <h1>Create An Account</h1>
            <form action="" method="post">
                Team Number: <input type="text" name="numberinput" />
                Username: <input type="text" name="user" /> 
                Password: <input type="password" name="password" /> 
                <input type="submit"/>
        </form>
        <br>
        <a href="index.html">Home</a>
    </body>
</html>