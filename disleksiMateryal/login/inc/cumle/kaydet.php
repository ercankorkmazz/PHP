<?php
		if(!empty($_POST["cumle"]))
		{
			@include('inc/baglan.php'); 
			
			$sql="insert into cumleler (cumle) values ('$_POST[cumle]')";
				
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","Kayýt Baþarýlý");
				header ("Location:index.php");
			}
			else
			{
				setcookie("bildirim","Kayýt Baþarýsýz");
				header ("Location:index.php?yeni");
			}
		}
		else
		{
			setcookie("bildirim","Cümle yazýnýz.");
			header ("Location:index.php?yeni");
		}
			
		
?>