<?php
		if(!empty($_POST["cumle"]))
		{
			@include('inc/baglan.php'); 
			
			$sql="insert into cumleler (cumle) values ('$_POST[cumle]')";
				
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Kay�t Ba�ar�l�");
				header ("Location:index.php");
			}
			else
			{
				setcookie("bildirim","Kay�t Ba�ar�s�z");
				header ("Location:index.php?yeni");
			}
		}
		else
		{
			setcookie("bildirim","C�mle yaz�n�z.");
			header ("Location:index.php?yeni");
		}
			
		
?>