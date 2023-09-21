<?php
    $baglan=@mysql_connect("localhost","root","");
	if(!$baglan)
		echo "Sunucuya baðlanýlamadý!";
		
	if(!mysql_select_db("mezunportali",$baglan))
		echo "Veri tabanýna baðlanýlamadý!";
	
	@mysql_query("set charset latin5");
?>