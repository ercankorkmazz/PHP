<?php
	$baglan=@mysql_connect("localhost","rubo.kku.edu.tr","Rubo.71");
	if(!$baglan)
		echo "Sunucu ba�lant� hatas�.";
	
	if(!@mysql_select_db("rubo.kku.edu.tr",$baglan))
		echo "Veritaban� ba�lant� hatas�.";
	
	@mysql_query("set charset latin5");


?>