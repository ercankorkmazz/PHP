<?php
	// kullan�c� ad� kontrol�
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
				setcookie("bilgi","Kullan�c� bilgileri g�ncellendi!");
				setcookie("renk","#3C0");
				
				$_SESSION["$_SERVER[SERVER_NAME]uyeOturumKadi"]=$_POST["kadi"];
				$_SESSION["$_SERVER[SERVER_NAME]uyeOturum"]=$_POST["adSoyad"];
			}
			else
			{
				setcookie("bilgi","Kay�t Ba�ar�s�z!");
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
					setcookie("bilgi","[ Ad Soyad ] g�ncellendi.");
					setcookie("renk","#3C0");
				}
				else
					setcookie("bilgi","[ $_POST[kadi] ] kullan�c�s� sistemde kay�tl�. Farkl� bir kullan�c� ad� deneyiniz. <span style='background:#3C0;display:block;padding:5px;margin-top:5px;'>[ Ad Soyad ] g�ncellendi.</span>");
			}
			else
			{
				setcookie("bilgi","[ $_POST[kadi] ] kullan�c�s� sistemde kay�tl�. Farkl� bir kullan�c� ad� deneyiniz. - Ad Soyad g�ncellenemedi.");
			}
		}
	}
	else
		setcookie("bilgi","&#8220;Ad Soyad&#8221; ve &#8220;Kullan�c� Ad�&#8221; alanlar� bo� b�rak�lamaz!");
		
	header ("Location:index.php?profil");
?>