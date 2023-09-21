<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
	{		
		$sorgu=mysql_query("select * from mesajlar");
		while($alanlar=mysql_fetch_array($sorgu))
		{
			if($degerler==$alanlar["mesajID"])
			{
				$sql="delete from mesajlar where id=".$alanlar["id"];
				@mysql_query($sql,$baglan);
			}
		}
		
		$idler.="id=$degerler or ";
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from mesajkutusu where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Seçili mesajlar silindi");
	else
		setcookie("bildirim","Ýþlem Baþarýsýz");
			
	header ("Location:index.php?mesajlar");
?>