<?php
	if((isset($_GET["hakkimizda"])) and (isset($_POST["bilgi"])))
	{
		include("inc/baglan.php");
		$sql="update karsilama set hakkimizda = '$_POST[bilgi]' where id=1";
		setcookie("bilgi","Güncelleme yapıldı.");
		@mysql_query($sql,$baglan);
		
		header ("Location:index.php?hakkimizda");
	}
	
	include("inc/baglan.php");
	$sql=@mysql_query("select * from karsilama where id=1");
	$kayit=mysql_fetch_array($sql);
?>
<form action="index.php?hakkimizda" method="post">
	<h4>Hakkımızda</h4>
    <input type="submit" value="Güncelle" class="Button"/>
    <div class="clear"></div>
	<textarea name="bilgi" class="ckeditor">
    	<?php echo $kayit["hakkimizda"]; ?>
    </textarea>
</form>