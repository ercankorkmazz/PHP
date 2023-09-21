<?php
		if(!empty($_POST["mesaj"]))
		{
			$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
			
			if(empty($bolumID))
				$bolumID=1;
				
			$sql="insert into mesajlar (mesajID,gonderen,mesaj) values ('$_GET[mesaj]','$bolumID','$_POST[mesaj]')";
				
			@mysql_query($sql,$baglan);
		}
		header ("Location:index.php?mesaj=$_GET[mesaj]");
?>