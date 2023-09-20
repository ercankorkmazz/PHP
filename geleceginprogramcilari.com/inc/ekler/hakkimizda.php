<style>
	section#kaydol { 
		background-color: #C70;
		padding:50px 40px 50px 50px;
		height:auto;
		min-height:573px;
	}
	.hakkimizda{
		background:url(img/overlay.png);
		width: 1250px;
		padding:10px;
		color: #FFF;
		-webkit-border-radius: 2px; 
    	-moz-border-radius: 2px;
		border-radius: 2px;
	}
</style>
<section id="kaydol">
	<h2 style="float:right;margin-right:27px;">HAKKIMIZDA</h2>
    <div class="clear"></div>
	<div class="hakkimizda">
		<?php 
            echo $kayit["hakkimizda"];
        ?>
    </div>
    <div class="clear"></div>
	<div class="hakkimizda" style="color:#FFF; text-align:center;">2016 &copy; Copyright by Ercan KORKMAZ
    </div>
</section>