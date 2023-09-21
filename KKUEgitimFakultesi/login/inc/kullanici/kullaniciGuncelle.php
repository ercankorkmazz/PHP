<?php
	if($_SESSION["$_SERVER[SERVER_NAME]kadi"]!="admin")
	{
		if(!empty($_POST["kadi"]))
		{
			if($_POST["kadi"]!="admin")
			{
				@include('inc/baglan.php');
				$sql="update kullanici set kadi = '$_POST[kadi]' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
				
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bildirim","Kullanici adi güncellendi!");
					$_SESSION["$_SERVER[SERVER_NAME]kadi"]=$_POST["kadi"];
					header ("Location:index.php?kullanici");
				}
				else
				{
					setcookie("bildirim","Kayit Basarisiz!");
					header ("Location:index.php?kullanici");
				}
			}
			else
			{
				setcookie("bildirim","Kullanici adi &#8220;admin&#8221; olamaz!");
				header ("Location:index.php?kullanici");
			}
		}
		else
		{
			setcookie("bildirim","Kullanici adini yaziniz!");
			header ("Location:index.php?kullanici");
		}
	}
?>