<?php
	$baglan=@mysql_connect("94.73.149.189","programlama","120805030bote");
	if(!$baglan)
		echo "MySqle baglanýrken hata olustu";
	
	if(!@mysql_select_db("programlama",$baglan))
		echo "Veri Tabaný Baðlantýsý Yapýlamadý";
	
	@mysql_query("set charset latin5");


?>