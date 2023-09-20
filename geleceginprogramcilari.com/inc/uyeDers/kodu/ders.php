<?php
	@mysql_query("ALTER TABLE kodu ORDER BY id",$baglan);
	if(isset($_GET["devam"]))
	{
    	$ders=@mysql_fetch_array(mysql_query("SELECT * FROM kodu where onay='1' and id='$_GET[devam]'" ));
		$ID=$_GET["devam"];
	}
	else
	{
		$ders=mysql_fetch_array(mysql_query("select * from kodu where onay='1' order by id desc limit 0,1"));
		$ID=$ders["id"];
	}

	$puankontrol=0;
	$uyeId=@$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"];
	$sorgu=@mysql_query("select * from puanlama where ders='kodu' and dersID='$ID' and yazarID='$uyeId'");
	$puankontrol=@mysql_num_rows($sorgu);
	$puanlamaBilgisi=@mysql_fetch_array($sorgu);
	
	$yazar=@mysql_fetch_array(@mysql_query("select * from uyelik where id=".$ders["yazarID"]));
?>	
	<h4 style='margin-top:0;text-align:center;'><?php echo "$ders[baslik]"; ?></h4>
    <table border="0" style="float:left;width:400px;margin-top:-2px;">
        <tr>
            <td style="width:175px;">
                <form action="index.php?kodu&puanKaydet&devam=<?php echo $ID; ?>" method="post" style="float:left;">
                    <input class="star" type="radio" name="puan" value="1" title="Çok Kötü" <?php if(($puankontrol!=0) and ($puanlamaBilgisi["puan"]==1)) echo "checked='checked'"; ?> />
                    <input class="star" type="radio" name="puan" value="2" title="Kötü" <?php if(($puankontrol!=0) and ($puanlamaBilgisi["puan"]==2)) echo "checked='checked'"; ?> />
                    <input class="star" type="radio" name="puan" value="3" title="Orta" <?php if(($puankontrol!=0) and ($puanlamaBilgisi["puan"]==3)) echo "checked='checked'"; ?> />
                    <input class="star" type="radio" name="puan" value="4" title="Ýyi" <?php if(($puankontrol!=0) and ($puanlamaBilgisi["puan"]==4)) echo "checked='checked'"; ?> />
                    <input class="star" type="radio" name="puan" value="5" title="Çok Ýyi" <?php if(($puankontrol!=0) and ($puanlamaBilgisi["puan"]==5)) echo "checked='checked'"; ?> />
                    <input type="submit" value="Kaydet" class="puanlaBTN"/>
                </form>
			</td>
        	<td>
            	<div style="margin-top:-3px;">
                	<div style="float:left;background:url(img/sayiSol.png);width:6px;height:19px;">&nbsp;</div>
                	<div style="float:left;background:#32add7;font-size:10px;height:19px;padding-top:2px;padding-left:1px;"><strong><?php if($ders["puan"]!=0) echo "+".$ders["puan"]; else echo "0"; ?></strong></div>
                	<div style="float:left;background:url(img/sayiSag.png);width:4px;height:19px;">&nbsp;</div>
                    <div class="clear"></div>
                </div>
            </td>
        </tr>
    </table>
    <img src='img/ico_author.png' style="float:right;width:20px;margin-left:-2px;" />
    <span style="float:right;margin-top:2px;padding-right:5px;font-size:13px;"><strong>
	<?php 
	if(!empty($ders["yazarID"]))
		echo $yazar["adSoyad"]; 
	else
		echo "Admin";
	?>
    </strong></span>
    <div class="clear"></div>
   	<?php echo $ders["video"]; ?>
	<div class='clear' style='height:7px;'></div>
    <p style='margin:5px 0 0 -6px;font-size:13px;float:left;'><strong>Proje Dosyasý:</strong>
		<?php 
			if(!empty($ders["dosya"]))
				echo "$ders[dosya] - <a href='dosyalar/kodu/$ders[dosya]'><strong>Ýndir</strong></a>"; 
        	else
				echo "Yok";
        ?>
    </p>
    <?php if(!empty($ders["PDF"])){ ?>
    <p style='margin:5px 0 0 -7px;font-size:13px;float:right;'><strong>Konu anlatým dosyasýný indirmek için</strong>
	<a href="dosyalar/kodu/<?php echo $ders['PDF']; ?>" target="_blank"><strong>týklayýnýz</strong>.</a></p>
    <?php } ?>
    <div class="clear"></div>
	<div class='clear' style='height:10px;'></div>
    <?php 
		if(!empty($ders['PDF']))
		{ 
			$browser_type = $_SERVER["HTTP_USER_AGENT"];
			if(strpos($browser_type,'Chrome'))
			{
	?>
   				<iframe src="dosyalar/kodu/<?php echo $ders['PDF']; ?>" style="width: 690px; height: 600px;" frameborder="0"></iframe>
    <?php }} ?>
    <?php 
		$browser_type = $_SERVER["HTTP_USER_AGENT"];
		if((!empty($ders["PDF"])) and (strpos($browser_type,'Chrome')))
		{ 
			echo "<div class='clear' style='height:12px;'></div>";
		}
	?>
    <div style="margin-left:-5px;margin-top:-5px;font-size:13px;"><?php echo $ders["icerik"];?></div>