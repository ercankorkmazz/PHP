<?php
	if($_SESSION["$_SERVER[SERVER_NAME]kadi"]=="admin")
	{
		@include('inc/baglan.php');
		
		$id=$_POST["coklu"];
					
		foreach($id as $degerler)
			$idler.="id=$degerler or ";
					
		$idler=substr($idler,0,strlen($idler)-3);
		$sql="delete from kullanici where ".$idler;
		
		if (@mysql_query($sql,$baglan))
			setcookie("bildirim","Secili Kullanicilar Silindi!");
		else
			setcookie("bildirim","Islem Basarisiz!");
	}
	else
		setcookie("bildirim","Bu islemi yapmaya yetkiniz yok!");
			
	header ("Location:index.php?kullanici");
?>