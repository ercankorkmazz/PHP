<?php
	error_reporting(NULL);
	session_start();
	ob_start();
	if(isset($_SESSION["$_SERVER[SERVER_NAME]derslikYonetim"])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<?php
	@include('baglan.php'); 
	$sorgu=mysql_query("select * from derslikler where id=".$_GET["ID"]);
	$alanlar=mysql_fetch_array($sorgu);
	$derslik=$alanlar["derslikAdi"];
?>
<title>Derslik Programı</title>
<link href="../css/yonetimCSS.css" rel="stylesheet" type="text/css" />
</head>
<body style="background:none; padding:20px;border-top:5px solid #333;">
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="program"> 
            	<tr>
                	<td align="left" colspan="6" style="border:0;padding:0;"><h3 style="padding:0;margin:10px 0 10px 0;color:#333;float:left;">Derslik Programı (<?php echo $derslik; ?>)</h3></td>
                </tr>
				<tr>
                	<td width="5%" style="border:1px solid #000;"><h3 style="color:#000;">Saat\Gün</h3></td>
                    <td width="19%" style="border:1px solid #000; background:#DDD;"><h3 style="color:#000;">Pazartesi</h3></td>
                    <td width="19%" style="border:1px solid #000; background:#DDD;"><h3 style="color:#000;">Salı</h3></td>
                    <td width="19%" style="border:1px solid #000; background:#DDD;"><h3 style="color:#000;">Çarşamba</h3></td>
                    <td width="19%" style="border:1px solid #000; background:#DDD;"><h3 style="color:#000;">Perşembe</h3></td>
                    <td width="19%" style="border:1px solid #000; background:#DDD;"><h3 style="color:#000;">Cuma</h3></td>
                </tr>
			<?php
				$kontrol=0;
				$say=1;
				@include('baglan.php'); 
				$sorgu=mysql_query("select * from derslikprogrami where derslikID=$_GET[ID]");
				while($alanlar=mysql_fetch_array($sorgu))
				{
					$kontrol=1;
					$say++;
			?>
                <tr>
                	<td style="border:1px solid #000; background:#DDD;">
                    	<h3 style="color:#000;">
                    	<?php
                        	switch($alanlar["saat"])
							{
								case 1:
									echo "8:30";
								break;
								case 2:
									echo "9:30";
								break;
								case 3:
									echo "10:30";
								break;
								case 4:
									echo "11:30";
								break;
								case 5:
									echo "13:00";
								break;
								case 6:
									echo "14:00";
								break;
								case 7:
									echo "15:00";
								break;
								case 8:
									echo "16:00";
								break;
								case 9:
									echo "17:00";
								break;
								case 10:
									echo "18:00";
								break;
								case 11:
									echo "19:00";
								break;
								case 12:
									echo "20:00";
								break;
								case 13:
									echo "21:00";
								break;
								case 14:
									echo "22:00";
								break;
							}
						?>
                        </h3>
                    </td>
                    <?php
                    	for($i=1;$i<=5;$i++)
						{
					?>
                    		<td>
                            	<?php 
									if($alanlar["g$i"]!="Onaylandı")
										echo $alanlar["g$i"];
									else
									{
										@include('baglan.php'); 
										$dersBilgi=NULL;
										$sql=mysql_query("select * from derslikhucreleri where satirID=$alanlar[id] and G=$i");
										$alan=mysql_fetch_array($sql);
										
										$sql=mysql_query("select * from bolumler where id=".$alan["bolumID"]);
										$bilgi=mysql_fetch_array($sql);
										
										$dersBilgi .= $bilgi["bolumadi"]." <br>";
										
										$sql=mysql_query("select * from dersler where id=".$alan["dersID"]);
										$ders=mysql_fetch_array($sql);
										
										$sql=mysql_query("select * from ogretmenler where id=".$ders["ogretmen"]);
										$bilgi=mysql_fetch_array($sql);
										
										if($ders["ogretmen"]!=0)
											$ogretmen=$bilgi["kullanici"];
										else
											$ogretmen="Öğretmen Belirlenmedi";
										
										$dersBilgi .= $ders["ders"]." <br>(".$ogretmen.")";
										
										echo $dersBilgi;
									} 
								?>
                            </td>
					<?php }	?>
                </tr>
            <?php 
				
				if($say==5)
					echo "<tr><td colspan='6' style='margin:0;padding:1px;background:#777;'></td></tr>";
				}
				if($kontrol==0)
					echo "<td colspan='6' style='padding:10px;color:#060;'> Hiçbir kayıt bulunamadı.</td>";
			 ?>
        </table>
        <div style="text-align:right;"><a href="#"><img src="../img/print.png" style="margin-top:10px;" onclick="window.print()" /></a></div>
</body>
</html>
<?php }else{ header ("Location:../index.php"); }?>
<?php ob_end_flush(); ?>