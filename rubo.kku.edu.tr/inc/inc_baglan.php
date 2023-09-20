<?php
	$baglan=@mysql_connect("localhost","rubo.kku.edu.tr","Rubo.71");
	if(!$baglan)
		echo "Sunucu baðlantý hatasý.";
	
	if(!@mysql_select_db("rubo.kku.edu.tr",$baglan))
		echo "Veritabaný baðlantý hatasý.";
	
	@mysql_query("set charset latin5");


?>