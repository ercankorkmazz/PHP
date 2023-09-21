<?php header('Content-Type: text/html; charset=iso-8859-9'); ?>
<html>
<head>
	<meta charset="iso-8859-9">
	<title>Konuşma Zorluğu Çekenler İçin</title>
    <link href="css/css.css" rel="stylesheet" type="text/css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="http://code.jquery.com/jquery.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
</head>
<body>
<div class="kusmaBalonu">
	<p align="center">
    	<?php
			function yenile()
			{
				include("login/inc/baglan.php");
				$sql=mysql_query("select * from cumleler");
				while($alanlar=mysql_fetch_array($sql))
				{	
					$idler[]=$alanlar["id"];
				}
				$id=$idler[rand(0,count($idler)-1)];
				
				$alanlar=mysql_fetch_array(mysql_query("select * from cumleler where id=".$id));
				setcookie("metin",$alanlar["cumle"]);
				header ("Location:index.php?yenile");
			}
			if(count($_GET) == 0)
				yenile();
			
        	if(isset($_GET["metin"]))
				@include("inc/sonucGoster.php");
			else
				echo $_COOKIE["metin"];
		?>
    </p>
</div>
<?php 
	@include("inc/bildirimler.php"); 
	@include("inc/sesOkuma.php"); 
?>
</body>
</html>
<?php @include("js/js.php"); 
	
?>