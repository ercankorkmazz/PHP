<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
		$idler.="id=$degerler or ";
		
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from yorumlar where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bilgi","Seçili yorumlar silindi.");
	else
		setcookie("bilgi","Ýþlem Baþarýsýz!");
	
	if(isset($_GET["scratchYorumlar"]))
	{		
		header ("Location:index.php?scratchYorumlar=".$_GET["scratchYorumlar"]);
	}
	elseif(isset($_GET["arduinoYorumlar"]))
	{
		header ("Location:index.php?arduinoYorumlar=".$_GET["arduinoYorumlar"]);
	}
	elseif(isset($_GET["appYorumlar"]))
	{
		header ("Location:index.php?appYorumlar=".$_GET["appYorumlar"]);
	}
	elseif(isset($_GET["aliceYorumlar"]))
	{
		header ("Location:index.php?aliceYorumlar=".$_GET["aliceYorumlar"]);
	}
	elseif(isset($_GET["koduYorumlar"]))
	{
		header ("Location:index.php?koduYorumlar=".$_GET["koduYorumlar"]);
	}
	elseif(isset($_GET["SketchUpYorumlar"]))
	{
		header ("Location:index.php?SketchUpYorumlar=".$_GET["SketchUpYorumlar"]);
	}
?>