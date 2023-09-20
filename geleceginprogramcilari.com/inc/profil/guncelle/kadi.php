<?php
	// kullanýcý adý kontrolü
	@include('login/inc/baglan.php');
	$kontrol=0;
	
	$sql=mysql_query("select * from uyelik where kadi='$_POST[kadi]'");
	$kontrol=@mysql_num_rows($sql);
	
	if(!empty($_POST["kadi"]) and !empty($_POST["adSoyad"]))
	{
		if($kontrol==0)
		{
			@include('login/inc/baglan.php');
			$sql="update uyelik set adSoyad = '$_POST[adSoyad]', kadi = '$_POST[kadi]' where id=".$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"];
					
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bilgi","Kullanýcý bilgileri güncellendi!");
				setcookie("renk","#3C0");
				
				$_SESSION["$_SERVER[SERVER_NAME]uyeOturumKadi"]=$_POST["kadi"];
				$_SESSION["$_SERVER[SERVER_NAME]uyeOturum"]=$_POST["adSoyad"];
			}
			else
			{
				setcookie("bilgi","Kayýt Baþarýsýz!");
			}
		}
		else
		{
			@include('login/inc/baglan.php');
			$sql="update uyelik set adSoyad = '$_POST[adSoyad]' where id=".$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"];
					
			if (@mysql_query($sql,$baglan))
			{
				$_SESSION["$_SERVER[SERVER_NAME]uyeOturum"]=$_POST["adSoyad"];
				
				if($_SESSION["$_SERVER[SERVER_NAME]uyeOturumKadi"]==$_POST["kadi"])
				{
					setcookie("bilgi","[ Ad Soyad ] güncellendi.");
					setcookie("renk","#3C0");
				}
				else
					setcookie("bilgi","[ $_POST[kadi] ] kullanýcýsý sistemde kayýtlý. Farklý bir kullanýcý adý deneyiniz. <span style='background:#3C0;display:block;padding:5px;margin-top:5px;'>[ Ad Soyad ] güncellendi.</span>");
			}
			else
			{
				setcookie("bilgi","[ $_POST[kadi] ] kullanýcýsý sistemde kayýtlý. Farklý bir kullanýcý adý deneyiniz. - Ad Soyad güncellenemedi.");
			}
		}
	}
	else
		setcookie("bilgi","&#8220;Ad Soyad&#8221; ve &#8220;Kullanýcý Adý&#8221; alanlarý boþ býrakýlamaz!");
		
	header ("Location:index.php?profil");
?>