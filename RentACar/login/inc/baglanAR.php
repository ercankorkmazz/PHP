<?php
    $baglanAR=@mysql_connect("localhost","root","");
	if(!$baglanAR)
		echo "Sunucuya bağlanılamadı!";
		
	if(!mysql_select_db("rentakar",$baglanAR))
		echo "Veri tabanına bağlanılamadı!";
	
	@mysql_query("set charset utf8");
	@mysql_query("SET NAMES 'utf8'");
	@mysql_query('SET CHARACTER SET utf8'); 
?>