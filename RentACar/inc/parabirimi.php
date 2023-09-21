<?php
	if(!empty($_GET["parabirimi"]))
	{
		if($_GET["parabirimi"]=="tl")
			setcookie("paraBirimi","1");
		else if($_GET["parabirimi"]=="euro")
			setcookie("paraBirimi","2");
		else if($_GET["parabirimi"]=="dolar")
			setcookie("paraBirimi","3");
			
		header("location: index.php?transfer");
	}
?>