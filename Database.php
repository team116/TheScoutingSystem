<?php
/*
class Database {
    private $connection;

    // retuns an object containing a connection to mysql & a particular database
    public function __construct($db_name, $db_user = "root", $db_passwd = "")
    {
    	if (IsStringSafe($db_name) && IsStringSafe($db_user) && IsStringSafe($db_passwd))
	    {
	        $connection = mysql_connect('localhost', "'".$db_user."'", "'".$db_passwd."'");
	        if (gettype($connection) != "boolean") // if succeded mysql connection
	        {
	        	if (!mysql_select_db("'".$db_name."'", $connection)) // if failed db selection
	        	{
		        	return "Unable to locate database:'" . $db_name . "'\nError:" . mysql_error();
	        	}
	    	}
	    	else
	    	{
	    		return "Unable to connect to MySQL host.\nError:" . mysql_error();
	    	}
    	}
    	else
    	{
    		return "Unsafe parameter(s).";
    	}
    	// returns object on success
    }

    public function Query($query)
    {
    	if (IsStringSafe($query))
    	{

    	}
    	else
    	{}
    }
}
*/
/*
function Connect($db_name, $db_user = "root", $db_passwd = "")
{
	if (IsStringSafe($db_name) && IsStringSafe($db_user) && IsStringSafe($db_passwd))
    {
        $connection = mysqli_connect('localhost', "'".$db_user."'", "'".$db_passwd."'");
        if (gettype($connection) != "boolean") // if succeded mysql connection
        {
        	if (!mysql_select_db("'".$db_name."'", $connection)) // if failed db selection
        	{
	        	return "Unable to locate database:'" . $db_name . "'\nError:" . mysql_error();
        	}
    	}
    	else
    	{
    		return "Unable to connect to MySQL host.\nError:" . mysql_error();
    	}
    	
    	return $connection;
	}
	else
	{
		return "Unsafe parameter(s).";
	}
}
*/
function IsStringSafe($value)
{
    if (gettype($value) != "string")
    {
        return false;
    }

    for ($x = 0; $x < strlen($value); ++$x)
    {
        if ($value[$x] == '\'' && $value[$x - 1] == '\\')
        {
            return false;
        }
    }

    return true;
}
?>