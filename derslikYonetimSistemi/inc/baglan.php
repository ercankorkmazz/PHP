<?php
    $baglan=@mysql_connect("localhost","root","");
	if(!$baglan)
		echo "Sunucuya baglanilamadi!";
		
	if(!mysql_select_db("derslikyonetimsistemi",$baglan))
		echo "Veri tabanina baglanilamadi!";
	
	@mysql_query("set charset latin5");
?>