<?php
	@include("inc/inc_baglan.php");
	$sql=@mysql_query("select * from kullanici");
	$kontrol=0;
	while($alanlar=@mysql_fetch_array($sql))
	{
		if($_POST["kadi"]==$alanlar["kadi"] && $_POST["sifre"]==$alanlar["sifre"]) 
		{
			$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"] = $alanlar["id"];
			$_SESSION["$_SERVER[SERVER_NAME]kullaniciAdi"] = $alanlar["kadi"];
			$_SESSION["$_SERVER[SERVER_NAME]kullaniciTipi"] = $alanlar["kullaniciTipi"];
			$_SESSION["$_SERVER[SERVER_NAME]grupNo"] = $alanlar["grupNo"];
			$_SESSION["$_SERVER[SERVER_NAME]ogrenciNo"] = $alanlar["ogrenciNo"];
			
			// aktif formu getirir
			@include("inc/inc_baglan.php");
			$sql_fotm=@mysql_query("select * from kullanici where kullaniciTipi = '1'");
			$form=@mysql_fetch_array($sql_fotm);
			$_SESSION["$_SERVER[SERVER_NAME]actForm"] = $form["actForm"];
			
			// ceza durumunu kontrol eder
			if($alanlar["ceza"] == 0)
				$_SESSION["$_SERVER[SERVER_NAME]ceza"] = "0";
			else
				$_SESSION["$_SERVER[SERVER_NAME]ceza"] = "1";
			
			setcookie("bilgi","");
			$kontrol=1;
			
			header("Location:index.php");
		}
	}
	if($kontrol==0)
	{
		setcookie("bilgi","* Kullanýcý adý ya da þifre hatalý.");
		header("Location:index.php?#giris_yap");
	}
	
?>