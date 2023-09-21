<?php
		if(!empty($_POST["pdfTanimi"]))
		{
			@include('inc/baglan.php');
			$sql="update pdfler set pdfTanim = '$_POST[pdfTanimi]' where id=".$_GET["PDF"];
			
			if (@mysql_query($sql,$baglan))
			{
				setcookie("bildirim","PDF dosyasi güncellendi!");
				header ("Location:index.php?yuklePDF");
			}
			else
			{
				setcookie("bildirim","Kayit Basarisiz!");
				header ("Location:index.php?yuklePDF");
			}
		}
		else
		{
			setcookie("bildirim","PDF dosyasinin tanimini yaziniz!");
			header ("Location:index.php?PDF=$_GET[PDF]");
		}
?>