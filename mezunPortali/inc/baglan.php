<?php
    $baglan=@mysql_connect("localhost","root","");
	if(!$baglan)
		echo "Sunucuya ba�lan�lamad�!";
		
	if(!mysql_select_db("mezunportali",$baglan))
		echo "Veri taban�na ba�lan�lamad�!";
	
	@mysql_query("set charset latin5");
?>