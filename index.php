<!DOCTYPE html>
<html>
    <head>
        <script src="http://use.edgefonts.net/bitter:n4,i4,n7:all;lobster-two:n7,i4,i7,n4:all.js"></script>
        <link type="text/css" rel="stylesheet" href="index.css" />
        <title>Team 116 Scouting</title>
    </head>
    <body>
        <?php
        error_reporting(-1); // display all faires
        ini_set('display_errors', 1);  // ensure that faires will be seen
        ini_set('display_startup_errors', 1); // display faires that didn't born

        session_start();

        if (isset($_SESSION["team"])) // if logged in
        {
            echo "<form id=\"userBanner\" action=\"Logout.php?redirection=index.php\">\n";
            echo "    " . $_SESSION["team"] . "<input type=\"submit\" value=\"Log Out\"/>\n";
            echo "</form>\n";
        }
        else
        {
            echo "<form id=\"loginButton\" action=\"Login.php\">\n";
            echo "    <input type=\"submit\" value=\"Log In\"/>\n";
            echo "</form>\n";
        }
        ?>
        <!--        
        <form id="aboutButton" action="About.html">
            <input type="submit" value="About" />
        </form>
        -->
        <form id="mainButton" action="Scouting.html">
            <!-- throw in a couple line breaks to center more, looking for a better solution -->
            <br>
            <br>
            <input type="submit" value="Scout" />
        </form>
        
        <form id="mainButton" action="View.php">
            <input type="submit" value="View" />
        </form>
        <p>Created by the good people of team 116</p>
    </body>
</html>
