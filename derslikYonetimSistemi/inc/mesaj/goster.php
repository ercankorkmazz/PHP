<?php 
	if(isset($_GET["mesaj"]) and isset($_POST["mesaj"]))
		@include("inc/mesaj/kaydet.php"); // mesaj gönder
	
	
	$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
	if(empty($bolumID))
		$bolumID=1;
	
	$kontrol=0;			
	$sorgu=mysql_query("select * from mesajkutusu where (kimden='$bolumID' or kime='$bolumID') and id=".$_GET["mesaj"]);
	while($alanlar=mysql_fetch_array($sorgu))
		$kontrol=1;
		
	if($kontrol==1){
?>
<div style="width:100%;">
	<?php 
        $sorgu=mysql_query("select * from mesajkutusu where id=".$_GET["mesaj"]);
        $alanlar=mysql_fetch_array($sorgu);
    ?>
	<h3 style="margin:-5px 0;color:#060;float:left;">
    	<span style="font-size:16px;">Konu:</span> <span style="color:#222;"><?php echo $alanlar["konu"]; ?></span>
    </h3>
    <a href="index.php?mesaj=<?php echo $_GET["mesaj"];?>"><img src="img/yenile.png" style="float:right;margin-top:-10px;"/></a>
    <div class="clear"></div>
    <hr />
</div>
<div style="width:100%; height:280px; overflow:hidden; overflow-y:scroll;" id="mesajlar">
	<?php
			@include('inc/baglan.php'); 			
			$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
			
			if(empty($bolumID))
				$bolumID=1;
				
			$sorgu=mysql_query("select * from mesajlar where mesajID=".$_GET["mesaj"]);
			while($alanlar=mysql_fetch_array($sorgu))
			{
				$konusmaci="bolumID=".$alanlar["gonderen"];
				if($konusmaci=="bolumID=1")
					$konusmaci="id=1";
		?>
            <?php if($alanlar["gonderen"]==$bolumID){ ?>
                <div style="width:70px;text-align:center;box-shadow:0px 0px 2px #06F;background:#09F; margin:4px 10px 4px 1px; padding:7px; float:right; font-size:14px;color:#FFF;">
                	<strong>Ben</strong>
                </div>
                <div style="width:400px; float:right;box-shadow:0px 0px 2px #003; margin:4px 0 4px 4px; padding:7px; font-size:14px;">
					<?php echo "$alanlar[mesaj]"; ?>
                </div>
                <div class="clear"></div>
            <?php }else{ ?>  
                <div style="width:15%;text-align:center;box-shadow:0px 0px 2px #06F;background:#09F;color:#FFF; margin:4px 0 4px 4px; padding:7px; float:left; font-size:14px;">
                	<?php 
						$sql=mysql_query("select * from kullanici where $konusmaci");
						$alan=mysql_fetch_array($sql);
						echo "<strong>$alan[kullanici]</strong>";
					?>
                </div>
            	<div style="width:400px; float:left;box-shadow:0px 0px 2px #06F; margin:4px 4px 4px 0; padding:7px; font-size:14px;">
					<?php echo "$alanlar[mesaj]"; ?>
                </div>
                <div class="clear"></div>
        <?php }} ?>
</div>
<table width="101%" border="0" cellspacing="5" style="margin:10px 0 0 -5px;" cellpadding="7">
<form action="index.php?mesaj=<?php echo $_GET["mesaj"];?>" name="blabla" method="post">
	<tr>
    	<td>
        	<textarea name="mesaj" style="min-height:50px; max-height:50px; max-width:99%;"></textarea>
        </td>
        <td style="width:80px;"><input type="submit" value="Gönder" style="clear:both;width:80px;height:57px;"></td>
    </tr>
</form>
</table>
<?php }
else
	echo "Konuþmaya ulaþým engellendi!";
?>
<script>
	$("#mesajlar").animate({ scrollTop: $("#mesajlar").innerHeight()*$("#mesajlar").innerHeight()});
</script>