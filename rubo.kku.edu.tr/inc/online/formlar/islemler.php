<?php
	if(!empty($_POST["veri"]))
	{
		$formNo = $_SESSION["$_SERVER[SERVER_NAME]actForm"];
		$ogrenciNo = $_SESSION["$_SERVER[SERVER_NAME]ogrenciNo"];
		
		@include("inc/inc_baglan.php");
		$sql_islem_1="insert into veriler (ogrenciNo,formNo,adSoyad,veri) values ('$ogrenciNo','$formNo','$_POST[adSoyad]','$_POST[veri]')";
		if(@mysql_query($sql_islem_1,$baglan))
		{
			@include("inc/inc_baglan.php");
			$sql_islem_2="update kullanici set f".$formNo." = '1' where ogrenciNo=".$ogrenciNo;
			@mysql_query($sql_islem_2,$baglan);
		}
	}
	
	header("Location:index.php");
?>