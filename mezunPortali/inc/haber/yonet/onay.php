<?php
			@include('inc/baglan.php');
			
			$sorgu=mysql_query("select * from haberler where id=".$_GET["onay"]);
            $alanlar=mysql_fetch_array($sorgu);
			$kontrol=0;
			
			if($alanlar["onay"]==1)
			{
				$sql="update haberler set onay = '0' where id=".$_GET["onay"];
				$kontrol=0;
			}
			else
			{
				$sql="update haberler set onay = '1' where id=".$_GET["onay"];
				$kontrol=1;
			}
			
			if (!@mysql_query($sql,$baglan))
				setcookie("bildirim","Ýþlem Baþarýsýz!");
				
			header ("Location:index.php?haberlerYonet");
?>