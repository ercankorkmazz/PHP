<div class="icerik">
  <div class="icerikSol">
  	<?php
	if(isset($_GET["etkinlikler"]))
	{
		echo "<h3 style='margin:0;'>Tüm Etkinlikler</h3>";
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from etkinlikler order by id desc");
	?>
    <table width="100%" cellpadding="0" cellpadding="0" style="margin-top:-10px;">
    <?php
		$kontrol=0;
		while($alanlar=mysql_fetch_array($sorgu))
		{$kontrol=1;
			$zaman=explode(".",$alanlar["tarih"]);
			$tarih=$zaman[0].":".$zaman[1]." &#8212; ".$zaman[2].".".$zaman[3].".".$zaman[4];
	?>
    	<tr>
        	<td style="box-shadow:none;">
            	<p style="float:right;margin:0;margin-top:10px;padding:2px;background:#333333;color:#FFF;-moz-border-radius:2px;border-radius:2px;"><?php echo $tarih; ?></p>
            </td>
    	</tr>
    	<tr>
            <td style="background:url(img/kirmizi.png) no-repeat center left;padding:4px 0 0 20px;
	border-bottom:1px solid #333;"><a href="index.php?etkinlik=<?php echo $alanlar["id"]; ?>" style="display:block;text-decoration:none;"><?php echo $alanlar["baslik"]; ?></a></td>
        </tr>
    <?php
		}
		if($kontrol==0){ ?>
        	<tr>
            	<td style="box-shadow:none;">
                	<ul>
        				<li style="text-shadow:2px 2px 2px #CCC;margin:21px 0 0 -27px;">Sisteme kayýtlý etkinlik bulunamadý.</li>
                    </ul>
                </td>
            </tr>
    <?php }
		echo "</table>";
	}
	elseif(isset($_GET["etkinlik"]))
	{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from etkinlikler where id=".$_GET["etkinlik"]);
		$alanlar=mysql_fetch_array($sorgu);
		
		echo "<h3 style='margin-top:0px;'>".$alanlar["baslik"]."</h3>".$alanlar["icerik"];
	}
	elseif(isset($_GET["mezunhaberleri"]))
	{
		echo "<h3 style='margin-top:0;padding-bottom:10px;'>Mezunlarýmýzdan Gelen Haberler</h3>";
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from haberler where onay='1' order by id desc ");
	?>
    <table width="100%" cellpadding="0" cellpadding="0" style="margin-top:-10px;">
    <?php
		$kontrol=0;
		while($alanlar=mysql_fetch_array($sorgu))
		{$kontrol=1;
			$sql=mysql_query("select * from mezun where kID=".$alanlar["kID"]);
			$mezun=mysql_fetch_array($sql)
	?>
    	<tr>
        	<td colspan="2">
                <h3 style='margin:0;font-size:14px;color:#B01111;'>
					<?php 
						if($alanlar["kID"]!=1)
						{
							echo $mezun["adSoyad"]." <span style='color:#222;font-size:12px;'>(";
							
							$sql=@mysql_query("select * from bolumler where id=".$mezun["bolumNo"],$baglan);
							$bolumAdi=@mysql_fetch_array($sql);
							echo $bolumAdi["bolumAdi"].")</span>";
						}
						else
							echo "Yönetici Tarafýndan Eklendi";
					?>
                </h3>
            </td>
        </tr>
    	<tr>
            <td style="padding: 10px 0 10px 0;"><?php echo $alanlar["baslik"]; ?></td>
            <td style="padding: 10px 0 10px 0;width:75px;">
            	<a href="index.php?mezunhaber=<?php echo $alanlar["id"]; ?>" style="padding:7px;width:70px;color:#FFF; background:#333;">Devamý &raquo;</a>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding:10px 0 10px 0;">
            	<div style="border-top:1px dashed #CCC; width:100%;height:1px;"></div>
            </td>
        </tr>
    <?php
		}
		if($kontrol==0){ ?>
        	<tr>
            	<td style="box-shadow:none;">
                	<ul>
        				<li style="text-shadow:2px 2px 2px #CCC;margin:-15px 0 0 -25px;">Sisteme kayýtlý mezun haberi bulunamadý.</li>
                    </ul>
                </td>
            </tr>
    <?php }
		echo "</table>";
	}
	elseif(isset($_GET["mezunhaber"]))
	{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from haberler where id=".$_GET["mezunhaber"]);
		$alanlar=mysql_fetch_array($sorgu);
	
		$sql=mysql_query("select * from mezun where kID=".$alanlar["kID"]);
		$mezun=mysql_fetch_array($sql)
	?>
    	<h3 style='margin:0;font-size:14px;color:#B01111;'>
			<?php 
				if($alanlar["kID"]!=1)
				{
					echo $mezun["adSoyad"]." <span style='color:#222;font-size:12px;'>(";
					
					$sql=@mysql_query("select * from bolumler where id=".$mezun["bolumNo"],$baglan);
					$bolumAdi=@mysql_fetch_array($sql);
					echo $bolumAdi["bolumAdi"].")</span>";
				}
				else
					echo "Yönetici Tarafýndan Eklendi";
			?>
        </h3>
    <?php
		echo "<hr><h4>".$alanlar["baslik"]."</h4>".$alanlar["icerik"];
	}
	elseif(isset($_GET["mezunbasarilari"]))
	{
		echo "<h3 style='margin-top:0;padding-bottom:10px;'>Mezunlarýmýzýn Baþarýlarý</h3>";
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from basarilar order by id desc");
	?>
    <table width="100%" cellpadding="0" cellpadding="0" style="margin-top:-10px;">
    <?php
		$kontrol=0;
		while($alanlar=mysql_fetch_array($sorgu))
		{$kontrol=1;
	?>
    	<tr>
        	<td colspan="2">
                <h3 style='margin:0;font-size:14px;color:#B01111;'><?php echo $alanlar["mezun"];?></h3>
            </td>
        </tr>
    	<tr>
            <td style="padding: 10px 0 10px 0;"><?php echo $alanlar["baslik"]; ?></td>
            <td style="padding: 10px 0 10px 0;width:75px;">
            	<a href="index.php?mezunbasari=<?php echo $alanlar["id"]; ?>" style="padding:7px;width:70px;color:#FFF; background:#333;">Devamý &raquo;</a>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding:10px 0 10px 0;">
            	<div style="border-top:1px dashed #CCC; width:100%;height:1px;"></div>
            </td>
        </tr>
    <?php
		}
		if($kontrol==0){ ?>
        	<tr>
            	<td style="box-shadow:none;">
                	<ul>
        				<li style="text-shadow:2px 2px 2px #CCC;margin:-15px 0 0 -25px;">Sisteme kayýtlý mezun baþarýsý bulunamadý.</li>
                    </ul>
                </td>
            </tr>
    <?php }
		echo "</table>";
	}
	elseif(isset($_GET["mezunbasari"]))
	{
		@include('inc/baglan.php'); 
		$sorgu=mysql_query("select * from basarilar where id=".$_GET["mezunbasari"]);
		$alanlar=mysql_fetch_array($sorgu);
	?>
    	<h3 style='margin:0;font-size:14px;color:#B01111;'><?php echo $alanlar["mezun"]; ?></h3><hr>
    <img src="img/basari/
	<?php 
		if(!empty($alanlar["url"]))
			echo $alanlar["url"]; 
		else
			echo "mezun.jpg";
	?>" style='margin-top:6px;width:315px;height:150px;' />
    <?php
		echo "<h4 style='margin-top:10px;'>".$alanlar["baslik"]."</h4>".$alanlar["icerik"];
	}?>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>