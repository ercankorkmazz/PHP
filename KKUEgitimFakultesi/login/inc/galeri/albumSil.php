<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
	{
		$idler.="id=$degerler or ";
		
		$sorgu=mysql_query("select * from fotograflar");
		while($alanlar=mysql_fetch_array($sorgu))
		{
			if($degerler==$alanlar["albumID"])
			{
				$url="../Galeri/img/images/".$alanlar["url"];
				unlink("$url");
				
				$sql="delete from fotograflar where id=".$alanlar["id"];
				@mysql_query($sql,$baglan);
			}
		}
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from albumler where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Secili Albümler Silindi!");
	else
		setcookie("bildirim","Islem Basarisiz!");
			
	header ("Location:index.php?galeri");
?>