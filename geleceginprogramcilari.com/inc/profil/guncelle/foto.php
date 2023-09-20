<?php
		$dosyaAdi=explode(".",$_FILES["dosya"]["name"]);
		foreach($dosyaAdi as $format) 
		{
			if ($format == end($dosyaAdi))
			{
				$resim=date('d_m_Y_His').".".$format;
				$resimYolu="img/uye/".$resim;
			}
		}
		if(strtolower($format)==strtolower("jpg") or strtolower($format)==strtolower("jpeg") or strtolower($format)==strtolower("png") or strtolower($format)==strtolower("gif") or strtolower($format)==strtolower("bmp"))	
		{	
			if($_FILES["dosya"]["size"]<1024*500)
			{
				include("login/inc/baglan.php");
				$sql=@mysql_query("select * from uyelik where id=".$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"]);
				$alanlar=@mysql_fetch_array($sql);
				
				if(!empty($alanlar["resim"]))
				{
					if(unlink("img/uye/".$alanlar["resim"]))
					{
						$sorgu=mysql_query("update uyelik set resim='' where id=".$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"]);	
					}
				}
				
				$sql=@mysql_query("select * from uyelik where id=".$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"]);
				$alanlar=@mysql_fetch_array($sql);
				
				if(empty($alanlar["resim"]))
				{
					if(@copy($_FILES['dosya']['tmp_name'],$resimYolu))
					{
						if(@mysql_query("update uyelik set resim='$resim' where id=".$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"]))		
						{
							setcookie("bilgi","Fotoðraf Güncellendi!");
							setcookie("renk","#3C0");	
						}
						else
							setcookie("bilgi","Fotoðraf Güncellenemedi. Lütfen daha sonra tekrar deneyiniz.");
						
					}
					else
						setcookie("bilgi","Fotoðraf Yüklenemedi. Lütfen daha sonra tekrar deneyiniz.");
				}
			}
			else
				setcookie("bilgi","Dosya boyutu 500 KB'den küçük olmalýdýr.");
		}
		else
			setcookie("bilgi","Desteklenen Formatlar &#8220;jpg - jpeg - bmp - png - gif&#8221;");
			
		header("Location:index.php?profil");
?>
