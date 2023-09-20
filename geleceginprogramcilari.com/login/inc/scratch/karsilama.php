<?php
	if((isset($_GET["scratchKarsilama"])) and (isset($_POST["bilgi"])))
	{
		include("inc/baglan.php");
		$sql="update karsilama set scr = '$_POST[bilgi]' where id=1";
		setcookie("bilgi","Güncelleme yapýldý.");
		@mysql_query($sql,$baglan);
		
		header ("Location:index.php?scratchKarsilama");
	}
	
	include("inc/baglan.php");
	$sql=@mysql_query("select * from karsilama where id=1");
	$kayit=mysql_fetch_array($sql);
?>
<form action="index.php?scratchKarsilama" method="post">
	<h4>Scratch Karþýlama Metni</h4>
    <input type="submit" value="Güncelle" class="Button"/>
    <div class="clear"></div>
	<textarea name="bilgi" class="ckeditor">
    	<?php echo $kayit["scr"]; ?>
    </textarea>
</form>