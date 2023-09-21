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
	$sorgu=mysql_query("select * from bolumler where id=".$_GET["bID"]);
	$alanlar=mysql_fetch_array($sorgu);
	$bolum=$alanlar["bolumadi"];
?>
<title>Ders Programı</title>
<link href="../css/yonetimCSS.css" rel="stylesheet" type="text/css" />
</head>
<body style="background:none; padding:20px;border-top:5px solid #333;" onload="window.print()">
			<table width="100%">
            	<tr>
                	<td width="70%"><h3 style="padding:0;margin:10px 0 10px 0;"><?php echo $bolum." - $_GET[S]. Sınıf"; ?></h3></td>
                    <td></td>
                </tr>
            </table>
			<table width="100%" border="0" cellspacing="1" cellpadding="5" class="program"> 
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
				if(isset($_GET["bID"]))
					$bolum=$_GET["bID"];
				else
					$bolum=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
				$sorgu=mysql_query("select * from dersprogramlari where bolumID=$bolum and sinif=$_GET[S]");
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
						echo "<td style='color:#333;'>";
							
							$hucre="";
							if(!empty($alanlar["g$i"]))
							{
								$dizi=explode(".",$alanlar["g$i"]);
								
								$derslik=mysql_fetch_array(@mysql_query("select * from derslikler where id=".$dizi[0]));
								$hucre .= $derslik["derslikAdi"]." <br>";
								
								$derslik=mysql_fetch_array(@mysql_query("select * from dersler where id=".$dizi[1]));
								if($derslik["id"]==$dizi[1])
								{
									$sql=mysql_query("select * from ogretmenler where id=".$derslik["ogretmen"]);
									$alan=mysql_fetch_array($sql);
									
									if($derslik["ogretmen"]!=0)
										$ogretmen=$alan["kullanici"];
									else
										$ogretmen="Öğretmen Belirlenmedi";
										
									$hucre .= $derslik["ders"]." <br>(".$ogretmen.")";
								}
								else
									$hucre .= "Ders Bulunamadı";
								
								if($dizi[2]==0)
									echo "<span style=color:red;>$hucre</span><hr>Onay Bekliyor";
								if($dizi[2]==1)
									echo "<span style=color:green;>$hucre</span><hr>Onaylandı";
							}
						echo "</td>";
					}
					?>
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