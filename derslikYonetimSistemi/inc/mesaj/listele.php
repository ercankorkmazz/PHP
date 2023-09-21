<?php 
	if(isset($_GET["mesajlar"]) and isset($_POST["coklu"]))
		@include("inc/mesaj/sil.php"); // mesaj siler
	if(isset($_GET["mesajlar"]) and isset($_POST["kime"]))
		@include("inc/mesaj/yeni.php"); // mesaj ekler
?>
 		<div class="menuAdi">
        	<div class="ad" style="width:auto;">
            <form method="post" action="index.php?mesajlar" target="_self">
            	<select name="kime" id="jumpMenu" style="margin-top:1px; padding:5px;">
                <?php
					@include('inc/baglan.php'); 
					$sorgu=mysql_query("select * from kullanici");
					$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
					while($alanlar=mysql_fetch_array($sorgu))
					{
						if($alanlar["bolumID"]!=$bolumID)
						{
							if($alanlar["id"]!=1)
							{
								$sql=mysql_query("select * from bolumler where id=".$alanlar["bolumID"]);
								$alan=mysql_fetch_array($sql);
								echo "<option value='$alanlar[bolumID]'>$alan[bolumadi]</option>";
							}
							else
							{
								$sql=mysql_query("select * from bolumler where id=".$alanlar["bolumID"]);
								$alan=mysql_fetch_array($sql);
								echo "<option value='$alanlar[id]'>Yönetici ($alanlar[kullanici])</option>";	
							}
						}
					}
				?>
                </select>
                <input type="text" name="konu" value="Konu" onclick="this.value='';" onblur="if(this.value=='')this.value='Konu';"  style=" text-align:center; padding:5px; width:200px;" />
                <input type="submit" value="Mesaj Gönder" style="padding:3px; width:110px; height:30px;" />
            </form>
            </div><!-- Ýçerik Sað Baþlýk Sol son -->
<form method="post" action="index.php?mesajlar" target="_self">
            <div class="link" style="width:100px;float:right;">
            	<ul>
                	<li><input type="submit" value="Seçili Konuþmalarý Sil" /></li>
                </ul>
            </div><!-- Ýçerik Sað Baþlýk Sað son -->
            <div class="clear"></div>
        </div><!-- Menü Baþlýðý son -->
        <table width="100%" border="0" cellspacing="5" cellpadding="7"> 
		<?php
			@include('inc/baglan.php'); 
			$kontrol=0;
			
			$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
			if(empty($bolumID))
				$bolumID=1;
				
			$sorgu=mysql_query("select * from mesajkutusu where (kimden='$bolumID' or kime='$bolumID') order by id desc");
			while($alanlar=mysql_fetch_array($sorgu))
			{
				$kontrol=1;
				
				if($bolumID==$alanlar["kime"])
				{
					$konusmaci="bolumID=".$alanlar["kimden"];
					$id=$alanlar["kimden"];
				}
				else
				{
					$konusmaci="bolumID=".$alanlar["kime"];
					$id=$alanlar["kime"];
				}
					
				if($konusmaci=="bolumID=1")
					$konusmaci="id=1";
					
				@include('inc/baglan.php'); 
				$sql=mysql_query("select * from kullanici where ".$konusmaci);
				$alan=mysql_fetch_array($sql);
				
				if($id!=1)
				{
					$sql=mysql_query("select * from bolumler where id=".$id);
					$bolumGelen=mysql_fetch_array($sql);
					$bolum=$bolumGelen["bolumadi"];
				}
				else
					$bolum="Yönetici";
		?>
            <tr>
            	<td style="width:20px;background:#444;">
                	<input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>" />
                </td>
                <td style="width:300px;text-align:center; background:#222;padding:0;">
                	<a href="index.php?mesaj=<?php echo $alanlar["id"]; ?>" style="padding:9px;">
						<?php 
							echo "<span style='font-size:14px;color:#FFF;'><strong>Ben - $alan[kullanici]</strong></span><hr><span style='color:#FFF;'>$bolum</span>";	
						?>
                    </a>
                </td>
                <td style="color:#FFF;background:#444;padding:0;">
                	<table width="100%" style="margin:0;padding:0;">
                    	<tr>
                        	<td style="background:none;padding:0;">
                                <a href="index.php?mesaj=<?php echo $alanlar["id"]; ?>&#mesaj" style='font-size:14px;padding:23px; color:#FFF;text-shadow:0px 2px 1px #111;'>
                                    <strong>Konu:</strong> <?php echo $alanlar["konu"];?>
                                </a>
                    		</td>
                            <td style="width:28px;background:none;padding:0;">
                            	<a href="index.php?mesaj=<?php echo $alanlar["id"]; ?>&#mesaj" style="padding:20px;"><img src="img/goMesaj.png" /></a>
                            </td>
                    	</tr>
                    </table>
                </td>
        <?php }
		if($kontrol==0)
			echo "<tr><td>Hiçbir mesaj bulunamadý.</td></tr>";
		 ?>
        </table>
</form>
