<?php
	@include('login/inc/baglan.php');
	$sql=@mysql_query("select * from yorumlar where id=".$_GET["yorumSil"]);
	$yorum=@mysql_fetch_array($sql);
	
	if($yorum["uyeID"]==$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"])
	{
		$sql="delete from yorumlar where id=".$_GET["yorumSil"];
		if (@mysql_query($sql,$baglan))
		{
			setcookie("bilgi","Yorum silindi.");
			setcookie("renk","#3C0");
		}
		else
			setcookie("bilgi","Ýþlem Baþarýsýz!");
		
		
		header ("Location:index.php?$ders&devam=$dersID&#end");
	}
	else
	{
		setcookie("bilgi","Sadece kendi yorumlarýnýzý silebilirsiniz!");
		header ("Location:index.php?$ders&devam=$dersID");
	}
?>