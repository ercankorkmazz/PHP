<?php
	if(isset($_POST["AYTR"]))
	{
		if(!empty($_POST["AYTR"]) && !empty($_POST["AYEN"]) && !empty($_POST["AYAR"]) && !empty($_POST["DYTR"]) && !empty($_POST["DYEN"]) && !empty($_POST["DYAR"]) && !empty($_POST["K1_4"]) && !empty($_POST["K5_8"]) && !empty($_POST["K9_15"]) && !empty($_POST["K16_30"]) && !empty($_POST["mesafe"]))
		{
			@include('inc/baglanAR.php'); 
			$sql="insert into transfer (AYTR,AYEN,AYAR,DYTR,DYEN,DYAR,K1_4,K5_8,K9_15,K16_30,mesafe) values ('$_POST[AYTR]','$_POST[AYEN]','$_POST[AYAR]','$_POST[DYTR]','$_POST[DYEN]','$_POST[DYAR]','$_POST[K1_4]','$_POST[K5_8]','$_POST[K9_15]','$_POST[K16_30]','$_POST[mesafe]')";
					
					if (@mysql_query($sql,$baglanAR))
					{
						setcookie("bildirim","Transfer Kaydý Baþarýlý");
						header("location: index.php?transferler");	
					}
					else
					{
						unlink($resimYolu);
						setcookie("bildirim","Kayýt baþarýsýz. Lütfen daha sonra tekrar deneyiniz.");
						header("location: index.php?transferler");
					}
		}
		else
		{
			setcookie("bildirim","* ile belirtilen alanlar boþ býrakýlamaz!");
			header("location: index.php?yenitransfer");
		}
	}
?>