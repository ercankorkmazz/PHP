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
				setcookie("mezunBilgi","Kayd�n�z sistemde mevcuttur.<br><br>Kullan�c� bilgilerinize &#8220;Giri� Yap&#8221; men�s� alt�ndaki &#8220;�ifremi Unuttum&#8221; b�l�m�nden ula�abilirsiniz.");
				header ("Location:index.php?uyeOl");
			}
		}
	}
	if($onay==0)
	{
		$bilgi="&#8220;TC Kimlik No&#8221; yanl��!";
		setcookie("mezunBilgi",$bilgi);
		header ("Location:index.php?uyeOl");
	}
}
?>