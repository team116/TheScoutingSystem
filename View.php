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
        <?php
		/*
		error_reporting(-1); // display all faires
		ini_set('display_errors', 1);  // ensure that faires will be seen
		ini_set('display_startup_errors', 1); // display faires that didn't born

        // collect match data into array of rows
        session_start();
        $connection = mysqli_connect("localhost", "root", "", "scouting_testing");
        $result = $connection->query("SELECT * FROM matches");
        $_SESSION["rows"] = array();
        if ($result)
        {
        	$num_rows = $result->num_rows;
        	for ($x = 0; $x < $num_rows; $x++)
        	{
        		array_push($_SESSION["rows"], $result->fetch_assoc());
        	}
        }
        else
        {
        	echo "Database connection failure.";
        }
        */
        ?>
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
        $result = $connection->query("SELECT * FROM matches");
        $_SESSION["rows"] = array();
        if ($result)
        {
        	$num_rows = $result->num_rows;
        	for ($x = 0; $x < $num_rows; $x++)
        	{
        		array_push($_SESSION["rows"], $result->fetch_assoc());
        		echo "        <div class=\"grid grid-pad\" id=\"match" . $_SESSION["rows"][$x]["match_num"] . "\">\n";
        		echo "            <div class=\"col-1-10\">\n"
				echo "                <article class=\"module\" id=\"matchNum\">\n";
				echo "                    <p>\n";
				echo "                        <?php\n";
				echo "                        echo $_SESSION[\"rows\"][" . $x . "][\"match_num\"];\n";
				echo "                        ?>\n";
				echo "                    </p>\n";
				echo "                </article>\n";
				echo "            </div>\n";
				echo "            <div class=\"col-1-10\">\n";
				echo "                <article class=\"module\" id=\"drivePerf\">\n";
				echo "                    <p>\n";
				echo "                        <?php\n";
				echo "                        echo $_SESSION[\"rows\"][" . $x . "][\"drive\"];\n";
				echo "                        ?>\n";
				echo "                    </p>\n";
				echo "                </article>\n";
				echo "            </div>\n";
				echo "            <div class=\"col-1-10\">\n";
				echo "                <article class=\"module\" id=\"possesionPerf\">\n";
				echo "                    <p>\n";
				echo "                        <?php\n";
				echo "                        echo $_SESSION[\"rows\"][" . $x . "][\"possesion\"];\n";
				echo "                        ?>\n";
				echo "                    </p>\n";
				echo "                </article>\n";
				echo "            </div>\n";
				echo "            <div class=\"col-1-10\">\n";
				echo "                <article class=\"module\" id=\"pickupPerf\">\n";
				echo "                    <p>\n";
				echo "                        <?php\n";
				echo "                        echo $_SESSION[\"rows\"][" . $x . "][\"pickup\"];\n";
				echo "                        ?>\n";
				echo "                    </p>\n";
				echo "                </article>\n";
				echo "            </div>\n";
				echo "            <div class=\"col-1-10\">\n";
				echo "                <article class=\"module\" id=\"catchingPerf\">\n";
				echo "                    <p>\n";
				echo "                        <?php\n";
				echo "                        echo $_SESSION[\"rows\"][" . $x . "][\"catching\"];\n";
				echo "                        ?>\n";
				echo "                    </p>\n";
				echo "                </article>\n";
				echo "            </div>\n";
				echo "            <div class=\"col-1-10\">\n";
				echo "                <article class=\"module\" id=\"passingPerf\">\n";
				echo "                    <p>\n";
				echo "                        <?php\n";
				echo "                        echo $_SESSION[\"rows\"][" . $x . "][\"passing\"];\n";
				echo "                        ?>\n";
				echo "                    </p>\n";
				echo "                </article>\n";
				echo "            </div>\n";
				echo "            <div class=\"col-1-10\">\n";
				echo "                <article class=\"module\" id=\"shootingPerf\">\n";
				echo "                    <p>\n";
				echo "                        <?php\n";
				echo "                        echo $_SESSION[\"rows\"][" . $x . "][\"shooter\"];\n";
				echo "                        ?>\n";
				echo "                    </p>\n";
				echo "                </article>\n";
				echo "            </div>\n";
				echo "            <div class=\"col-1-10\">\n";
				echo "                <article class=\"module\" id=\"defensePerf\">\n";
				echo "                    <p>\n";
				echo "                        <?php\n";
				echo "                        echo $_SESSION[\"rows\"][" . $x . "][\"defense\"];\n";
				echo "                        ?>\n";
				echo "                    </p>\n";
				echo "                </article>\n";
				echo "            </div>\n";
				echo "            <div class=\"col-1-10\">\n";
				echo "                <article class=\"module\" id=\"goaliePerf\">\n";
				echo "                    <p>\n";
				echo "                        <?php\n";
				echo "                        echo $_SESSION[\"rows\"][" . $x . "][\"goalie\"];\n";
				echo "                        ?>\n";
				echo "                    </p>\n";
				echo "                </article>\n";
				echo "            </div>\n";
				echo "            <div class=\"col-1-10\">\n";
				echo "                <article class=\"module\" id=\"hotgoalPerf\">\n";
				echo "                    <p>\n";
				echo "                        <?php\n";
				echo "                        echo $_SESSION[\"rows\"][" . $x . "][\"hot_goal\"];\n";
				echo "                        ?>\n";
				echo "                    </p>\n";
				echo "                </article>\n";
				echo "            </div>\n";
        		echo "        </div>";
        	}
        }
        else
        {
        	echo "Database connection failure.";
        }
        ?>
        <div class="grid grid-pad" id="match1">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>
	                    <?php
	                    echo $_SESSION["rows"][0]["match_num"];
	                    ?>
                    </p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>
	                    <?php
	                    echo $_SESSION["rows"][0]["drive"];
	                    ?>
                    </p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>
	                    <?php
	                    echo $_SESSION["rows"][0]["possesion"];
	                    ?>
                    </p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>
	                    <?php
	                    echo $_SESSION["rows"][0]["pickup"];
	                    ?>
                    </p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>
	                    <?php
	                    echo $_SESSION["rows"][0]["catching"];
	                    ?>
                    </p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>
	                    <?php
	                    echo $_SESSION["rows"][0]["passing"];
	                    ?>
                    </p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>
	                    <?php
	                    echo $_SESSION["rows"][0]["shooter"];
	                    ?>
                    </p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>
	                    <?php
	                    echo $_SESSION["rows"][0]["defense"];
	                    ?>
                    </p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>
	                    <?php
	                    echo $_SESSION["rows"][0]["goalie"];
	                    ?>
                    </p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>
	                    <?php
	                    echo $_SESSION["rows"][0]["hot_goal"];
	                    ?>
                    </p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match5">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>3</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match5">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>3</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match7">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>7</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>3</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match11">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>11</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>2</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match15">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>15</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>1</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match21">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>21</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>2</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match24">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>24</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>5</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match24">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>24</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>2</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match30">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>30</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>5</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match33">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>33</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>4</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match38">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>38</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>5</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match42">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>42</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>1</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match45">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>45</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>4</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match51">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>51</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>2</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match53">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>53</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>2</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match62">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>62</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>2</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match66">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>66</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>2</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match69">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>69</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>1</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match75">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>75</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>3</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match78">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>78</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>2</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match84">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>84</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>4</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match88">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>88</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>4</p>
                </article>
            </div>
        </div>
        <div class="grid grid-pad" id="match91">
            <div class="col-1-10">
                <article class="module" id="matchNum">
                    <p>91</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="drivePerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="possesionPerf">
                    <p>1</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="pickupPerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="catchingPerf">
                    <p>3</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="passingPerf">
                    <p>4</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="shootingerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="defensePerf">
                    <p>5</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="goaliePerf">
                    <p>2</p>
                </article>
            </div>
            <div class="col-1-10">
                <article class="module" id="hotgoalPerf">
                    <p>4</p>
                </article>
            </div>
        </div>
        
    </body>
</html>