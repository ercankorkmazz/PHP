<?php
	$gelenMetin=explode(" ",$_COOKIE["metin"]);
	$okunanMetin=explode(" ",$_GET["metin"]);
	$say=0;
	
	for($i=0;$i<=count($gelenMetin)-1;$i++)
	{
		if(strtolower($gelenMetin["$i"])==strtolower($okunanMetin["$i"]))
			echo $gelenMetin["$i"]." ";
		else
		{
			echo "<span style='color:red;'>".$gelenMetin["$i"]."</span> ";
			$say++;
		}
	}
	if($say==0)
	{
		yenile();
		header ("Location:index.php?yenile");
	}
?>