<?php 
	ob_start(); 
	session_start(); 
	setcookie("bilgi","");
	setcookie("renk","#900");
	
	if(isset($_POST["dersEkle"]))
	{
		if($_POST["dersEkle"]==1)
			header("location:index.php?scratch&scratchDersler");
		else if($_POST["dersEkle"]==2)
			header("location:index.php?arduino&arduinoDersler");
		else if($_POST["dersEkle"]==3)
			header("location:index.php?alice&aliceDersler");
		else if($_POST["dersEkle"]==4)
			header("location:index.php?app&appDersler");
		else if($_POST["dersEkle"]==5)
			header("location:index.php?kodu&koduDersler");
		else if($_POST["dersEkle"]==6)
			header("location:index.php?SketchUp&SketchUpDersler");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php include("inc/head.php"); ?>
    <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
</head>

<body style="margin:0;padding:0;">
	<?php
        if(isset($_GET["oturumac"]) and !isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"]))
            include("inc/oturumAc.php");
            
        if(isset($_GET["oturumKuye"]))
            include("inc/oturumKapat.php");
         
        include("inc/anaMenu.php");
    ?>
    <div style="margin-top:60px;">
        <?php 
            include("login/inc/baglan.php");
            $sql=@mysql_query("select * from karsilama where id=1");
            $kayit=mysql_fetch_array($sql);
        
            	if(isset($_COOKIE['bilgi']) and !empty($_COOKIE['bilgi']))
            		echo "<section style='padding:35px 15px 15px 15px; text-align:center;text-shadow:#222 0px 0px 3px; font-size:15px; color:#fff; background:$_COOKIE[renk];'><div style='width:1320px;'>$_COOKIE[bilgi]</div></section>";
					
                if(count($_GET)==0)
                    include("inc/anasayfa.php");
                if(isset($_GET["scratch"]))
                    include("inc/scratch.php");
                if(isset($_GET["alice"]))
                    include("inc/alice.php");
                if(isset($_GET["arduino"]))
                    include("inc/arduino.php");
                if(isset($_GET["app"]))
                    include("inc/app.php");
                if(isset($_GET["kodu"]))
                    include("inc/kodu.php");
                if(isset($_GET["SketchUp"]))
                    include("inc/SketchUp.php");					
                if(isset($_GET["profil"]) and isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"]))
                    include("inc/profil/profil.php");
					
				if(isset($_GET["uyelik"]) && !isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"]))
                    include("inc/ekler/kayitOl.php");
				if(isset($_GET["hakkimizda"]))
                    include("inc/ekler/hakkimizda.php");
					
				if(isset($_GET["sifreYenile"]))
                    include("inc/mail/form.php");        
					
				if(isset($_GET["puanKaydet"]) and isset($_GET["devam"]))
                    include("inc/uyeDers/puanlama.php");
            ?>
    </div>
</body>
</html>
<?php ob_end_flush(); ?>