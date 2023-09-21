<?php
	$baglan=@mysql_connect("localhost","root","");
	if(!$baglan)
		echo "MySqle baglanýrken hata olustu";
	
	if(!@mysql_select_db("anket",$baglan))
		echo "Veri Tabaný Baðlantýsý Yapýlamadý";
	
	@mysql_query("SET NAMES 'latin5'");
	@mysql_query("SET character_set_connection = 'latin5'");
	@mysql_query("SET character_set_client = 'latin5'");
	@mysql_query("SET character_set_results = 'latin5'");


?>