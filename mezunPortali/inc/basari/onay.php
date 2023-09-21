<?php
			@include('inc/baglan.php');
			
			$sorgu=mysql_query("select * from basarilar where id=".$_GET["onayBasari"]);
            $alanlar=mysql_fetch_array($sorgu);
			$kontrol=0;
			
			if($alanlar["onay"]==1)
			{
				$sql="update basarilar set onay = '0' where id=".$_GET["onayBasari"];
				$kontrol=0;
			}
			else
			{
				$sql="update basarilar set onay = '1' where id=".$_GET["onayBasari"];
				$kontrol=1;
			}
			
			if (!@mysql_query($sql,$baglan))
				setcookie("bildirim","Ýþlem Baþarýsýz!");
				
			header ("Location:index.php?basarilarYonet");
?>