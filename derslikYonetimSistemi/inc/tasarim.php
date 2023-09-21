<?php
	@include('inc/baglan.php');
	$ID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkID"];
	
	$sql = mysql_query("select * from kullanici where id=".$ID);
	$alanlar=mysql_fetch_array($sql);
?>
<div class="bolum1">
        <div class="sol" style="width:100%;">
            <img src="img/yonetimLogo.png" style="float:left;"/>
            <table align="right" border="0" style="margin-right:15px; width:500px; background:none;float:right;">
                <tr>
                    <td style="background:none;">
                        <table style="float:right;background:none;" border="0">
                            <tr>
                                <td style="height:50px;background:none;">
                                    <h2 style="color:#FFF; margin:0; text-shadow:#000 1px 1px 1px; float:right;">Derslik Yönetim Sistemi</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style="background:none;"><h5 style="color:#FFF; margin:0; text-shadow:#000 1px 1px 1px; float:right;">Hoþ geldin, <?php echo $alanlar["kullanici"]; ?></h5></td>
                            </tr>
                        </table>
                    </td>
                    <td style="width:80px;background:none;"><a href="index.php?yardim"><img src="img/helpicon.png" style="float:right;" /></a></td>
                </tr>
            </table>
        </div><!-- Bölüm 1 Sað Sonu -->
      <div class="clear"></div>
  </div><!-- Bölüm 1 Ýçerik Sonu -->
</div><!-- Bölüm 1 Sonu -->
<div class="bolum2">
	<ul id="MenuBar1" class="MenuBarHorizontal">
		<li>
        	<a href="index.php" style="background: #202020 url(img/home.png) no-repeat; display:block; width:15px; <?php if(count($_GET) == 0) echo "border-color:#900;"; ?>">&nbsp;</a>
        </li>
    	 <?php 
			if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]=="admin")
			{
		 ?>
                <li>
                	<a href="index.php?bolumler" <?php if((isset($_GET["bolumler"])) or (isset($_GET["bolum"])) or (isset($_GET["yeniBolum"]))) echo "style='background:#202020;border-color:#900;'"; ?>>Bölüm - Anabilim Dallarý</a>
                </li>
                <li>
                	<a href="index.php?programlar" <?php if(isset($_GET["programlar"])) echo "style='background:#202020;border-color:#900;'"; ?>>Ders Programlarý</a>
                </li>
                <li>
                	<a href="index.php?derslikler" <?php if((isset($_GET["derslikler"])) or (isset($_GET["derslik"])) or (isset($_GET["yeniDerslik"])) or (isset($_GET["derslikDuzenle"])) or (isset($_GET["G"]))) echo "style='background:#202020;border-color:#900;'"; ?>>Derslikler</a>
                </li>
                <li>
                	<a href="index.php?mesajlar" <?php if((isset($_GET["mesajlar"])) or (isset($_GET["mesaj"]))) echo "style='background:#202020;border-color:#900;'"; ?>>Mesajlar</a>
                </li>
        <?php }else{ ?>
        	    <li>
                	<a href="index.php?programlar" <?php if(isset($_GET["programlar"])) echo "style='background:#202020;border-color:#900;'"; ?>>Ders Programý</a>
                </li>
        		<li>
                	<a href="index.php?derslikler" <?php if((isset($_GET["derslikler"])) or (isset($_GET["derslik"])) or (isset($_GET["G"]))) echo "style='background:#202020;border-color:#900;'"; ?>>Derslikler</a></li>
            	<li>
                	<a href="index.php?dersler" <?php if((isset($_GET["dersler"])) or (isset($_GET["ders"])) or (isset($_GET["yeniDers"]))) echo "style='background:#202020;border-color:#900;'"; ?>>Dersler</a></li>
            	<li>
                	<a href="index.php?ogretmenler" <?php if((isset($_GET["ogretmenler"])) or (isset($_GET["ogretmen"])) or (isset($_GET["yeniOgretmen"]))) echo "style='background:#202020;border-color:#900;'"; ?>>Öðretmenler</a>
                </li>
            	<li>
                	<a href="index.php?mesajlar" <?php if((isset($_GET["mesajlar"])) or (isset($_GET["mesaj"]))) echo "style='background:#202020;border-color:#900;'"; ?>>Mesajlar</a>
                </li>
        <?php } ?>
   				<li style="float:right;">
                	<a href="index.php?oturumKapat" style="background: #202020;width:15px;"><img src="img/exit.png" style="margin:-7px 0 0 -8px;" /></a>
                </li>
        		<li style="float:right;">
                	<a href="index.php?oturumKapat" style="background: #202020;width:20px;padding:6px 15px 9px 10px">Çýkýþ</a>
                </li>	
   				<li style="float:right;">
                	<a href="index.php?kullanici" <?php if(isset($_GET["kullanici"])) echo "style='background:#202020;border-color:#900;'"; ?>>Kullanýcý Ayarlarý</a>
                </li>		
    </ul>
</div><!-- Bölüm 2 Sonu -->
<?php if(!empty($_COOKIE["bildirim"])){?>
<center>
	<div class="bildirim" align="center">
		<h3 style="margin:0px 0 0 9px; color:#FFF;">
			<?php echo $_COOKIE["bildirim"]; ?>
        </h3>
    </div>
</center>
<?php }?>