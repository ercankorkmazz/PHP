<?php
	if(!isset($_SESSION["$_SERVER[SERVER_NAME]dil"]))
	{
		$_SESSION["$_SERVER[SERVER_NAME]dil"] = "ar";
		@include("inc/dil/ar.php");
	}
	if(isset($_GET["dil"]))
	{
		if($_GET["dil"]=="tr")
		{
			$_SESSION["$_SERVER[SERVER_NAME]dil"] = "tr";
			@include("inc/dil/tr.php");
		}
		else if($_GET["dil"]=="en")
		{
			$_SESSION["$_SERVER[SERVER_NAME]dil"] = "en";
			@include("inc/dil/en.php");
		}
		else if($_GET["dil"]=="ar")
		{
			$_SESSION["$_SERVER[SERVER_NAME]dil"] = "ar";
			@include("inc/dil/ar.php");
		}
		header("Location: index.php");
	}
	else
	{
		if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "tr")
			@include("inc/dil/tr.php");
		else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "en")
			@include("inc/dil/en.php");
		else if($_SESSION["$_SERVER[SERVER_NAME]dil"] == "ar")
			@include("inc/dil/ar.php");
	}
?>