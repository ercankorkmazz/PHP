<?php
// kullanýcý adý kontrolü
@include('inc/baglan.php');
$kontrol=0;
$onay="";

if($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]==0)
	$tablo="kullanici";
else
{
	$tablo="ogretmen";
	$onay=",onay = '1'";
}

$sql = mysql_query("select * from $tablo");
while($alanlar=mysql_fetch_array($sql))
{
	if($alanlar["id"]!=$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"])
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
			
			if($_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]=="admin")
				$sql="update $tablo set kullanici = '$_POST[isim]',mail = '$_POST[mail]'$onay where id=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
			else
			{
				if($_POST["kullanici"]!="admin")
				{
					if($kontrol==0)
					{
						$sql="update $tablo set kadi = '$_POST[kullanici]',kullanici = '$_POST[isim]',mail = '$_POST[mail]'$onay where id=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
						$_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]=$_POST["kullanici"];
					}
				}
			}
			
			if($_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]!="admin")
			{
				if($_POST["kullanici"]!="admin")
				{
					if($kontrol==0)
					{
						if (@mysql_query($sql,$baglan))
						{
							$_SESSION["$_SERVER[SERVER_NAME]mezunportalikullanici"]=$_POST["isim"];
							
							if(($_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]!="admin") and ($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]==0))
							{
								$sql="update mezun set adSoyad = '$_POST[isim]',ePostaK = '$_POST[mail]' where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
								@mysql_query($sql,$baglan);
							}
								
							setcookie("bildirim","Bilgiler Güncellendi");
						}
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
				{
					$_SESSION["$_SERVER[SERVER_NAME]mezunportalikullanici"]=$_POST["isim"];
					
					if(($_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]!="admin") and ($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]==0))
					{
						$sql="update mezun set adSoyad = '$_POST[isim]' where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
						@mysql_query($sql,$baglan);
					}
					
					setcookie("bildirim","Bilgiler Güncellendi");
				}
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
		$sorgu=mysql_query("select * from $tablo where id=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"]);
		$alanlar=mysql_fetch_array($sorgu);
		
		if($_POST["mSifre"]==$alanlar["sifre"])
		{
			if($_POST["ySifre"]==$_POST["tSifre"])
			{
				@include('inc/baglan.php');
				
				if($_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]=="admin")
					$sql="update $tablo set sifre = '$_POST[ySifre]',kullanici = '$_POST[isim]',mail = '$_POST[mail]'$onay where id=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
				else
				{
					if($_POST["kullanici"]!="admin")
					{
						if($kontrol==0)
						{
							$sql="update $tablo set kadi = '$_POST[kullanici]',sifre = '$_POST[ySifre]',kullanici = '$_POST[isim]',mail = '$_POST[mail]'$onay where id=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
							$_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]=$_POST["kullanici"];
						}
					}
				}	
				if($_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]!="admin")
				{
					if($_POST["kullanici"]!="admin")
					{
						if($kontrol==0)
						{
							if (@mysql_query($sql,$baglan))
							{
								$_SESSION["$_SERVER[SERVER_NAME]mezunportalikullanici"]=$_POST["isim"];
								
								if(($_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]!="admin") and ($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]==0))
								{
									$sql="update mezun set adSoyad = '$_POST[isim]' where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
									@mysql_query($sql,$baglan);
								}
								
								setcookie("bildirim","Bilgiler Güncellendi");
							}
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
					{
						$_SESSION["$_SERVER[SERVER_NAME]mezunportalikullanici"]=$_POST["isim"];
						
						if(($_SESSION["$_SERVER[SERVER_NAME]mezunportalikadi"]!="admin") and ($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]==0))
						{
							$sql="update mezun set adSoyad = '$_POST[isim]' where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"];
							@mysql_query($sql,$baglan);
						}
						
						setcookie("bildirim","Bilgiler Güncellendi");
					}
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