<?php
		if(!empty($_POST["ad"]))
		{
			if($_POST["kadi"]!="admin")
			{
				// kullan�c� ad� kontrol�
				@include('inc/baglan.php');
				$kontrol=0;	
				$sql = mysql_query("select * from kullanici");
				while($alanlar=mysql_fetch_array($sql))
				{
					if($_POST["kadi"]==$alanlar["kadi"])
						$kontrol=1;	
				}
				if($kontrol==0)
				{
					$karakter = "QWERTYUIPASDFGHJKLZXCVBNM123456789";
					$karakterSayisi=strlen($karakter);
					$sifre=null;
					for($i=1;$i<=5;$i++)
					{
						$sayi=rand(0,$karakterSayisi-1);
						$sifre .= $karakter[$sayi];	
					}
					
					if((!empty($_POST["kadi"])) and (!empty($_POST["kullanici"])))
					{
						$sql="insert into bolumler (bolumadi,sure) values ('$_POST[ad]','$_POST[sure]')";
						
						if (@mysql_query($sql,$baglan))
						{
							@include('inc/baglan.php'); 
							$sql = mysql_query("select * from bolumler order by id desc limit 0,1");
							$alanlar=mysql_fetch_array($sql);
							
							for($i=1;$i<=$alanlar["sure"];$i++)
							{
								for($k=1;$k<=14;$k++)
								{
									$sql="insert into dersprogramlari (bolumID,sinif,saat) values ('$alanlar[id]','$i','$k')";
									@mysql_query($sql,$baglan);
								}
							}
							$sql="insert into kullanici (kullanici,kadi,sifre,bolumID) values ('$_POST[kullanici]','$_POST[kadi]','$sifre','$alanlar[id]')";
							@mysql_query($sql,$baglan);
							
							$sql = mysql_query("select * from kullanici order by id desc limit 0,1");
							$kullanici=mysql_fetch_array($sql);
							
							$sql="update bolumler set kID = '$kullanici[id]' where id=".$alanlar["id"];
							@mysql_query($sql,$baglan);
							
							setcookie("bildirim","Kay�t Ba�ar�l�");
							header ("Location:index.php?bolumler");
						}
						else
						{
							setcookie("bildirim","Kay�t Ba�ar�s�z");
							header ("Location:index.php?yeniBolum");
						}
					}
					else
					{
						setcookie("bildirim","T�m alanlar� dolurmal�s�n�z.");
						header ("Location:index.php?yeniBolum");
					}
				}
				else
				{
					setcookie("bildirim","[ $_POST[kadi] ] kullan�c�s� sistemde kay�tl�. Farkl� bir kullan�c� ad� deneyiniz.");
					header ("Location:index.php?yeniBolum");
				}
			}
			else
			{
				setcookie("bildirim","Kullan�c� ad� [ admin ] olamaz.");
				header ("Location:index.php?yeniBolum");
			}
		}
		else
		{
			setcookie("bildirim","B�l�m - Anabilim Dal� Ad�n� Yaz�n�z.");
			header ("Location:index.php?yeniBolum");
		}
			
		
?>