<?php
	// kullan�c� ad� kontrol�
	@include('login/inc/baglan.php');
	$kontrol=0;
	
	$sql=mysql_query("select * from uyelik where kadi='$_POST[kadi]'");
	$kontrol=@mysql_num_rows($sql);
	
	if(empty($_POST["adSoyad"]) || empty($_POST["kadi"]) || empty($_POST["sifre"]) || empty($_POST["sifreTekrar"]) || empty($_POST["email"]))
	{
	 	setcookie("bilgi","L�tfen t�m alanlar� doldurunuz!");
		header("location:index.php?uyelik");
	}
	else
	{
		if($kontrol==0)
		{
			if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL ))
			{
				setcookie("bilgi","Ge�erli bir mail adresi giriniz!");
				header("location:index.php?uyelik");
			}
			else
			{
				if($_POST["sifre"] != $_POST["sifreTekrar"])
				{
					setcookie("bilgi","�ifre ve �ifre tekrar� uyu�muyor!");
					header("location:index.php?uyelik");
				}
				else
				{
					$kaydet=mysql_query("INSERT INTO uyelik SET adSoyad='$_POST[adSoyad]',kadi='$_POST[kadi]',sifre='$_POST[sifre]',email='$_POST[email]'");
						
					if($kaydet)
					{
						setcookie("bilgi","�ye kayd�n�z ba�ar�yla yap�ld�.");
						setcookie("renk","#3C0");
						header("location:index.php");
					}
					else
					{
						setcookie("bilgi","Kay�t ba�ar�s�z. L�tfen daha sonra tekrar deneyiniz.");
						header("location:index.php?uyelik");
					}
				}
			}
		}
		else
		{
			setcookie("bilgi","[ $_POST[kadi] ] kullan�c�s� sistemde kay�tl�. Farkl� bir kullan�c� ad� deneyiniz.");
			header("location:index.php?uyelik");
		}
	}
?>