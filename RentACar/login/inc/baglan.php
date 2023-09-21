<?php
    $baglan=@mysql_connect("localhost","root","");
	if(!$baglan)
		echo "Sunucuya bağlanılamadı!";
		
	if(!mysql_select_db("rentakar",$baglan))
		echo "Veri tabanına bağlanılamadı!";
	
	@mysql_query("set charset latin5");
?>