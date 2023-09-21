<?php
	//$icerikTR=mb_convert_encoding($_POST["IcerikTR"], "UTF-8", "ISO-8859-9");     UTF-8 to ISO-8859-9
	if(isset($_POST["IcerikTR"]))
	{
		$kontrol=0;
		@include('inc/baglanAR.php'); 
		$sql="update sayfalar set IcerikAR = '$_POST[IcerikAR]' where kontrol=".$_GET["kontrol"];
		if (@mysql_query($sql,$baglanAR))
			$kontrol=1;
		else
			setcookie("bildirim","Güncelleme yapýlamadý. Lütfen daha sonra tekrar deneyiniz.");
			
		if($kontrol==1)
		{
			$sql="update sayfalar set IcerikTR = '$_POST[IcerikTR]',IcerikEN = '$_POST[IcerikEN]' where kontrol=".$_GET["kontrol"];
			if (@mysql_query($sql,$baglanAR))
				setcookie("bildirim","Sayfa Güncellendi");
			else
				setcookie("bildirim","Güncelleme yapýlamadý. Lütfen daha sonra tekrar deneyiniz.");
		}
			
		header("location: index.php?sayfaduzenle&kontrol=".$_GET["kontrol"]);
	}
?>
<form action="index.php?sayfaduzenle&kontrol=<?php echo $_GET["kontrol"]; ?>" method="post" enctype="multipart/form-data">
    <div class="sol rent" style="width: 980px;">
    	<div class="sol sayfa" style="width:996px; height:38px; margin-bottom:10px; padding:2px;">
        	<div class="sol" style="padding-top:7px;"><span class="title">
            <?php
            	if($_GET["kontrol"]==1)
					echo @mb_convert_encoding("Hakkýmýzda", "UTF-8", "ISO-8859-9");
				else if($_GET["kontrol"]==2)
					echo @mb_convert_encoding("Kiralama Koþullarý", "UTF-8", "ISO-8859-9");
				else if($_GET["kontrol"]==3)
					echo @mb_convert_encoding("S.S.S", "UTF-8", "ISO-8859-9");
				else if($_GET["kontrol"]==4)
					echo @mb_convert_encoding("Ýletiþim", "UTF-8", "ISO-8859-9");
				else
					header("location: index.php?sayfalar");
					
				if(!empty($_GET["sayfaduzenle"]))
					header("location: index.php?sayfalar");
				
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select IcerikTR,IcerikEN from sayfalar where kontrol=".$_GET["kontrol"]);
				$alanlar=mysql_fetch_array($sorgu);
				
				@include('inc/baglanAR.php'); 
				$sorgu=mysql_query("select IcerikAR from sayfalar where kontrol=".$_GET["kontrol"]);
				$alanlarAR=mysql_fetch_array($sorgu);
			?>
            </span></div>
			<div class="sag" style="padding:0px;">
				<div class="sol">
                  <input type="submit" value="<?php echo @mb_convert_encoding("Güncelle", "UTF-8", "ISO-8859-9"); ?>" class="submit" id="btnSubmit" />				
		        </div>						
			</div>
		</div>
        <div class="sol sayfa" style="width:980px;color:#333333; font-size:11px;">
            <span class="title" style="padding:0;">T&uuml;rk&ccedil;e</span><div class="clear"></div>
            <textarea class="ckeditor" name="IcerikTR"><?php echo @mb_convert_encoding($alanlar["IcerikTR"], "UTF-8", "ISO-8859-9"); ?></textarea>
        </div>
        
        <div class="sol sayfa" style="width:980px;color:#333333; font-size:11px;">
            <span class="title" style="padding:0;"><?php echo @mb_convert_encoding("Ýngilizce", "UTF-8", "ISO-8859-9"); ?></span><div class="clear"></div>
            <textarea class="ckeditor" name="IcerikEN"><?php echo @mb_convert_encoding($alanlar["IcerikEN"], "UTF-8", "ISO-8859-9"); ?></textarea>
        </div>
        <div class="sol sayfa" style="width:980px; color:#333333; font-size:11px;">
            <span class="title" style="padding:0;">Arap&ccedil;a</span><div class="clear"></div>
            <textarea class="ckeditor" name="IcerikAR"><?php echo $alanlarAR["IcerikAR"];?></textarea>
        </div>
	</div>
</form>
</div>