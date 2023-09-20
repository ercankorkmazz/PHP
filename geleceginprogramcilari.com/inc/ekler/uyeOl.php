<?php
	// kullanýcý adý kontrolü
	@include('login/inc/baglan.php');
	$kontrol=0;
	
	$sql=mysql_query("select * from uyelik where kadi='$_POST[kadi]'");
	$kontrol=@mysql_num_rows($sql);
	
	if(empty($_POST["adSoyad"]) || empty($_POST["kadi"]) || empty($_POST["sifre"]) || empty($_POST["sifreTekrar"]) || empty($_POST["email"]))
	{
	 	setcookie("bilgi","Lütfen tüm alanlarý doldurunuz!");
		header("location:index.php?uyelik");
	}
	else
	{
		if($kontrol==0)
		{
			if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL ))
			{
				setcookie("bilgi","Geçerli bir mail adresi giriniz!");
				header("location:index.php?uyelik");
			}
			else
			{
				if($_POST["sifre"] != $_POST["sifreTekrar"])
				{
					setcookie("bilgi","Þifre ve þifre tekrarý uyuþmuyor!");
					header("location:index.php?uyelik");
				}
				else
				{
					$kaydet=mysql_query("INSERT INTO uyelik SET adSoyad='$_POST[adSoyad]',kadi='$_POST[kadi]',sifre='$_POST[sifre]',email='$_POST[email]'");
						
					if($kaydet)
					{
						setcookie("bilgi","Üye kaydýnýz baþarýyla yapýldý.");
						setcookie("renk","#3C0");
						header("location:index.php");
					}
					else
					{
						setcookie("bilgi","Kayýt baþarýsýz. Lütfen daha sonra tekrar deneyiniz.");
						header("location:index.php?uyelik");
					}
				}
			}
		}
		else
		{
			setcookie("bilgi","[ $_POST[kadi] ] kullanýcýsý sistemde kayýtlý. Farklý bir kullanýcý adý deneyiniz.");
			header("location:index.php?uyelik");
		}
	}
?>