<?php
	// kullanýcý adý kontrolü
	@include('inc/baglan.php');
	$kontrol=0;
	
	$sql=mysql_query("select * from kullanicilar where kadi='$_POST[kadi]'");
	$kontrol=@mysql_num_rows($sql);
	
	if(!empty($_POST["kadi"]))
	{
		if($_SESSION["$_SERVER[SERVER_NAME]kadi"]!=$_POST["kadi"])
		{
			if($kontrol==0)
			{
				@include('inc/baglan.php');
				$sql="update kullanicilar set kadi = '$_POST[kadi]' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
						
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bilgi","Kullanýcý adý güncellendi!");
					
					$_SESSION["$_SERVER[SERVER_NAME]kadi"]=$_POST["kadi"];
				}
				else
				{
					setcookie("bilgi","Kayýt Baþarýsýz!");
				}
			}
			else
			{
				setcookie("bilgi","[ $_POST[kadi] ] kullanýcýsý sistemde kayýtlý. Farklý bir kullanýcý adý deneyiniz.");
			}
		}
	}
	else
		setcookie("bilgi","[ Kullanýcý Adý ] boþ býrakýlamaz!");
		
	header ("Location:index.php?ayarlar");
?>