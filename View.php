<!DOCTYPE html>
<html>
    <head>
        <script src="http://use.edgefonts.net/bitter:n4,i4,n7:all;lobster-two:n7,i4,i7,n4:all.js"></script>
        <link type="text/css" rel="stylesheet" href="View.css" />
        <title>View</title>
    </head>
    <body>
        <form id="homeButton" action="index.html">
            <input type="submit" value="Home" />
        </form>
        <br>
        <h1>View Data</h1>
        <p>Team: 116</p>
        <br>
        <div class="grid grid-pad" id="header">
            <div class="col-1-10" id="header">
                <article class="module">
                    <h2>Match</h2>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module">
                    <h2>Drive</h2>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module">
                    <h2>Possesion</h2>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module">
                    <h2>Pick-Up</h2>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module">
                    <h2>Catching</h2>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module">
                    <h2>Passing</h2>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module">
                    <h2>Shooter</h2>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module">
                    <h2>Defense</h2>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module">
                    <h2>Goalie</h2>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module">
                    <h2>Hot Goal</h2>
                </article>
            </div>
        </div>
        <?php
		error_reporting(-1); // display all faires
		ini_set('display_errors', 1);  // ensure that faires will be seen
		ini_set('display_startup_errors', 1); // display faires that didn't born

		// collect match data into array of rows
		session_start();
		$connection = mysqli_connect("localhost", "root", "", "scouting_testing");
		$result = $connection->query("SELECT * FROM matches ORDER BY match_num ASC");
		$_SESSION["rows"] = array();
		if ($result)
		{
			$num_rows = $result->num_rows;
			
			for ($x = 0; $x < $num_rows; $x++)
			{ 
				array_push($_SESSION["rows"], $result->fetch_assoc());
				echo "<div class=\"grid grid-pad\" id=\"match" . $_SESSION["rows"][$x]["match_num"] . "\">\n";
				echo "    <div class=\"col-1-10\">\n";
				echo "        <article class=\"module\" id=\"matchNum\">\n";
				echo "            <p>\n";
				echo "            " . $_SESSION["rows"][$x]["match_num"];
				echo "            </p>\n";
				echo "        </article>\n";
				echo "    </div>\n";
				echo "    <div class=\"col-1-10\">\n";
				echo "        <article class=\"module\" id=\"drivePerf\">\n";
				echo "            <p>\n";
				echo "            " . $_SESSION["rows"][$x]["drive"];
				echo "            </p>\n";
				echo "        </article>\n";
				echo "    </div>\n";
				echo "    <div class=\"col-1-10\">\n";
				echo "        <article class=\"module\" id=\"possesionPerf\">\n";
				echo "            <p>\n";
				echo "            " . $_SESSION["rows"][$x]["possesion"];
				echo "            </p>\n";
				echo "        </article>\n";
				echo "    </div>\n";
				echo "    <div class=\"col-1-10\">\n";
				echo "        <article class=\"module\" id=\"pickupPerf\">\n";
				echo "            <p>\n";
				echo "            " . $_SESSION["rows"][$x]["pickup"];
				echo "            </p>\n";
				echo "        </article>\n";
				echo "    </div>\n";
				echo "    <div class=\"col-1-10\">\n";
				echo "        <article class=\"module\" id=\"catchingPerf\">\n";
				echo "            <p>\n";
				echo "            " . $_SESSION["rows"][$x]["catching"];
				echo "            </p>\n";
				echo "        </article>\n";
				echo "    </div>\n";
				echo "    <div class=\"col-1-10\">\n";
				echo "        <article class=\"module\" id=\"passingPerf\">\n";
				echo "            <p>\n";
				echo "            " . $_SESSION["rows"][$x]["passing"];
				echo "            </p>\n";
				echo "        </article>\n";
				echo "    </div>\n";
				echo "    <div class=\"col-1-10\">\n";
				echo "        <article class=\"module\" id=\"shootingPerf\">\n";
				echo "            <p>\n";
				echo "            " . $_SESSION["rows"][$x]["shooter"];
				echo "            </p>\n";
				echo "        </article>\n";
				echo "    </div>\n";
				echo "    <div class=\"col-1-10\">\n";
				echo "        <article class=\"module\" id=\"defensePerf\">\n";
				echo "            <p>\n";
				echo "            " . $_SESSION["rows"][$x]["defense"];
				echo "            </p>\n";
				echo "        </article>\n";
				echo "    </div>\n";
				echo "    <div class=\"col-1-10\">\n";
				echo "        <article class=\"module\" id=\"goaliePerf\">\n";
				echo "            <p>\n";
				echo "            " . $_SESSION["rows"][$x]["goalie"];
				echo "            </p>\n";
				echo "        </article>\n";
				echo "    </div>\n";
				echo "    <div class=\"col-1-10\">\n";
				echo "        <article class=\"module\" id=\"hotgoalPerf\">\n";
				echo "            <p>\n";
				echo "            " . $_SESSION["rows"][$x]["hot_goal"];
				echo "            </p>\n";
				echo "        </article>\n";
				echo "    </div>\n";
				echo "</div>\n";
			}
			
		}
		else
		{
			echo "Database connection failure.";
		}
		?>
    </body>
</html>