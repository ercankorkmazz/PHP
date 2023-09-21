<?php
if(isset($_POST["tcNoKontrol"]))
{
	@include('inc/baglan.php');
	$onay=0;
	$sec=@mysql_query("select * from mezun",$baglan);
	while($alanlar=@mysql_fetch_array($sec))
	{
		if($alanlar["tcNo"]==$_POST["tcNoKontrol"])
		{
			$onay=1;
			if(empty($alanlar["kID"]))
			{
				setcookie("kkuMezunkID","$alanlar[id]");
				setcookie("mezunBilgi",'');
				header ("Location:index.php?uyeOl");
			}
			else
			{
				setcookie("mezunBilgi","Kaydýnýz sistemde mevcuttur.<br><br>Kullanýcý bilgilerinize &#8220;Giriþ Yap&#8221; menüsü altýndaki &#8220;Þifremi Unuttum&#8221; bölümünden ulaþabilirsiniz.");
				header ("Location:index.php?uyeOl");
			}
		}
	}
	if($onay==0)
	{
		$bilgi="&#8220;TC Kimlik No&#8221; yanlýþ!";
		setcookie("mezunBilgi",$bilgi);
		header ("Location:index.php?uyeOl");
	}
}
?>