<?php
session_start();
error_reporting(NULL);
if(isset($_SESSION["$_SERVER[SERVER_NAME]"]))
{
	require "browse.php";
}

?>