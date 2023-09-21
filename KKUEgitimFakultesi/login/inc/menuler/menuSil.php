<?php
	@include('inc/baglan.php');
	
	$id=$_POST["coklu"];
				
	foreach($id as $degerler)
	{
		$idler.="id=$degerler or ";
		
		$sorgu=mysql_query("select * from altmenuler");
		while($alanlar=mysql_fetch_array($sorgu))
		{
			if($degerler==$alanlar["menu"])
			{
				$sql="delete from altmenuler where id=".$alanlar["id"];
				@mysql_query($sql,$baglan);
			}
		}
	}
				
	$idler=substr($idler,0,strlen($idler)-3);
	$sql="delete from menuler where ".$idler;
	
	if (@mysql_query($sql,$baglan))
		setcookie("bildirim","Seçili Menuler Silindi");
	else
		setcookie("bildirim","Islem Basarisiz");
			
	header ("Location:index.php?menuler");
?>