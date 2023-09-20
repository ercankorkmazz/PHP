<?php
	if(isset($_GET["scratch"]))
	{
		$ders="scratch";
		$tablo="scratch";
	}
	elseif(isset($_GET["arduino"]))
	{
		$ders="arduino";
		$tablo="smallbasic";
	}
	elseif(isset($_GET["app"]))
	{
		$ders="app";
		$tablo="app";
	}
	elseif(isset($_GET["alice"]))
	{
		$ders="alice";
		$tablo="alice";
	}
	elseif(isset($_GET["kodu"]))
	{
		$ders="kodu";
		$tablo="kodu";
	}
	elseif(isset($_GET["SketchUp"]))
	{
		$ders="SketchUp";
		$tablo="sketchup";
	}
	
	include("login/inc/baglan.php");
	if(!isset($_GET["devam"]))
	{
		if(isset($_GET["scratch"]))
		{
			$dersID=@mysql_fetch_array(@mysql_query("select * from scratch where onay='1' order by id desc limit 0,1"));
			$dersID=$dersID["id"];
		}
		elseif(isset($_GET["arduino"]))
		{
			$dersID=@mysql_fetch_array(@mysql_query("select * from smallbasic where onay='1' order by id desc limit 0,1"));				$dersID=$dersID["id"];
		}
		elseif(isset($_GET["app"]))
		{
			$dersID=@mysql_fetch_array(@mysql_query("select * from app where onay='1' order by id desc limit 0,1"));
			$dersID=$dersID["id"];
		}
		elseif(isset($_GET["alice"]))
		{
			$dersID=@mysql_fetch_array(@mysql_query("select * from alice where onay='1' order by id desc limit 0,1"));
			$dersID=$dersID["id"];
		}
		elseif(isset($_GET["kodu"]))
		{
			$dersID=@mysql_fetch_array(@mysql_query("select * from kodu where onay='1' order by id desc limit 0,1"));
			$dersID=$dersID["id"];
		}
		elseif(isset($_GET["SketchUp"]))
		{
			$dersID=@mysql_fetch_array(@mysql_query("select * from sketchup where onay='1' order by id desc limit 0,1"));
			$dersID=$dersID["id"];
		}
	}
	else
		$dersID=$_GET['devam'];
	
	if(!isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"]))
	{
		setcookie("bilgi","Puanlama yapabilmek için üye giriþi yapýnýz.");
	}
	else
	{
		$puankontrol=0;
		$uyeId=@$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"];
		$sorgu=@@mysql_query("select * from puanlama where ders='$ders' and dersID='$dersID' and yazarID='$uyeId'");
		$puankontrol=@@mysql_num_rows($sorgu);
		
		if($puankontrol==0)
		{
			include("login/inc/baglan.php");
			$toplamPuan=@@mysql_fetch_array(@@mysql_query("select * from $tablo where id='$dersID'"));
			$toplamPuan=$toplamPuan["puan"];
			
			$sql="insert into puanlama (ders,dersID,yazarID,puan) values ('$ders','$dersID','$uyeId','$_POST[puan]')";
			if(@@mysql_query($sql,$baglan))
			{
				$yeniToplam = $toplamPuan + $_POST["puan"];	
				$sql="update $tablo set puan='$yeniToplam' where id='$dersID'";
				@@mysql_query($sql,$baglan);
			}
			else
				setcookie("bilgi","Ýþlem baþarýsýz. Lütfen daha sonra tekrar deneyiniz.");
		}
		else if($puankontrol==1)
		{
			include("login/inc/baglan.php");
			$toplamPuan=@@mysql_fetch_array(@@mysql_query("select * from $tablo where id='$dersID'"));
			$toplamPuan=$toplamPuan["puan"];
			
			$mevcutPuanlama=@@mysql_fetch_array($sorgu);
			$toplamKontrolu=0;
			if($mevcutPuanlama["puan"] > $_POST["puan"])
			{
				$yeniToplamPuan = $toplamPuan - ($mevcutPuanlama["puan"]-$_POST["puan"]);	
				$toplamKontrolu=1;
			}
			else if($mevcutPuanlama["puan"] < $_POST["puan"])
			{
				$yeniToplamPuan = $toplamPuan + ($_POST["puan"]-$mevcutPuanlama["puan"]);
				$toplamKontrolu=1;
			}
			
			if($toplamKontrolu==1)
			{
				include("login/inc/baglan.php");
				$sql="update $tablo set puan='$yeniToplamPuan' where id='$dersID'";
				@@mysql_query($sql,$baglan);
			}
			
			include("login/inc/baglan.php");
			$sql="update puanlama set puan='$_POST[puan]' where ders='$ders' and dersID='$dersID' and yazarID='$uyeId'";
			@@mysql_query($sql,$baglan);
		}
	}
	
	header("Location:index.php?$ders&devam=$dersID");
?>