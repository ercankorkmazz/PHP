<div class="icerik">
  <div class="icerikSol" style="padding-top:0;">
    <div class="bolumHakkinda">
        <form method="post" action="index.php?arkadasBul" target="_self">
        <h3 style="float:left;">
        <?php
		if($_SESSION["$_SERVER[SERVER_NAME]mezunportalitur"]==0)
        	echo "Arkadaþýný Bul";
		else
			echo "Mezun Sorgula";
		?>
        </h3>
            <input type="submit" value="Sorgula" class="button" style="margin:-1.5px 0 0 5px;float:right;" />
            <div class="clear"></div><hr />
            <div class="txtBG" style="float:left; width:300px;">
            	<select name="bolumNo" style="width:300px;margin:0;margin-top:2px;">
                  <option value="0">Bölüm / Anabilim Dalý</option>
                  <?php 
					@include('inc/baglan.php');
					$sql=@mysql_query("select * from bolumler",$baglan);
					while($bolumler=@mysql_fetch_array($sql))
					{
				  ?>
						<option value="<?php echo $bolumler['id']; ?>"><?php echo $bolumler['bolumAdi']; ?></option>
				  <?php } ?>
              </select>
            </div>
            <div class="txtBG" style="float:left; width:150px; margin-left:5px;"><input type="text" name="adSoyad" placeholder="Adý Soyadý" style="width:150px;text-align:center;"></div>
            <div class="txtBG" style="float:left; width:150px; margin-left:5px;"><input type="text" name="okulNo" placeholder="Öðrenci No" style="width:150px;text-align:center;"></div>
            <div class="clear"></div>
        </form>
        <?php if(count($_POST)!=0){ ?>
            <h3 style="margin:30px 0 0 0;">Bulunan Kayýtlar</h3><hr/>
            <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table" style="margin-top:25px;"> 
           	<tr>
                <td style="background:none;color:#FFF;"><strong>Adý Soyadý</strong></td>
                <td style="background:none;color:#FFF;"><strong>Öðrenci No</strong></td>
                <td style="background:none;color:#FFF;"><strong>Bölüm / Anabilim Dalý</strong></td>
                <td style="background:none;">&nbsp;</td>
            </tr>
            <?php
				if($_POST["bolumNo"]==0)
					$bolum="";
				else
					$bolum=" bolumNo='$_POST[bolumNo]'";
					
				if($_POST["adSoyad"]=="")
					$isim="";
				else
					$isim=" adSoyad like '%$_POST[adSoyad]%'";
				
				if(!empty($_POST["okulNo"]))
				{
					$bolum="";
					$isim="";
					$no=" okulNo='$_POST[okulNo]'";
				}
				else
					$no="";
					
				if((!empty($bolum)) or (!empty($isim)) or (!empty($no)))
					$wh=" where";
				else
					$wh="";
				
				if((!empty($bolum)) and (!empty($isim)))
					$ve=" and";
				else
					$ve="";
				$kontrol=0;
                @include('inc/baglan.php'); 
                $sorgu=mysql_query("select * from mezun$wh$bolum$ve$isim$no");
                while($alanlar=mysql_fetch_array($sorgu))
                {$kontrol=1;
					
				if(!empty($alanlar["kID"]))
				{
            ?>
                <tr>
                   <td style="width:170px;"><?php echo " <b>".$alanlar["adSoyad"]."</b>"; ?></td>
                   <td style="width:80px;" align="center"><?php echo " <b>".$alanlar["okulNo"]."</b>"; ?></td>
                   <td>
				   		<?php
							$sql=@mysql_query("select * from bolumler where id=".$alanlar["bolumNo"],$baglan);
							$bolumAdi=@mysql_fetch_array($sql);
                        	echo $bolumAdi["bolumAdi"];
						?>
                   </td>
                   <td style="width:20px;"><a href="index.php?mezunGoster=<?php echo $alanlar['id'] ?>"><img src="img/go.png" /></td>
                </tr>
            <?php }}
				if($kontrol==0)
					echo "<tr><td colspan='4'>Hiçbir mezun kaydý bulunamadý.</td></tr>";
			 ?>
           </table>
       <?php } ?>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>