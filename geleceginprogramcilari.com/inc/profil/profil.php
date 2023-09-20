<style>
	section#home  { 
		background-color: #C70;
		padding:50px;
		height:auto;
	}
	.hakkimizda{
		background:url(img/overlay.png);
		width: 700px;
		padding:10px;
		color: #FFF;
		-webkit-border-radius: 2px; 
    	-moz-border-radius: 2px;
		border-radius: 2px;
	}
</style>
</head>

<body>
<section id="home">
  <h2 style="float:left;">PROFÝL</h2>
  <div class="clear"></div>
	
    <div class="hakkimizda">
    	<?php include("inc/profil/listele.php"); ?>
	</div>
</section>