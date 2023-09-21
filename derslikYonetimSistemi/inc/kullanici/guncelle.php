<?php
// kullanýcý adý kontrolü
@include('inc/baglan.php');
$kontrol=0;	
$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];

$sql = mysql_query("select * from kullanici");
while($alanlar=mysql_fetch_array($sql))
{
	if($alanlar["bolumID"]!=$bolumID)
	{
		if($_POST["kullanici"]==$alanlar["kadi"])
			$kontrol=1;
	}
}
if(empty($_POST["mSifre"]) and empty($_POST["ySifre"]) and empty($_POST["tSifre"]))
{
	if(empty($_POST["isim"]) or empty($_POST["kullanici"]) or empty($_POST["mail"]))
	{
		setcookie("bildirim"," * ile belirtilen alanlar boþ býrakýlamaz");
		header ("Location:index.php?kullanici");
	}
	else
	{
			@include('inc/baglan.php');
			
			if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin")
				$sql="update kullanici set kullanici = '$_POST[isim]',mail = '$_POST[mail]' where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkID"];
			else
			{
				if($_POST["kullanici"]!="admin")
				{
					if($kontrol==0)
					{
						$sql="update kullanici set kullanici = '$_POST[isim]',kadi = '$_POST[kullanici]',mail = '$_POST[mail]' where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkID"];
						$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=$_POST["kullanici"];
					}
				}
			}
			
			if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin")
			{
				if($_POST["kullanici"]!="admin")
				{
					if($kontrol==0)
					{
						if (@mysql_query($sql,$baglan))
							setcookie("bildirim","Bilgiler Güncellendi");
						else
							setcookie("bildirim","Kayýt Baþarýsýz");
					}
					else
						setcookie("bildirim","[ $_POST[kullanici] ] kullanýcýsý sistemde kayýtlý. Farklý bir kullanýcý adý deneyiniz.");
				}
				else
					setcookie("bildirim","Kullanýcý adý [ admin ] olamaz.");
			}
			else
			{
				if (@mysql_query($sql,$baglan))
					setcookie("bildirim","Bilgiler Güncellendi");
				else
					setcookie("bildirim","Kayýt Baþarýsýz");
			}				
			
			header ("Location:index.php?kullanici");
	}
}
else if(empty($_POST["isim"]) or empty($_POST["kullanici"]) or empty($_POST["mSifre"]) or empty($_POST["ySifre"]) or empty($_POST["tSifre"]) or empty($_POST["mail"]))
{
	setcookie("bildirim"," * ile belirtilen alanlar boþ býrakýlamaz");
	header ("Location:index.php?kullanici");
}
else
{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from kullanici where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkID"]);
		$alanlar=mysql_fetch_array($sorgu);
		
		if($_POST["mSifre"]==$alanlar["sifre"])
		{
			if($_POST["ySifre"]==$_POST["tSifre"])
			{
				@include('inc/baglan.php');
				
				if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin")
					$sql="update kullanici set kullanici = '$_POST[isim]',sifre = '$_POST[ySifre]',mail = '$_POST[mail]',onay = '1' where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkID"];
				else
				{
					if($_POST["kullanici"]!="admin")
					{
						if($kontrol==0)
						{
							$sql="update kullanici set kullanici = '$_POST[isim]',kadi = '$_POST[kullanici]',sifre = '$_POST[ySifre]',mail = '$_POST[mail]',onay = '1' where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkID"];
							$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=$_POST["kullanici"];
						}
					}
				}	
				if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin")
				{
					if($_POST["kullanici"]!="admin")
					{
						if($kontrol==0)
						{
							if (@mysql_query($sql,$baglan))
								setcookie("bildirim","Bilgiler Güncellendi");
							else
								setcookie("bildirim","Kayýt Baþarýsýz");
						}
						else
							setcookie("bildirim","[ $_POST[kullanici] ] kullanýcýsý sistemde kayýtlý. Farklý bir kullanýcý adý deneyiniz.");
					}
					else
						setcookie("bildirim","Kullanýcý adý [ admin ] olamaz.");
				}
				else
				{
					if (@mysql_query($sql,$baglan))
						setcookie("bildirim","Bilgiler Güncellendi");
					else
						setcookie("bildirim","Kayýt Baþarýsýz");
				}
			}
			else
				setcookie("bildirim","&#8220;Yeni Þifre&#8221; ile &#8220;Þifre Tekrarý&#8221; uyuþmuyor");
		}
		else
			setcookie("bildirim","Giriþ yaptýðýnýz &#8220;Mevcut Þifre&#8221; yanlýþ");
		
		header ("Location:index.php?kullanici");
}	
?>