<?php
	// kullan�c� ad� kontrol�
	@include('inc/baglan.php');
	$kontrol=0;
	
	$sql=mysql_query("select * from kullanicilar where kadi='$_POST[kadi]'");
	$kontrol=@mysql_num_rows($sql);
	
	if(!empty($_POST["kadi"]))
	{
		if($_SESSION["$_SERVER[SERVER_NAME]kadi"]!=$_POST["kadi"])
		{
			if($kontrol==0)
			{
				@include('inc/baglan.php');
				$sql="update kullanicilar set kadi = '$_POST[kadi]' where id=".$_SESSION["$_SERVER[SERVER_NAME]kID"];
						
				if (@mysql_query($sql,$baglan))
				{
					setcookie("bilgi","Kullan�c� ad� g�ncellendi!");
					
					$_SESSION["$_SERVER[SERVER_NAME]kadi"]=$_POST["kadi"];
				}
				else
				{
					setcookie("bilgi","Kay�t Ba�ar�s�z!");
				}
			}
			else
			{
				setcookie("bilgi","[ $_POST[kadi] ] kullan�c�s� sistemde kay�tl�. Farkl� bir kullan�c� ad� deneyiniz.");
			}
		}
	}
	else
		setcookie("bilgi","[ Kullan�c� Ad� ] bo� b�rak�lamaz!");
		
	header ("Location:index.php?ayarlar");
?>