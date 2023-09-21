<?php
	if((!empty($_POST["soru1"])) or (!empty($_POST["soru2"])) or (!empty($_POST["soru3"])))
	{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from mezun where kID=".$_SESSION["$_SERVER[SERVER_NAME]mezunportalikID"]);
		$mezunID=mysql_fetch_array($sorgu);
		
		$sql="insert into anket (mezunID,soru1,soru2,soru3) values ('$mezunID[id]','$_POST[soru1]','$_POST[soru2]','$_POST[soru3]')";
		if (!@mysql_query($sql,$baglan))
		{
			setcookie("bildirim","Kayýt baþarýsýz. Daha sonra tekrar deneyiniz.");
		}
	}
	
	header("location:index.php?anket");
?>