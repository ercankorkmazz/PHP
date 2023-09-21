	<?php 
		@include('login/inc/baglan.php'); 
		$sorgu=mysql_query("select * from tasarim where id=1");
		$alanlar=mysql_fetch_array($sorgu);
							
		if($alanlar["renk"]=="#1D82C6")
			$color="mavi";
		elseif($alanlar["renk"]=="#925CA2")
			$color="mor";
		elseif($alanlar["renk"]=="#6C0")
			$color="yesil";
		elseif($alanlar["renk"]=="#F00")
			$color="kirmizi";
		elseif($alanlar["renk"]=="#F90")
			$color="turuncu";
	?>
    <title><?php echo $alanlar['bolum']; ?></title>
    <link href="css/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
    <script src="js/SpryMenuBar.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>
    <link rel="stylesheet" href="css/agile_carousel.css" type='text/css'>
     <script src="js/agile_carousel.a1.1.min.js"></script>  
    
    <style type="text/css">
	
		.bolum1 {
			width: 100%;
			padding-top:5px;
			border-bottom:1px solid <?php echo $alanlar['renk']; ?>;
			background: #FFF url(img/siteBG.jpg) no-repeat center top;
		}
		.bolum2 {
			background-color: <?php echo $alanlar['renk']; ?>;
			border-top: 1px solid #FFF;
			padding: 5px 0 5px 0; 	
		}
		.bolum6 {
			background:#3B3B3B;
			border-top:1px solid #FFF;
			border-bottom:5px solid <?php echo $alanlar['renk']; ?>;
		}
		.icerikSol a:hover{
			color:<?php echo $alanlar['renk']; ?>;
			text-decoration:underline;
			text-shadow: 1px 1px 1px #cccccc;
		}
		.icerikSag a:hover{
			color:<?php echo $alanlar['renk']; ?>;
			text-shadow: 1px 1px 1px #cccccc;
		}
		.icerikSag .alt .galeri a:hover{
			color:<?php echo $alanlar['renk']; ?>;
		}
		.icerikSag .alt .facebook a:hover{
			color:<?php echo $alanlar['renk']; ?>;
		}
		.icerikSag .alt .twitter a:hover{
			color:<?php echo $alanlar['renk']; ?>;
		}
		.tumDuyurular{
			text-decoration:none; 
			color:<?php echo $alanlar['renk']; ?>;	
			text-shadow: 1px 1px 1px #cccccc;
		}
		.icerikSag li {
			list-style-image: url(img/<?php echo $color;?>.png);
			list-style-type: none;
			margin-top:7px;
		}
		.albumGoster{
			border:0;
			margin-top:10px;
			box-shadow: <?php echo $alanlar['renk']; ?> 0px 0px 10px 1px;
		}
		.galeriBaslik{
			color: <?php echo $alanlar['renk']; ?>;	
			margin:7px;
			float:left;
		}
	</style>