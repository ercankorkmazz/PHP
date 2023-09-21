<?php
	if(!empty($_POST["dizi"]))
	{
		$gunler=explode(".",$_POST["dizi"]);
		$sayi=count($gunler);
		$tablo=NULL;
		for($i=0;$i<=$sayi-1;$i++)
		{
			if($_POST[$i]==true)
				$onay=1;
			else
				$onay=0;
				
			$tablo.=$gunler[$i]."-".$onay.".";	
		}
		$tablo=substr($tablo,0,-1);
		
		@include('inc/baglan.php');
		$sql="update ekdersgunleri set ay = '$_POST[ay] - $_POST[yil]' , tatiller = '$tablo' where id=1";
					
		if (@mysql_query($sql,$baglan))
			setcookie("bildirim","Bilgiler Güncellendi.");
		else
			setcookie("bildirim","Kayýt Baþarýsýz");
	}
	header ("Location:index.php?ekDersAyarlari");
?>