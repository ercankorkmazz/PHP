<?php 
	@include('inc/baglan.php');
	
	if(isset($_POST["coklu"]) and isset($_POST["sil"]))
		@include("inc/yorum/yorumSil.php"); // yorum Sil
		
	if(isset($_GET["scratchYorumlar"]))
	{
		$ders="scratch";
		$dersID=$_GET["scratchYorumlar"];
	}
	elseif(isset($_GET["arduinoYorumlar"]))
	{
		$ders="arduino";
		$dersID=$_GET["arduinoYorumlar"];
	}
	elseif(isset($_GET["appYorumlar"]))
	{
		$ders="app";
		$dersID=$_GET["appYorumlar"];
	}
	elseif(isset($_GET["aliceYorumlar"]))
	{
		$ders="alice";
		$dersID=$_GET["aliceYorumlar"];
	}
	elseif(isset($_GET["koduYorumlar"]))
	{
		$ders="kodu";
		$dersID=$_GET["koduYorumlar"];
	}
	elseif(isset($_GET["SketchUpYorumlar"]))
	{
		$ders="SketchUp";
		$dersID=$_GET["SketchUpYorumlar"];
	}
		
?>
	
    <form method="post" action="index.php?<?php echo $ders."Yorumlar=$dersID"; ?>" target="_self">
    	<h4 style="margin:7px 0 -15px 0;">
        	<?php
            	if($ders=="scratch")
				{
					$dersAdi = @mysql_fetch_array(@mysql_query("select * from scratch where id=".$dersID));
					echo "Scratch Yorumlar / ".$dersAdi["baslik"];
				}
				else if($ders=="arduino")
				{
					$dersAdi = @mysql_fetch_array(@mysql_query("select * from smallbasic where id=".$dersID));
					echo "Arduino S4A Yorumlar / ".$dersAdi["baslik"];
				}
				else if($ders=="app")
				{
					$dersAdi = @mysql_fetch_array(@mysql_query("select * from app where id=".$dersID));
					echo "App Inventor Yorumlar / ".$dersAdi["baslik"];
				}
				else if($ders=="alice")
				{
					$dersAdi = @mysql_fetch_array(@mysql_query("select * from alice where id=".$dersID));
					echo "Alice Yorumlar / ".$dersAdi["baslik"];
				}
				else if($ders=="kodu")
				{
					$dersAdi = @mysql_fetch_array(@mysql_query("select * from kodu where id=".$dersID));
					echo "Kodu Yorumlar / ".$dersAdi["baslik"];
				}
				else if($ders=="SketchUp")
				{
					$dersAdi = @mysql_fetch_array(@mysql_query("select * from sketchup where id=".$dersID));
					echo "SketchUp Yorumlar / ".$dersAdi["baslik"];
				}
			?>
        </h4>
        <input type="submit" name="sil" value="Seçili Yorumlarý Sil " class="Button" style="margin-left:5px;" />
        <div class="clear"></div>
		<table width="100%" border="0" cellspacing="5" cellpadding="7" class="table"> 
            <?php
				@include('inc/baglan.php'); 
				$kontrol=0; 
				$sorgu=mysql_query("select * from yorumlar where dersid='$dersID' and dersAdi='$ders'");
				$kontrol=mysql_num_rows($sorgu);
				while($alanlar=mysql_fetch_array($sorgu))
				{	
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id']; ?>"  /></td>
                <td style="color:#FFF;"><?php echo $alanlar["yorum"] ;?></td>
                <td style="color:#FFF;width:220px;"><strong>Yazan: </strong>
					<?php 
						$uyeAdi=@mysql_fetch_array(@mysql_query("select * from uyelik where id=".$alanlar["uyeID"]));
						echo $uyeAdi["adSoyad"];
					?>
                </td>
            </tr>
            <?php } if($kontrol==0){ ?>
            <tr>
                <td colspan="2" style="color:#FFF;">Yorum bulunamadý.</td>
            </tr>
            <?php } ?>
        </table>
    </form>