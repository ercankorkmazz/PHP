<?php
	if((isset($_GET["appInventorKarsilama"])) and (isset($_POST["bilgi"])))
	{
		include("inc/baglan.php");
		$sql="update karsilama set app = '$_POST[bilgi]' where id=1";
		setcookie("bilgi","G�ncelleme yap�ld�.");
		@mysql_query($sql,$baglan);
		
		header ("Location:index.php?appInventorKarsilama");
	}
	
	include("inc/baglan.php");
	$sql=@mysql_query("select * from karsilama where id=1");
	$kayit=mysql_fetch_array($sql);
?>
<form action="index.php?appInventorKarsilama" method="post">
	<h4>App Inventor Kar��lama Metni</h4>
    <input type="submit" value="G�ncelle" class="Button"/>
    <div class="clear"></div>
	<textarea name="bilgi" class="ckeditor">
    	<?php echo $kayit["app"]; ?>
    </textarea>
</form>