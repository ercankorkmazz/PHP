<?php
    $baglan=@mysql_connect("localhost","root","");
	if(!$baglan)
		echo "Sunucuya baglanilamadi!";
		
	if(!mysql_select_db("kantin_otomasyonu",$baglan))
		echo "Veri tabanina baglanilamadi!";
	
	@mysql_query("set charset latin5");
	date_default_timezone_set('Europe/Istanbul');
?>