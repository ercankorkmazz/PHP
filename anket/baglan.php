<?php
	$baglan=@mysql_connect("localhost","root","");
	if(!$baglan)
		echo "MySqle baglan�rken hata olustu";
	
	if(!@mysql_select_db("anket",$baglan))
		echo "Veri Taban� Ba�lant�s� Yap�lamad�";
	
	@mysql_query("SET NAMES 'latin5'");
	@mysql_query("SET character_set_connection = 'latin5'");
	@mysql_query("SET character_set_client = 'latin5'");
	@mysql_query("SET character_set_results = 'latin5'");


?>