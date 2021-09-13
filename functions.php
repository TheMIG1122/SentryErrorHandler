<?php

function query($sql)
{
	global $connection;
	return mysqli_query($connection, $sql);
}

function confirm($result)
{
	global $connection;
	if(!$result)
	{
		redirect('error.php?error=SQL Query&msg=Please check your query.');
	}
}

function escape_string($string)
{
	global $connection;
	return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result)
{
	return mysqli_fetch_array($result);
}

function num_rows($result)
{
	return mysqli_num_rows($result);
}

function redirect($location)
{
	header("Location: $location");
}