<?php
	if((isset($_GET["hakkimizda"])) and (isset($_POST["bilgi"])))
	{
		include("inc/baglan.php");
		$sql="update karsilama set hakkimizda = '$_POST[bilgi]' where id=1";
		setcookie("bilgi","G�ncelleme yap�ld�.");
		@mysql_query($sql,$baglan);
		
		header ("Location:index.php?hakkimizda");
	}
	
	include("inc/baglan.php");
	$sql=@mysql_query("select * from karsilama where id=1");
	$kayit=mysql_fetch_array($sql);
?>
<form action="index.php?hakkimizda" method="post">
	<h4>Hakk�m�zda</h4>
    <input type="submit" value="G�ncelle" class="Button"/>
    <div class="clear"></div>
	<textarea name="bilgi" class="ckeditor">
    	<?php echo $kayit["hakkimizda"]; ?>
    </textarea>
</form>