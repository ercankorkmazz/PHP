<?php
	$baglan=@mysql_connect("94.73.149.189","programlama","120805030bote");
	if(!$baglan)
		echo "MySqle baglan�rken hata olustu";
	
	if(!@mysql_select_db("programlama",$baglan))
		echo "Veri Taban� Ba�lant�s� Yap�lamad�";
	
	@mysql_query("set charset latin5");


?>