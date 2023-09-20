<?php
	if((isset($_GET["smallBasicKarsilama"])) and (isset($_POST["bilgi"])))
	{
		include("inc/baglan.php");
		$sql="update karsilama set sml = '$_POST[bilgi]' where id=1";
		setcookie("bilgi","Güncelleme yapýldý.");
		@mysql_query($sql,$baglan);
		
		header ("Location:index.php?smallBasicKarsilama");
	}
	
	include("inc/baglan.php");
	$sql=@mysql_query("select * from karsilama where id=1");
	$kayit=mysql_fetch_array($sql);
?>
<form action="index.php?smallBasicKarsilama" method="post">
	<h4>Arduino S4A Karþýlama Metni</h4>
    <input type="submit" value="Güncelle" class="Button"/>
    <div class="clear"></div>
	<textarea name="bilgi" class="ckeditor">
    	<?php echo $kayit["sml"]; ?>
    </textarea>
</form>