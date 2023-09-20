<?php
	if((isset($_GET["uyelikHakkinda"])) and (isset($_POST["bilgi"])))
	{
		include("inc/baglan.php");
		$sql="update karsilama set uyelikHakkinda = '$_POST[bilgi]' where id=1";
		setcookie("bilgi","Güncelleme yapıldı.");
		@mysql_query($sql,$baglan);
		
		header ("Location:index.php?uyelikHakkinda");
	}
	
	include("inc/baglan.php");
	$sql=@mysql_query("select * from karsilama where id=1");
	$kayit=mysql_fetch_array($sql);
?>
<form action="index.php?uyelikHakkinda" method="post">
	<h4>Üyelik Hakkında</h4>
    <input type="submit" value="Güncelle" class="Button"/>
    <div class="clear"></div>
	<textarea name="bilgi" class="ckeditor">
    	<?php echo $kayit["uyelikHakkinda"]; ?>
    </textarea>
</form>